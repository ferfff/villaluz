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
        <h5 class="my-4 font-weight-bold">Reportes</h5>
        <div class="card rounded-0 border-0 mb-5">
            <div class="card-body cont-vh">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Reporte Semanal</div>
                        <div class="p-1">
                            <?php 
                            if ($nivel != 1) {
                                echo Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                            } ?>
                        </div>
                        <div class="p-1">
                            <?= Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['pdf'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]) ?>
                        </div>
                    </div>

                    <?php Pjax::begin(); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'headerRowOptions' => ['class' => 'header-table'],
                        'columns' => [
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
                                            'data' => ['confirm' => '¿Estás seguro quieres eliminar este reporte?','method' => 'post'], 
                                            'data-ajax' => '1',
                                        ]
                                    ) : '';
                                }
                            ],

                            //['class' => 'yii\grid\SerialColumn'],
                            'id',
                            [
                                'label' => 'Usuario',
                                'value' => 'users.username',
                            ],
                            'fecha',
                            'periodo',
                            'reporte:ntext',

                            //['class' => 'yii\grid\ActionColumn'],
                            ],
                            'tableOptions' => ['class' => 'table table-striped table-hover table-responsive table-vh column-registros'],
                            'options' => [
                                //'class' => 'header-morado',
                        ],
                    ]); ?>

                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>