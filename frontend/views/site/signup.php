<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="text-center">
        <i class="fa-solid fa-user-plus fa-2xl" style="color: #005eff;"></i>
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Daftar untuk login!</p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group text-center">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <div class="text-center">
                Sudah Punya Akun? <?= Html::a('Login', ['site/login']) ?>.
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>