<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\yii\web\YiiAsset::register($this);
$nivel = Yii::$app->session['nivel'];
?>

<div class="registros-index">
    <div class="container-fluid px-4">
        <h5 class="my-4 font-weight-bold">Registro de Tiempos</h5>
        <div class="card rounded-0 border-0 mb-5">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Tiempos</div>
                        <div class="p-1">
                            <?php 
                            if ($nivel != 1) {
                                echo Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['pdf-tiempos'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]);
                            } ?>
                        </div>
                </div>
                <?php Pjax::begin(['id' => 'pacientesgrid']); ?>
                
                <?= GridView::widget([ 
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
                    'headerRowOptions' => ['class' => 'header-table'],
                    /*'rowOptions'   => function ($model, $key, $index, $grid) {
                        return ['data-id' => $model->id];
                    },*/
                    'columns' => [
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return (Yii::$app->session['nivel'] == 3) ? Html::a('<span class="material-icons">delete_forever</span>', 
                                    ['delete', 'id' => $model->id], 
                                    [
                                        'class' => 'btn btn-danger d-flex align-items-center text-light btn-sm btn-fix',
                                        'data' => ['confirm' => '¿Estás seguro quieres eliminar este tiempo?','method' => 'post'], 
                                        'data-ajax' => '1',
                                    ]
                                ) : '';
                            }
                        ],
                        [
                            'label' => 'Usuario',
                            'value' => 'users.username',
                        ],
                        [
                            'label' => 'Tiempo Laborado',
                            'value' => 'tiempo',
                        ],
                        [
                            'label' => 'Costo',
                            'value' => 'costo',
                        ],
                        [
                            'label' => 'Pago',
                            'value' => 'pago',
                        ],
                        //['class' => 'yii\grid\ActionColumn'],
                    ],
                    'tableOptions' => ['class' => 'table table-striped table-hover'],
                    'options' => [
                        //'class' => 'header-morado',
                   ],
                ]);?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>