<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tracks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="track-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Track', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'type',
            'orderId',
            'createTime:datetime',
            //'updateTime:datetime',
            //'operatorId',
            'place',
            'memo',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
