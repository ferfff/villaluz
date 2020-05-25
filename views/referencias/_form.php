<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Referencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $pacientesArray = ArrayHelper::map(\app\models\Pacientes::find()->orderBy('nombre')->all(), 'id', 'nombre') ?>
    <?= $form->field($model, 'id_paciente')->dropDownList($pacientesArray, ['prompt' => '---- Selecccione Paciente ----'])->label('paciente') ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'nacimiento')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudad')->dropDownList([ 'León' => 'León', 'Salamanca' => 'Salamanca', 'Silao' => 'Silao', 'Guanajuato' => 'Guanajuato', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'parentesco')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
