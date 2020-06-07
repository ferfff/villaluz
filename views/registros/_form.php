<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Referencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(); ?>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'glucosa')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Glucosa"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'ta')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "T/A"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'fc')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "F.C.(x')"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'fr')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "F.R.(x')"])->label(false) ?>
                        </div>
                    </div>    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'temperatura')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Tº(Cº)"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'spo2')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "SPO2(%)"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'micciones')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Micciones"])->label(false) ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?= $form->field($model, 'evacuaciones')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Evacuaciones"])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit" class="btn text-center d-flex align-items-center btns btn-lg font-weight-bold"><span class="material-icons mr-2">library_add</span>Guardar</button>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        <div>
    </div>
</div>