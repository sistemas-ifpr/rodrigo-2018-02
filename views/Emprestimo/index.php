<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empréstimos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emprestimo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Empréstimo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            

            'id',
            'placa',
            //'data_emprestimo',
            [
                'attribute'=>'data_emprestimo',
                'format'=>['DateTime','php:d/m/Y H:i:s']
            ],
            //'data_devolucao',
             [
                'attribute'=>'data_devolucao',
                'format'=>['Date','php:d/m/Y ']
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
