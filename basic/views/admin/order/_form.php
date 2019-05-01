<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waybillCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'associatedNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agentId')->textInput() ?>

    <?= $form->field($model, 'frName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frCompany')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frProvince')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frCity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frCounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frZipCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toCompany')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toDoorNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toStreet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toCounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toCity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toProvince')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toZipCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toTax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toBranch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'checkWeight')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'length')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'tax')->textInput() ?>

    <?= $form->field($model, 'insurance')->textInput() ?>

    <?= $form->field($model, 'print')->textInput() ?>

    <?= $form->field($model, 'batchId')->textInput() ?>

    <?= $form->field($model, 'createTime')->textInput() ?>

    <?= $form->field($model, 'updateTime')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'pickIn')->textInput() ?>

    <?= $form->field($model, 'instore')->textInput() ?>

    <?= $form->field($model, 'outstore')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'editTime')->textInput() ?>

    <?= $form->field($model, 'editors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lineId')->textInput() ?>

    <?= $form->field($model, 'pickInTime')->textInput() ?>

    <?= $form->field($model, 'instoreTime')->textInput() ?>

    <?= $form->field($model, 'outTime')->textInput() ?>

    <?= $form->field($model, 'pickerId')->textInput() ?>

    <?= $form->field($model, 'warehouserId')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accept')->textInput() ?>

    <?= $form->field($model, 'acceptTime')->textInput() ?>

    <?= $form->field($model, 'recept')->textInput() ?>

    <?= $form->field($model, 'receptTime')->textInput() ?>

    <?= $form->field($model, 'pay')->textInput() ?>

    <?= $form->field($model, 'payTime')->textInput() ?>

    <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'packageId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createType')->textInput() ?>

    <?= $form->field($model, 'hold')->textInput() ?>

    <?= $form->field($model, 'holdTime')->textInput() ?>

    <?= $form->field($model, 'cancel')->textInput() ?>

    <?= $form->field($model, 'cancelTime')->textInput() ?>

    <?= $form->field($model, 'auditTime')->textInput() ?>

    <?= $form->field($model, 'merchantId')->textInput() ?>

    <?= $form->field($model, 'affirm')->textInput() ?>

    <?= $form->field($model, 'sign')->textInput() ?>

    <?= $form->field($model, 'editor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
