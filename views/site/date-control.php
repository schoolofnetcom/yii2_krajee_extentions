<?php

/* @var $this yii\web\View */

use kartik\datecontrol\DateControl;

$this->title = 'My Yii Application';
?>

<?php echo DateControl::widget([
    'name' => 'data_hora',
    'type' => DateControl::FORMAT_DATETIME,
    'value' => time()
])?>

<?php echo DateControl::widget([
    'name' => 'hora',
    'type' => DateControl::FORMAT_TIME,
    'value' => time()
])?>

<?php echo DateControl::widget([
//    'model' => $model, // model, que deve vir do controller
//    'attribute' => 'data_nascimento', //apenas usar se tiver atributo model
    'name' => 'data',
    'type' => DateControl::FORMAT_DATE,
    'value' => time()
])?>
