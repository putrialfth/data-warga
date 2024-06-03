<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="text-center mb-5">
        <i class="fa-solid fa-user-lock fa-2xl" style="color: #005eff;"></i>
        <h3>Log In</h3>
        <p>Login untuk masuk ke sistem .</p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <div>
                <label for="username">Username</label>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control'])->label(false) ?>
            </div>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>



            <div class="form-group text-center">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <div class="my-1 mx-0 text-center" style="color:#999;">
                Belum Punya Akun? <?= Html::a('Daftar', ['site/signup']) ?>.

            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>