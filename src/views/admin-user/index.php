<?php

use codexten\yii\web\widgets\IndexPage;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel  */

$this->title = Yii::t('app', 'Admin Users');
?>

<?php $page = IndexPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('main-actions') ?>

<?= $page->renderButton('create', ['create'], ['class' => ['btn-success']]) ?>

<?php $page->endContent() ?>

<?php $page->beginContent('table') ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'username',
        'email',
        'password_hash',
        'auth_key',
        'access_token',
        'logged_at',
        [
            'class' => 'yii\grid\ActionColumn',
            'options' => ['style' => 'width: 5%'],
            'template' => '{update} {delete}',
        ],
    ],
]); ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
