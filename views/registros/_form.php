<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Referencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="containerfluid">
    <div class="row">
        <form>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputCity" placeholder="Glucosa">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="T/A">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="F.C.(x')">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="F.R.(x')">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputCity" placeholder="Tº(Cº)">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="SPO2(%)">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="Micciones">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="inputZip" placeholder="Evacuaciones">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea id="pacientes-diagnostico" class="form-control" rows="2" aria-required="true" placeholder="Observaciones"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg font-weight-bold"><span class="material-icons mr-2">library_add</span>Guardar</button>
            </div>
        </form>
    <div>
</div>