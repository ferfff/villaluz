<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$GLOBALS['nivel'] = $nivel;
?>
<div class="users-index">
    <div class="container-fluid px-4 mh-100">
        <h5 class="my-4 font-weight-bold">Administración de Empleados</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Empleados</div>
                        <div class="p-1">
                            <?php 
                            if ($nivel == 3) {
                                echo Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                            } ?>
                        </div>
                        <div class="p-1">
                            <?php 
                                echo Html::a('<span class="material-icons">autorenew</span><span class="txt-menu"> Cambiar Contraseña</span>', ['changepassword'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold',]);
                             ?>
                        </div>
                        <div class="p-1">
                            <?php 
                            if ($nivel == 3) {
                                echo Html::a('<span class="material-icons">group</span><span class="txt-menu"> Asignar Pacientes</span>', ['user'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold',]);
                            } ?>
                        </div>
                        <div class="p-1">
                            <?php 
                            if ($nivel != 1) {
                                echo Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['download'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]);
                            } ?>
                        </div>
                </div>
                <?php Pjax::begin(); ?>
                
                <?= GridView::widget([ 
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
                    //'layout' => "{summary}\n{items}\n<div align='center'>{pager}</div>",
                    'headerRowOptions' => ['class' => 'header-table'],
                    'pager' => [
                        //'firstPageLabel' => 'Primero',
                        //'lastPageLabel'  => 'Último',
                        //'options' => ['class' => 'pagination'],
                    ],
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return ($GLOBALS['nivel'] == 3) ? Html::a('<span class="material-icons">create</span>', 
                                    ['update', 'id' => $model->id], 
                                    ['class' => 'btn btn-primary d-flex align-items-center text-light',]
                                ) : '';
                            }
                        ],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return ($GLOBALS['nivel'] == 3) ? Html::a('<span class="material-icons">delete_forever</span>', 
                                    ['delete', 'id' => $model->id], 
                                    [
                                        'class' => 'btn btn-danger d-flex align-items-center text-light',
                                        'data' => ['confirm' => '¿Estás seguro quieres eliminar este usuario?','method' => 'post'], 
                                        'data-ajax' => '1',
                                    ]
                                ) : '';
                            }
                        ],
                        'username',
                        'nombre',
                        'paterno',
                        'materno',
                        'genero',
                        [
                            'label' => 'Edad',
                            'content' => function($model) {
                                return $model->getEdad();
                            }
                        ],
                        'nacimiento',
                        'telefono',
                        'movil',
                        'email:email',
                        'calle',
                        'numero',
                        'interior',
                        'colonia',
                        'cp',
                        'ciudad',
                        'nivel',
                        'activo',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                    'tableOptions' => ['class' => 'table table-striped table-hover table-responsive'],
                    'options' => [
                        //'class' => 'header-morado',
                   ],
                ]);
                
                ?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>







    <div class="container-fluid px-4 mh-100 my-4">
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
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Elizabeth Hernández</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Adriana Martinez</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Yolanda González</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Adriana Martinez</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Leonardo Mayorquin</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-danger btn-sm mr-2"><span class="material-icons">remove</span></button><b>Eduardo Velazco</b></th>
                                    </tr>
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
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Elizabeth Hernández</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Adriana Martinez</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Yolanda González</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Adriana Martinez</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Leonardo Mayorquin</b></th>
                                    </tr>
                                    <tr>
                                        <th><button type="button" class="btn btn-primary btn-sm mr-2"><span class="material-icons">add</span></button><b>Eduardo Velazco</b></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        
        
        
        
        
                
                
                
            </div>
        </div>
    </div>










</div>
