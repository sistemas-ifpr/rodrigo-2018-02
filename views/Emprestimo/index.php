<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emprestimos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emprestimo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emprestimo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'placa',
            //'data_emprestimo',
            [
                'attribute'=>'data_emprestimo',
                'format'=>['DateTime','php:d/m/Y']
            ],
            //'data_devolucao',
             [
                'attribute'=>'data_devolucao',
                'format'=>['DateTime','php:d/m/Y']
            ],
            'valor_locacao',
            'cliente',
            'funcionario',
            //'label'=> 'Ativo',
             ['attribute'=>'ativo',
                'value' => function ($model) {
                    return ($model->ativo == 0)? 'Não' : 'Sim';
                }
            ],



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
