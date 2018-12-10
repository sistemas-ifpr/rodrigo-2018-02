<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locatários';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locatario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Locatário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'nome',
            'cpf',
            'telefone',
            'celular',
            //'endereco',
            //'num_carteira_habilitacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
