<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\yii\web\YiiAsset::register($this);
$nivel = Yii::$app->session['nivel'];
?>

<div class="pacientes-index">
    <div class="container-fluid px-4">
        <h5 class="my-4 font-weight-bold">Administración de Pacientes</h5>
        <div class="card rounded-0 border-0 mb-5">
            <div class="card-body cont-vh">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Pacientes</div>
                        <div class="p-1">
                            <?= Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                        </div>
                        <div class="p-1">
                            <?= Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['pdf'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]) ?>
                        </div>
                </div>
                <?php Pjax::begin(['id' => 'pacientesgrid']); ?>
                
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
                                        'data' => ['confirm' => '¿Estás seguro quieres eliminar este paciente?','method' => 'post'], 
                                        'data-ajax' => '1',
                                    ]
                                ) : '';
                            }
                        ],
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
                        'peso',
                        'altura',
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
                        'diagnostico',
                        [
                            'label'=>'Costo',
                            'content' => function($model) {
                                return "$ ".$model->costo;
                            }
                        ],
                        [
                            'label'=>'Pago',
                            'content' => function($model) {
                                return "$ ".$model->pago;
                            }
                        ],
                        [
                            'label' => 'Activo',
                            'content' => function($model) {
                                return $model->activo == 0 ? 'No' : 'Sí';
                            }
                        ]
                        //['class' => 'yii\grid\ActionColumn'],
                    ],
                    'tableOptions' => ['class' => 'table table-striped table-hover table-responsive table-vh column-pacientes'],
                    'options' => [
                        //'class' => 'header-morado',
                   ],
                ]);?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>