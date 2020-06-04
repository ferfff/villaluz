<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Medicamentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicamentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'base' => 'Base', 'eventual' => 'Eventual', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'medicamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'users_pacientes_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
