<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pacientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'nacimiento')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudad')->dropDownList([ 'Irapuato' => 'Irapuato', 'Leon' => 'Leon', 'Salamanca' => 'Salamanca', 'Celaya' => 'Celaya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'diagnostico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
