<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IDCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="idcard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updateTime')->textInput() ?>

    <?= $form->field($model, 'expiredTime')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
