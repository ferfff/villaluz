<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Citas */
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Administración de Citas Médicas</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nueva Cita Médica</div>
                <div class="p-2">
                <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
        </div>
    </div>
</div>