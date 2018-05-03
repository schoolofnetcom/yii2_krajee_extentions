<?php

/* @var $this yii\web\View */

use kartik\number\NumberControl;

$this->title = 'My Yii Application';

// http://demos.krajee.com/number
?>

<?php echo NumberControl::widget([
    'name' => "salario",
    'maskedInputOptions' => [
        'prefix' => "R$ ",
        'groupSeparator' => ".",
        'radixPoint' => ",",
        'allowMinus' => false,
        'min' => 1000,
        'max' => 10000
    ]
])?>


