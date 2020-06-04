<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Checador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_pacientes_id')->textInput() ?>

    <?= $form->field($model, 'entrada')->textInput() ?>

    <?= $form->field($model, 'salida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
