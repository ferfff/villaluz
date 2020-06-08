<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pacientes */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'id' => 'create-form-pacientes',
    'fieldConfig' => [
        'template' => "{input}\n<div class=\"errorform mt-3\">{error}</div>",
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
        <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => 'Género', 'placeholder' => "Género"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'peso')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Peso"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'altura')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Altura"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'nacimiento')->widget(DateTimePicker::class,[
            'convertFormat' => true,
            'type' => DateTimePicker::TYPE_COMPONENT_APPEND,
            'removeButton' => false,
            'pluginOptions' => [
                'minView' => 2,
                'autoclose' => true,
                'format' => 'php:Y-m-d',
                'yearRange' => 'c-80:c+0',
                'language' => 'es',
                'changeMonth'=> true,
                'changeYear'=> true,
                'maxDate' => '0',
                'startDate'=>'1980-01-01',
            ],
            'options' =>[
                'placeholder' => 'Fecha de nacimiento',
                'class' => 'form-control'
            ],
        ]) ?> 
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Teléfono"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'movil')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Móvil"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "E-mail"])->label(false) ?>
    </div>
</div>    

<div class="form-row">
    <div class="form-group col-md-4">
        <?= $form->field($model, 'calle')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Calle"])->label(false) ?>
    </div>
    <div class="form-group col-md-2">
        <?= $form->field($model, 'numero')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Número"])->label(false) ?>
    </div>
    <div class="form-group col-md-2">
    <?= $form->field($model, 'interior')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Interior"])->label(false) ?>
    </div>
    <div class="form-group col-md-4">
        <?= $form->field($model, 'colonia')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Colonia"])->label(false) ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'costo')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Costo/hora cliente"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'pago')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Pago/hora empleado"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'cp')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Código Postal"])->label(false) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Ciudad"])->label(false) ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="diagnostico">Diagnostico</label>
        <?= $form->field($model, 'diagnostico')->textarea(['rows' => 2]) ?>
    </div>
</div>

<div class="d-flex justify-content-center">
    <?= Html::submitButton('<span class="material-icons mr-2">library_add</span> Guardar', ['class' => 'btn text-center d-flex align-items-center btns btn-lg font-weight-bold']) ?>
</div>

<?php ActiveForm::end(); ?>