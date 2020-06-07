<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */

$this->title = 'Create Reportes';
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Reporte Semanal</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body cont-vh">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nuevo Reporte Semanal</div>
                <div class="p-2">
                    <a class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold"><span class="material-icons">close</span> Cancelar</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCity" placeholder="Periodo">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <textarea id="pacientes-diagnostico" class="form-control" rows="8" aria-required="true" placeholder="Reporte"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg font-weight-bold"><span class="material-icons mr-2">library_add</span>Guardar</button>
                                </div>
                            </form>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>