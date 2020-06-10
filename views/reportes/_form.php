<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Reporte Semanal</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body cont-vh">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nuevo Reporte Semanal</div>
                <div class="p-2">
                    <a class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold"><span class="material-icons">close</span> Cancelar</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php $form = ActiveForm::begin(); ?>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'periodo')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Periodo"])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'reporte')->textarea(['rows' => 6]) ?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <?= Html::submitButton('<span class="material-icons mr-2">library_add</span> Guardar', ['class' => 'btn text-center d-flex align-items-center btns btn-lg font-weight-bold']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
