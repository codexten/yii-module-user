<?php

use codexten\yii\web\widgets\UpdatePage;

/* @var $this yii\web\View */
/* @var $model codexten\yii\modules\user\models\AdminUser */

$this->title = Yii::t('app', 'Update Admin User: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
?>
<?php $page = UpdatePage::begin() ?>

<?php $page->beginContent('form') ?>

<?= $this->render('_form', ['model' => $model]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
