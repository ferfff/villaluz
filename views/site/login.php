<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Empresa dedicada al cuidado del adulto mayor en su domicilio"/>
    <meta name="format-detection" content="telephone=no">
    <title>Villaluz</title>
    <link rel="shortcut icon" href="/img/villaluz.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<div class="body-content">
    <div class="container">
        <div class="row content-items">
            <div class="col-sm-5 col-lg-7 log my-5">
                <img src="../img/logo_villaluz_color.svg" width="250px;" alt="villaluz" class="log-position">
            </div>
            <div class="col-sm-8 col-lg-5 login_style">
                <h1 class="mb-5"><b>Bienvenido</b></h1>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "<div class=\"form-group center-form border-input\">{input}</div>\n<div class=\"errorform mt-3\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control input_login', 'placeholder' => "Usuario"]) ?>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control input_login p-3', 'placeholder' => "Contraseña"]) ?>
                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-block btn-lg btn-login my-5 font-weight-bold', 'name' => 'login-button']) ?>
                <?php ActiveForm::end(); ?>
                <small id="emailHelp" class="text-light text-center">Villaluz Application Website</small>
            </div>
        </div>
    </div>
</div>
