<?php

/* @var $this yii\web\View */

use kartik\sortable\Sortable;

$this->title = 'My Yii Application';
?>

<?php echo Sortable::widget([
    'showHandle' => true,
    'handleLabel' => '<i class="glyphicon glyphicon-user"></i>',
    'items' => [
        ['content' => 'item 1'],
        ['content' => 'item 2', 'disabled' => true],
        ['content' => 'item 3'],
        ['content' => 'item 4'],
        ['content' => 'item 5'],
        ['content' => 'item 6'],
    ],
//    'pluginEvents' => [
//        'sortupdate' => 'function(){alert("update");return false;}'
//    ]
])?>
