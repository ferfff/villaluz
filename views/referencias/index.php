<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div class="referencias-index">
    <div class="container-fluid px-4">
        <h5 class="my-4 font-weight-bold">Administración de Referencias</h5>
        <div class="card rounded-0 border-0">
            <div class="card-body cont-vh">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Referencias</div>
                        <div class="p-1">
                            <?php 
                            if (Yii::$app->session['nivel'] == 3) {
                                echo Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                            } ?>
                        </div>
                </div>
                <?php Pjax::begin(['id' => 'referenciasgrid']); ?>
                
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
                    'rowOptions'   => function ($model, $key, $index, $grid) {
                        return ['data-id' => $model->id];
                    },
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return (Yii::$app->session['nivel'] == 3) ? Html::a('<span class="material-icons">create</span>', 
                                    ['update', 'id' => $model->id], 
                                    ['class' => 'btn btn-primary d-flex align-items-center text-light btn-sm',]
                                ) : '';
                            }
                        ],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return (Yii::$app->session['nivel'] == 3) ? Html::a('<span class="material-icons">delete_forever</span>', 
                                    ['delete', 'id' => $model->id], 
                                    [
                                        'class' => 'btn btn-danger d-flex align-items-center text-light btn-sm',
                                        'data' => ['confirm' => '¿Estás seguro quieres eliminar este usuario?','method' => 'post'], 
                                        'data-ajax' => '1',
                                    ]
                                ) : '';
                            }
                        ],
                        [
                            'label' => 'Paciente',
                            'value' => 'paciente.nombreCompleto',
                        ],
                        'nombre',
                        'paterno',
                        'materno',
                        'genero',
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
                        //['class' => 'yii\grid\ActionColumn'],
                    ],
                    'tableOptions' => ['class' => 'table table-striped table-hover table-responsive table-vh column-referencias'],
                ]);?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>