<?php

use app\models\Produk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_produk',
            'nama_produk',
            'jenis_produk',
            'harga_produk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_produk' => $model->id_produk]);
                 }
            ],
        ],
    ]); ?>


</div>
