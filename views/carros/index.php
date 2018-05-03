<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CarrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Carros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Carros'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
//        'bootstrap' => false,
//        'striped' => false,
        'hover' => true,
        'showPageSummary' => true,
        'columns' => [
            'modelo',
            'marca.nome',
            'ano_fabricacao',
            [
                'class' => 'kartik\grid\BooleanColumn',
                'attribute' => 'ainda_fabrica'
            ],
            [
                'attribute' => 'valor',
                'format' => 'currency',
                'pageSummary' => true,
                'pageSummaryFunc' => GridView::F_SUM
            ]
        ]
    ]);
    ?>
</div>
