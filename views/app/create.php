<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

?>

<div class="container-fluid px-4 mh-100">
    <h5 class="mb-4 font-weight-bold">Administración de Empleados</h5>
    <div class="card rounded-0 mh-100 border-0">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nuevo paciente</div>
                <div class="p-2">
                    <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
            <div class="row justify-content-center m-5">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>


                        
                        
                        
                        
                        
                    