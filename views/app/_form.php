<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => "{input}",
    ],
]); ?>

<div class="form-row">
    <div class="form-group col-md-4">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'paterno')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Apellido Paterno"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'materno')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Apellido Materno"])->label(false) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => '']) ?>   
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'edad')->textInput() ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <?= $form->field($model, 'nacimiento')->textInput() ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'movil')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
</div>    

<div class="form-row">
    <div class="form-group col-md-4">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'calle')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'numero')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
    <?= $form->field($model, 'interior')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
</div>
    
<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'colonia')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'cp')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'ciudad')->dropDownList([ 'Irapuato' => 'Irapuato', 'Leon' => 'Leon', 'Salamanca' => 'Salamanca', 'Celaya' => 'Celaya', ], ['prompt' => '']) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'activo')->textInput() ?>
    </div>
</div>

<div class="d-flex justify-content-center">
    <?= Html::submitButton('<span class="material-icons mr-2">library_add</span> Agregar', ['class' => 'btn text-center d-flex align-items-center btns btn-lg']) ?>
</div>

<?php ActiveForm::end(); ?>


