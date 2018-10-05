<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\Marca;
use \app\models\Veiculo;
use \app\models\Locatario;
use \app\models\Funcionarios;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Reserva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reserva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marca')->dropDownList(ArrayHelper::map(Marca::find()->all(),'id', 'nome')) ?>

    <?= $form->field($model, 'modelo')->dropDownList(ArrayHelper::map(Veiculo::find()->all(),'id', 'modelo')) ?>

    <?= $form->field($model, 'data_reserva')->textInput() ?>

    <?= $form->field($model, 'cliente')->dropDownList(ArrayHelper::map(Locatario::find()->all(),'id', 'nome')) ?>

    <?= $form->field($model, 'data_baixa_reserva')->textInput() ?>

    <?= $form->field($model, 'funcionario')->dropDownList(ArrayHelper::map(Funcionarios::find()->all(),'id', 'nome')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
