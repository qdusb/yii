<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IDCardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Id Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idcard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Id Card', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'status',
            'id',
            'name',
            'IDNumber',
            'phone',
            //'address',
            //'photo',
            //'photo1',
            //'photo2',
            //'updateTime:datetime',
            //'expiredTime:datetime',
            //'userId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
