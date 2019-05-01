<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'orderNo') ?>

    <?= $form->field($model, 'waybillCode') ?>

    <?= $form->field($model, 'associatedNo') ?>

    <?= $form->field($model, 'agentId') ?>

    <?php // echo $form->field($model, 'frName') ?>

    <?php // echo $form->field($model, 'frPhone') ?>

    <?php // echo $form->field($model, 'frCompany') ?>

    <?php // echo $form->field($model, 'frProvince') ?>

    <?php // echo $form->field($model, 'frCity') ?>

    <?php // echo $form->field($model, 'frCounty') ?>

    <?php // echo $form->field($model, 'frAddress') ?>

    <?php // echo $form->field($model, 'frCountry') ?>

    <?php // echo $form->field($model, 'frZipCode') ?>

    <?php // echo $form->field($model, 'toAddress') ?>

    <?php // echo $form->field($model, 'toName') ?>

    <?php // echo $form->field($model, 'toPhone') ?>

    <?php // echo $form->field($model, 'toCompany') ?>

    <?php // echo $form->field($model, 'toDoorNo') ?>

    <?php // echo $form->field($model, 'toStreet') ?>

    <?php // echo $form->field($model, 'toCounty') ?>

    <?php // echo $form->field($model, 'toCity') ?>

    <?php // echo $form->field($model, 'toProvince') ?>

    <?php // echo $form->field($model, 'toCountry') ?>

    <?php // echo $form->field($model, 'toZipCode') ?>

    <?php // echo $form->field($model, 'toTax') ?>

    <?php // echo $form->field($model, 'toBranch') ?>

    <?php // echo $form->field($model, 'IDNumber') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'checkWeight') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'tax') ?>

    <?php // echo $form->field($model, 'insurance') ?>

    <?php // echo $form->field($model, 'print') ?>

    <?php // echo $form->field($model, 'batchId') ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'pickIn') ?>

    <?php // echo $form->field($model, 'instore') ?>

    <?php // echo $form->field($model, 'outstore') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <?php // echo $form->field($model, 'editTime') ?>

    <?php // echo $form->field($model, 'editors') ?>

    <?php // echo $form->field($model, 'lineId') ?>

    <?php // echo $form->field($model, 'pickInTime') ?>

    <?php // echo $form->field($model, 'instoreTime') ?>

    <?php // echo $form->field($model, 'outTime') ?>

    <?php // echo $form->field($model, 'pickerId') ?>

    <?php // echo $form->field($model, 'warehouserId') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'accept') ?>

    <?php // echo $form->field($model, 'acceptTime') ?>

    <?php // echo $form->field($model, 'recept') ?>

    <?php // echo $form->field($model, 'receptTime') ?>

    <?php // echo $form->field($model, 'pay') ?>

    <?php // echo $form->field($model, 'payTime') ?>

    <?php // echo $form->field($model, 'origin') ?>

    <?php // echo $form->field($model, 'packageId') ?>

    <?php // echo $form->field($model, 'createType') ?>

    <?php // echo $form->field($model, 'hold') ?>

    <?php // echo $form->field($model, 'holdTime') ?>

    <?php // echo $form->field($model, 'cancel') ?>

    <?php // echo $form->field($model, 'cancelTime') ?>

    <?php // echo $form->field($model, 'auditTime') ?>

    <?php // echo $form->field($model, 'merchantId') ?>

    <?php // echo $form->field($model, 'affirm') ?>

    <?php // echo $form->field($model, 'sign') ?>

    <?php // echo $form->field($model, 'editor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
