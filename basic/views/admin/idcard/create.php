<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IDCard */

$this->title = 'Create Id Card';
$this->params['breadcrumbs'][] = ['label' => 'Id Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idcard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
