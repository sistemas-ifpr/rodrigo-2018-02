<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Locatario */

$this->title = 'Novo Locatário';
$this->params['breadcrumbs'][] = ['label' => 'Locatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locatario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
