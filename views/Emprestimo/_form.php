<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */
/* @var $form yii\widgets\ActiveForm */
?> 

<div class="emprestimo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'placa')->textInput() ?>

    <?= $form->field($model, 'data_emprestimo')->input('date', []) ?>

    <?= $form->field($model, 'valor_locacao')->textInput() ?>

    <?= $form->field($model, 'cliente')->textInput() ?>

    <?= $form->field($model, 'funcionario')->textInput() ?>

    <?= $form->field($model, 'data_devolucao')->input('date', []) ?>

    <?= $form->field($model, 'ativo')->dropDownList(['1' => 'Sim' , '0' => 'Não']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
