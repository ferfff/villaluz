<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersPacientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-pacientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'pacientes_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
