<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pacientes */

$this->title = 'Create Pacientes';
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<div class="container-fluid px-4 mh-100">
        <h5 class="mb-4 font-weight-bold">Administración de pacientes</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Nuevo paciente</div>
                    <div class="p-2"><button type="button" class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold"><span class="material-icons">close</span> Cancelar</button></div>
                </div>
                <div class="row justify-content-center px-3 h-100">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="paterno" placeholder="Apellido paterno">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="materno" placeholder="Apellido materno">
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
                            <select id="inputState" class="form-control">
                                <option selected>Edad</option>
                                <option>50 años</option>
                                <option>51 años</option>
                                <option>52 años</option>
                                <option>53 años</option>
                                <option>54 años</option>
                                <option>55 años</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="materno" placeholder="Peso">
                            </div>
                            <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="materno" placeholder="Altura">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="nombre" placeholder="Cumpleaños">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="paterno" placeholder="Teléfono">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="materno" placeholder="Móvil">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <input type="email" class="form-control" id="nombre" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="paterno" placeholder="Calle">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="materno" placeholder="Número">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Interior">
                            </div>
                            <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="paterno" placeholder="Colonia">
                            </div>
                            <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="materno" placeholder="Código postal">
                            </div>
                            <div class="form-group col-md-3">
                            <select id="inputState" class="form-control">
                                <option selected>Ciudad</option>
                                <option>Irapuato</option>
                                <option>León</option>
                                <option>Celaya</option>
                                <option>Guanajuato</option>
                                <option>San Miguel Allende</option>
                                <option>San Francisco del Rincón</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="materno" placeholder="Diagnóstico">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg"><span class="material-icons mr-2">library_add</span> Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>