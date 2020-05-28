<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>

<div class="body-content">
    <div class="container">
        <div class="row content-items">
            <div class="col-sm-5 col-lg-7 log">
                <img src="img/logo_villaluz_color.svg" width="250px;" alt="villaluz" class="log-position">
            </div>
            <div class="col-sm-5 col-lg-5 login_style mb-5">
                <h1 class="mb-5"><b>Bienvenido</b></h1>
                <form>
                    <div class="form-group border-input mb-5">
                        <input type="text" class="form-control input_login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                    </div>
                    <div class="form-group border-input mb-5">
                        <input type="password" class="form-control input_login" id="exampleInputPassword1" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-block btn-lg btn-login mb-5">Entrar</button>
                    <small id="emailHelp" class="text-light text-center">Villaluz Application Website</small>
                </form>
            </div>
        </div>
    </div>
</div>
