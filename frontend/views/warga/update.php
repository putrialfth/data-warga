<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Warga $model */

$this->title = 'Update Warga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
