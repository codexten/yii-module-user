<?php

namespace codexten\yii\modules\user\models;

use Yii;

class User extends \codexten\yii\modules\auth\models\User
{
    public $user_roles;

    public function rules()
    {
        $rules = parent::rules();

        return $rules;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $authManager = Yii::$app->authManager;
        $authManager->revokeAll($this->id);
        foreach ($this->user_roles as $roleName) {
            $role = $authManager->getRole($roleName);
            if ($role === null) {
                $role = $authManager->createRole($roleName);
            }
            if (!$authManager->assign($role, $this->id)) {
                return false;
            }
        }
    }
}
