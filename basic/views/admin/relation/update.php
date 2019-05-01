<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Relation */

$this->title = 'Update Relation: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
