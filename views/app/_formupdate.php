<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'id' => 'create-form',
    'fieldConfig' => [
        'template' => "{label}: {input}\n<div class=\"errorform mt-3\">{error}</div>",
    ],
]); ?>

<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "ID"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Nombre"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'paterno')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Apellido Paterno"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'materno')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Apellido Materno"]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => 'Género', 'placeholder' => "Género"]) ?>   
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'nacimiento')->widget(DatePicker::className(),[
            'language' => 'es',
            'dateFormat' => 'php:yy-m-d',
            'clientOptions' =>[
                'yearRange' => 'c-80:c+0',
                'changeMonth'=> true,
                'changeYear'=> true,
            ],
            'options' =>[
                'placeholder' => 'Fecha de nacimiento',
                'class' => 'form-control'
            ],
        ]) ?> 
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Teléfono"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'movil')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Móvil"]) ?>
    </div>
</div> 

<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "E-mail"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'calle')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Calle"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'numero')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Número"]) ?>
    </div>
    <div class="form-group col-md-3">
    <?= $form->field($model, 'interior')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Interior"]) ?>
    </div>
</div>
    
<div class="form-row">
    <div class="form-group col-md-3">
        <?= $form->field($model, 'colonia')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Colonia"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'cp')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Código Postal"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Ciudad"]) ?>
    </div>
    <div class="form-group col-md-3">
        <?= $form->field($model, 'nivel')->dropDownList([ '1' => '1', '2' => '2', '3' => '3', ], ['prompt' => 'Nivel']) ?>
    </div>
</div>

<div class="d-flex justify-content-center">
    <?= Html::submitButton('<span class="material-icons mr-2">save</span> Guardar', ['class' => 'btn text-center d-flex align-items-center btns btn-lg font-weight-bold']) ?>
</div>

<?php ActiveForm::end(); ?>