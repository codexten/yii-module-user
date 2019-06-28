<?php

use codexten\yii\modules\user\models\AdminUser;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model AdminUser */
?>

<div class="row">
    <div class="col-md-6">

    <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'username') ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password_hash') ?>

        <?= $form->field($model, 'auth_key') ?>

        <?= $form->field($model, 'access_token') ?>

        <?= $form->field($model, 'logged_at') ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>