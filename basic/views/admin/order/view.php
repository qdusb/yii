<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'orderNo',
            'waybillCode',
            'associatedNo',
            'agentId',
            'frName',
            'frPhone',
            'frCompany',
            'frProvince',
            'frCity',
            'frCounty',
            'frAddress',
            'frCountry',
            'frZipCode',
            'toAddress',
            'toName',
            'toPhone',
            'toCompany',
            'toDoorNo',
            'toStreet',
            'toCounty',
            'toCity',
            'toProvince',
            'toCountry',
            'toZipCode',
            'toTax',
            'toBranch',
            'IDNumber',
            'weight',
            'checkWeight',
            'volume',
            'length',
            'width',
            'height',
            'tax',
            'insurance',
            'print',
            'batchId',
            'createTime:datetime',
            'updateTime:datetime',
            'status',
            'pickIn',
            'instore',
            'outstore',
            'userId',
            'editTime:datetime',
            'editors',
            'lineId',
            'pickInTime:datetime',
            'instoreTime:datetime',
            'outTime:datetime',
            'pickerId',
            'warehouserId',
            'remarks',
            'accept',
            'acceptTime:datetime',
            'recept',
            'receptTime:datetime',
            'pay',
            'payTime:datetime',
            'origin',
            'packageId',
            'createType',
            'hold',
            'holdTime:datetime',
            'cancel',
            'cancelTime:datetime',
            'auditTime:datetime',
            'merchantId',
            'affirm',
            'sign',
            'editor',
        ],
    ]) ?>

</div>
