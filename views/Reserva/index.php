<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova Reserva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'marca',
            'modelo',
            //'data_reserva',
            [
                'attribute'=>'data_reserva',
                'format'=>['DateTime','php:d/m/Y']
            ],
            'cliente',
            //'data_baixa_reserva',
            //'funcionario',

            




            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
