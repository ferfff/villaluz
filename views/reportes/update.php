<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */

\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Reporte Semanal</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body cont-vh">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nuevo Reporte Semanal</div>
                <div class="p-2">
                <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><?= Html::encode($this->title) ?></h1>
                            <?= $this->render('_form', [
                                'model' => $model,
                            ]) ?>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
