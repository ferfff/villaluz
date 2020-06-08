<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Medicamentos</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Nuevo Medicamento Base</div>
                <div class="p-2">
                    <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
            <div class="container-fluid my-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 text-center">
                            <?php $form = ActiveForm::begin(); ?>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'fecha')->widget(DatePicker::className(),[
                                            'language' => 'es',
                                            'dateFormat' => 'php:Y-m-d',
                                            'clientOptions' =>[
                                                'yearRange' => 'c-80:c+0',
                                                'changeMonth'=> true,
                                                'changeYear'=> true,
                                            ],
                                            'options' =>[
                                                'placeholder' => 'Fecha',
                                                'class' => 'form-control'
                                            ],
                                        ])->label(false) ?> 
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'lugar')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Lugar"])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'especialista')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => "Especialista"])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
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
