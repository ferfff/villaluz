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


                <div class="row justify-content-center m-5">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="paterno" placeholder="Apellido Paterno">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="materno" placeholder="Apellido Materno">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                            <select id="inputState" class="form-control">
                                <option selected>Género</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="cumpleanos" placeholder="Cumpleaños">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="movil" placeholder="Móvil">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="calle" placeholder="Calle">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="numero" placeholder="Número">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="interior" placeholder="Interior">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="colonia" placeholder="Colonia">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cp" placeholder="Código Postal">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                            </div>
                            <div class="form-group col-md-4">
                            <select id="inputState" class="form-control">
                                <option selected>Nivel</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg"><span class="material-icons mr-2">library_add</span> Agregar</button>
                        </div>
                    </form>
                </div>