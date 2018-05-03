<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca_id')->textInput() ?>

    <?= $form->field($model, 'ano_fabricacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ainda_fabrica')->textInput() ?>

    <?= $form->field($model, 'data_cadastro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
