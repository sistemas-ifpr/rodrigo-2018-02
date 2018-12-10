<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuários';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
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
