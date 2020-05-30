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


    <div class="container-fluid px-4 mh-100">
        <h5 class="my-4 font-weight-bold">Administración de Referencias</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Nueva Referencia</div>
                    <div class="p-2">
                        <a class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold btn-header" href="http://villaluz.localhost/app"><span class="material-icons">close</span> Cancelar</a></div>
                    </div>
                </div>
                <div class="row justify-content-center m-5">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <select id="inputState" class="form-control">
                                <option selected>Paciente</option>
                                <option>...</option>
                            </select>
                            </div>
                        </div>
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
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="colonia" placeholder="Colonia">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="cp" placeholder="Código Postal">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="parentesco" placeholder="Parentesco">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg"><span class="material-icons mr-2">library_add</span> Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>