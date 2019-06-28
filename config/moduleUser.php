<?php

use yii\base\Module;

return [
    'aliases' => [
        '@moduleUser' => '@codexten/yii/modules/user',
    ],
    'modules' => [
        'user' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\user\controllers',
        ],
    ],
];
