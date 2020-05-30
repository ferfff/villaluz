<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="body-content">
    <div class="container">
        <div class="row content-items">
            <div class="col-sm-5 col-lg-7 log">
                <img src="../img/logo_villaluz_color.svg" width="250px;" alt="villaluz" class="log-position">
            </div>
            <div class="col-sm-5 col-lg-5 login_style mb-5">
                <h1 class="mb-5"><b>Bienvenido</b></h1>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "<div class=\"form-group border-input\">{input}</div>\n<div class=\"errorform mt-3\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control input_login', 'placeholder' => "Usuario"]) ?>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control input_login', 'placeholder' => "Contraseña"]) ?>
                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-block btn-lg btn-login mb-5 font-weight-bold', 'name' => 'login-button']) ?>
                <?php ActiveForm::end(); ?>
                <small id="emailHelp" class="text-light text-center">Villaluz Application Website</small>
            </div>
        </div>
    </div>
</div>
