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

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha',
            'lugar',
            'especialista',
            'observaciones:ntext',
            //'users_pacientes_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

    </div>
        </div>
    </div>
</div>
