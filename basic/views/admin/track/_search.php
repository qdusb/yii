<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="track-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'orderId') ?>

    <?= $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <?php // echo $form->field($model, 'operatorId') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'memo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
