<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Warga $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="warga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList(['0' => 'Laki-laki', '1' => 'Perempuan',], ['prompt' => 'Pilih']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->dropDownList(['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha', 'Konghucu' => 'Konghucu', 'Lainnya' => 'Lainnya'], ['prompt' => 'Pilih']) ?>

    <?= $form->field($model, 'goldar')->dropDownList(['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O',], ['prompt' => 'Pilih']) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'status')->dropDownList(
        [
            '1' => 'lokal',
            '2' => 'pindah',
        ],
        ['prompt' => 'Pilih Status']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>