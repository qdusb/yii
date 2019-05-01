<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderRelation */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Relation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ordinal',
            'name',
            'url:url',
            'target',
            //'lang',
            //'ico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
