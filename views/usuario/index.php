<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            //'email:email',
            'senha',

            

            [ 'attribute' => 'email', 
             'format' => 'html',
            'value' => function ($model){
                return '<a href="mailto:'.$model->email.'">'.$model->email.'</a>';
            }],
            ['class' => 'yii\grid\ActionColumn']
        ],
    ]); ?>
</div>
