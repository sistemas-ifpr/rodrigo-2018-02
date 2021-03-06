<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Veiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Veiculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'placa',
            'marca',
            'modelo',
            'ano_fabricacao',
            
            //'valor_diario',
            //'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
