<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reporte')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'users_pacientes_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
