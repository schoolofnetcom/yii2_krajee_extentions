<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CarrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'marca_id') ?>

    <?= $form->field($model, 'ano_fabricacao') ?>

    <?= $form->field($model, 'valor') ?>

    <?php // echo $form->field($model, 'ainda_fabrica') ?>

    <?php // echo $form->field($model, 'data_cadastro') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
