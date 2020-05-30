<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="users-index">
    <div class="container-fluid px-4 mh-100">
        <h5 class="my-4 font-weight-bold">Escoge un empleado en la lista</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Empleados</div>
                    <div class="p-2">
                        <?php 
                        if ($nivel != 1) {
                            echo Html::a('<span class="material-icons">save_alt</span>', ['pdf'], ['class' => 'btn btn-secondary d-flex align-items-center', 'target' => '_blank',]);
                        } ?>
                    </div>
                    <div class="p-2">
                        <?php 
                        if ($nivel == 3) {
                            echo Html::a('<span class="material-icons mr-2">library_add</span> Nuevo', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                        } ?>
                    </div>
                </div>
                <?php Pjax::begin(); ?>
                
                <?= GridView::widget([ 
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
                    'headerRowOptions' => ['class' => 'header-table'],
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return ($model->nivel == 3) ? Html::a('<span class="material-icons">create</span>', 
                                    ['update', 'id' => $model->id], 
                                    ['class' => 'btn btn-primary d-flex align-items-center',]
                                ) : '';
                            }
                        ],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return ($model->nivel == 3) ? Html::a('<span class="material-icons">delete_forever</span>', 
                                    ['delete', 'id' => $model->id], 
                                    [
                                        'class' => 'btn btn-danger d-flex align-items-center',
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
                ]);?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
