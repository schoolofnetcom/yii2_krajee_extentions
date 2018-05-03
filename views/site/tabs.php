<?php

/* @var $this yii\web\View */

use kartik\tabs\TabsX;

$this->title = 'My Yii Application';
?>

<?php

echo TabsX::widget([
    'items' => [
        [
            'label' => "<i class='glyphicon glyphicon-bell'></i> Money",
            'content' => $this->render('money')
        ],
        [
            'label' => "<i class='glyphicon glyphicon-list'></i> Sortable",
            'content' => $this->render("sortable")
        ]
    ],
    'encodeLabels' => false,
    'position' => TabsX::POS_ABOVE,
    'bordered' => true,
    'align' => TabsX::ALIGN_CENTER
]);

?>
