<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */

$this->title = 'Create Veiculo';
$this->params['breadcrumbs'][] = ['label' => 'Veiculo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
