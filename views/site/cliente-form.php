<?php

/* @var $this yii\web\View */

use kartik\number\NumberControl;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;use kartik\widgets\Select2;

$this->title = 'My Yii Application';
?>

<?php

$form = ActiveForm::begin();

echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 3,
    'attributes' => [
        'nome' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => "Inform seu nome .."]],
        'email' => ['type' => Form::INPUT_TEXT],
        'telefone' => ['type' => Form::INPUT_TEXT],
    ]
//    'attributes' => $model->formAttributes()
]);

echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 2,
    'attributes' => [
        'cidade' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => Select2::className(),
            'options' => [
                'data' => [
                    '1' => "Curitiba",
                    '2' => "São Paulo",
                    '3' => "Belo Horizonte",
                    '4' => "Porto Alegre"
                ]
            ],
        ],
        'renda' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => NumberControl::className(),
            'options' => [
                'maskedInputOptions' => [
                    'prefix' => "R$ ",
                    'groupSeparator' => ".",
                    'radixPoint' => ",",
                    'allowMinus' => false,
                    'min' => 1000,
                    'max' => 10000
                ]
            ]
        ]
    ]
]);

ActiveForm::end()
?>

