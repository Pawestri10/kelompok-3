<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Detail $model */

$this->title = 'Update Detail: ' . $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id_detail' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
