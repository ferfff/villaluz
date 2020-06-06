<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$nivel = Yii::$app->session['nivel'];
?>

<div class="registros-index">
    <div class="container-fluid px-4 mh-100">
        <h5 class="my-4 font-weight-bold">Administración de Registros</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Registros</div>
                        <div class="p-1">
                            <?php 
                            if ($nivel == 3) {
                                echo Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                            } ?>
                        </div>
                        <div class="p-1">
                            <?php 
                            if ($nivel != 1) {
                                echo Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['pdf'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]);
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