<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>


                            <?php $form = ActiveForm::begin(); ?>
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'fecha')->widget(DateTimePicker::class,[
                                            'convertFormat' => true,
                                            'type' => DateTimePicker::TYPE_COMPONENT_APPEND,
                                            'removeButton' => false,
                                            'pluginOptions' => [
                                                'autoclose' => true,
                                                'format' => 'php:Y-m-d g:i A',
                                                'daysOfWeekDisabled' => [0],
                                                'hoursDisabled' => '0,1,2,3,4,5,6,7,8,19,20,21,22,23',
                                                'language' => 'es',
                                                'minuteStep' => 30,
                                                'startDate'=>date('Y-m-d'),
                                                'endDate'=> '2040-Dec-31 11:30 PM',
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
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4">
                                        <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <?= Html::submitButton('<span class="material-icons mr-2">library_add</span> Guardar', ['class' => 'btn text-center d-flex align-items-center btns btn-lg font-weight-bold']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>

