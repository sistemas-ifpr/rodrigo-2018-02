<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano_fabricacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor_diario')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>
    
         <div class="row">
            <?php echo $form->labelEx($model,'image'); ?>
            <?php echo CHtml::activeFileField($model, 'image'); ?>  // by this we can upload image
            <?php echo $form->error($model,'image'); ?>
    </div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
         <?php echo CHtml::image(Yii::app()->request->baseUrl.'/banner/'.$model->image,"image",array("width"=>200)); ?>  // Image shown here if page is update page
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>




</div>