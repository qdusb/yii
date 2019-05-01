<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IDCardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="idcard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'IDNumber') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'photo1') ?>

    <?php // echo $form->field($model, 'photo2') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <?php // echo $form->field($model, 'expiredTime') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
