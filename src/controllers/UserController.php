<?php

namespace codexten\yii\modules\user\controllers;

use codexten\yii\helpers\ArrayHelper;
use codexten\yii\modules\auth\models\User;
use codexten\yii\web\CrudController;

class UserController extends CrudController
{
    public $modelClass = User::class;

    /**
     * @return array
     */
    public function getPathMaps(): array
    {
        return ArrayHelper::merge([
            '@moduleUser/views/user',
        ], parent::getPathMaps());
    }

}
