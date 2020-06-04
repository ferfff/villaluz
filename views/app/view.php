<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
?>


<div class="card rounded-0 mh-100 border-0">
    <div class="card-body">
        <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
            <div class="mr-auto font-weight-bold p-2">Asignar Pacientes</div>
            <div class="p-2">
                <button type="button" class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold"><span class="material-icons">close</span> Cancelar</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                        <div class="mr-auto font-weight-bold p-2">Pacientes Asignados</div>
                    </div>
                    <form class="form-inline mb-4 d-flex">
                        <div class="d-flex align-items-center">
                            <span class="material-icons my-2">search</span>Filtrar por nombre:
                        </div>
                        <div class="search_iput mx-2">
                            <input class="form-control mr-sm-2 border-0 input_search" type="search" aria-label="Search">
                        </div>
                        <button class="btn mx-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                    <table id="pacientesAsignados" class="table table-striped table-hover">
                        <tbody>
                            <?php
                                foreach ($assigned as $key => $userspacientes) {?>
                                    <tr>
                                        <th>
                                            <?= Html::button('<span class="material-icons">remove</span>', ['class' => 'btn btn-danger btn-sm mr-2', 'onclick' => "desasignar(".$userspacientes->pacientes->id.",".$userid.");"]);?>
                                            <b><?= $userspacientes->pacientes->nombre." ".$userspacientes->pacientes->paterno; ?></b>
                                        </th>
                                    </tr>
                                <?php
                                } // end foreach
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                        <div class="mr-auto font-weight-bold p-2">Pacientes Disponibles</div>
                    </div>
                    <form class="form-inline mb-4 d-flex">
                        <div class="d-flex align-items-center">
                            <span class="material-icons my-2">search</span>Filtrar por nombre:
                        </div>
                        <div class="search_iput mx-2">
                            <input class="form-control mr-sm-2 border-0 input_search" type="search" aria-label="Search">
                        </div>
                        <button class="btn mx-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <?php
                                foreach ($notAssigned as $key => $pacientes) { ?>
                                    <tr>
                                        <th>
                                            <?= Html::a('<span class="material-icons">add</span>', ['assign', 'id' => $pacientes->id], ['class' => 'btn btn-primary btn-sm mr-2',]);?>
                                            <b><?= $pacientes->nombre." ".$pacientes->paterno; ?></b>
                                        </th>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
/*$this->registerJs('jQuery("#w0").on("keyup", "input", function(){

    jQuery(this).change();

    //OR $.pjax.reload({container:\'#w0\'});

});',

yii\web\View::POS_READY);*/

$jsViewCode = <<<JAVASCRIPT

JAVASCRIPT;

$this->registerJs($jsViewCode, View::POS_END);