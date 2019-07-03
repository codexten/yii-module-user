<?php

use codexten\yii\modules\user\models\User;
use yii\bootstrap\ActiveForm;

/* @var $form ActiveForm */
/* @var $model User */
?>

<?= $form->field($model, 'username') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'password') ?>

