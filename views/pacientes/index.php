<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacientes-index">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pacientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php Pjax::begin(); ?>
    
    <?= GridView::widget([ 
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'paterno',
            'materno',
            'genero',
            //'edad',
            //'altura',
            //'nacimiento',
            //'telefono',
            //'movil',
            //'email:email',
            //'calle',
            //'numero',
            //'interior',
            //'colonia',
            //'cp',
            //'ciudad',
            //'diagnostico:ntext',
            //'activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>


    <nav class="navbar navbar-expand-lg bar-style px-3">
        <a class="navbar-brand my-2" href="#"><img src="img/logo_villaluz_blanco.svg" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-icons text-light menu-ico">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-active text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">search</span>  Filtrar Nombre</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">assignment</span> Pacientes</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">description</span>Referencias</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">assignment_ind</span>Empleados</a></button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active d-flex align-items-center mx-1">
                    Hola, Oscar Pérez
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">exit_to_app</span>Cerrar Sesión</a></button>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid px-4 mh-100">
        <h5 class="mb-4 font-weight-bold">Escoge un paciente en la lista</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <form class="form-inline mb-4 d-flex justify-content-center">
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
                        <tr>
                            <th>Elizabeth Hernández</th>
                        </tr>
                        <tr>
                            <th>Adriana Martinez</th>
                        </tr>
                        <tr>
                            <th>Yolanda González</th>
                        </tr>
                        <tr>
                            <th>Adriana Martinez</th>
                        </tr>
                        <tr>
                            <th>Leonardo Mayorquin</th>
                        </tr>
                        <tr>
                            <th>Eduardo Velazco</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
