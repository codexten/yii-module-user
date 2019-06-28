<?php


namespace codexten\yii\modules\user\controllers;


use codexten\yii\modules\user\models\AdminUser;
use codexten\yii\modules\user\models\search\AdminUserSearch;

class AdminController extends UserController
{
    public $modelClass = AdminUser::class;

    /**
     * {@inheritDoc}
     */
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['newSearchModel'] = function () {
            $model = new AdminUserSearch();

            return $model;

        };

        return $actions;
    }

}
