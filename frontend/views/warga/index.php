<?php

use common\models\Warga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\WargaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Warga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Warga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'header' => 'NO',
                'class' => 'yii\grid\SerialColumn'
            ],

            //'id',
            'no_kk',
            'nik',
            'nama',
            //'jk',
            [
                'attribute' => 'Jenis Kelamin',
                'filter' => Html::activeDropdownList(
                    $searchModel,
                    'jk',
                    [
                        '0' => 'Laki-laki',
                        '1' => 'Perempuan'
                    ],
                    ['class' => 'form-control', 'prompt' => 'pilih']
                ),
                'value' => function (Warga $model) {
                    return $model->getJk();
                },
            ],
            'alamat',
            'agama',
            'goldar',
            //'tgl_masuk',
            //'status',
            [
                'attribute' => 'status',
                'filter' => Html::activeDropdownList(
                    $searchModel,
                    'status',
                    [
                        '1' => 'Lokal',
                        '2' => 'Pindah'
                    ],
                    ['class' => 'form-control', 'prompt' => 'pilih']
                ),
                'value' => function (Warga $model) {
                    return $model->statusButtonColor;
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'tgl_masuk',
                'format' => 'date',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->tgl_masuk, 'php:d-m-Y');
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Warga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>