<?php

use yii\grid\GridView;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'username',
        'email',
        'logged_at',
        [
            'class' => 'yii\grid\ActionColumn',
            'options' => ['style' => 'width: 5%'],
            'template' => '{update} {delete} {login}',
            'buttons' => [
                'login' => function ($url, $model, $key) {
                    return \yii\bootstrap\Html::a('<i class="fas fa-sign-in-alt"></i>', $model->loginUrl,
                        ['target' => '_blank']);
                },
            ],
        ],
    ],
]); ?>
