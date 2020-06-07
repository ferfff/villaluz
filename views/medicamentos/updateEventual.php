<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medicamentos */

$this->title = 'Update Medicamentos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medicamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medicamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formEventual', [
        'model' => $model,
    ]) ?>

</div>


<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Medicamentos</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Editar Medicamento</div>
                <div class="p-2">
                    <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
            <div class="container-fluid my-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 text-center">
                            <form>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCity" placeholder="Medicamento">
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCity" placeholder="Periodo">
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCity" placeholder="Dosis">
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCity" placeholder="Horario">
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