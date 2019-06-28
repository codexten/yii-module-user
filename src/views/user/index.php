<?php

use codexten\yii\web\widgets\IndexPage;
use yii\grid\GridView;
use yii\grid\SerialColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
?>
<?php $page = IndexPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('main-actions') ?>

<?php $page->endContent() ?>

<?php $page->beginContent('table') ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'class' => SerialColumn::class,
        ],
        [
            'attribute' => 'username',
        ],

    ],
]); ?>

<?php $page->endContent() ?>

<?php $page->end() ?>

