<?php

namespace codexten\yii\modules\user\controllers;

use codexten\yii\modules\auth\models\User;
use codexten\yii\web\CrudController;

class UserController extends CrudController
{
    public $modelClass = User::class;

}
