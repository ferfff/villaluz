<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materno')->textInput(['maxlength' => true]) ?>

    <?= $model->ciudad = 'Femenino'; ?>
    <?= $form->field($model, 'genero')->dropDownList([ 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'nacimiento')->widget(DatePicker::className(),['language' => 'es',
                                    'clientOptions' =>[
                                        'dateFormat' => 'php:Y-m-d',
                                        'yearRange' => 'c-80:c+0',
                                        'changeMonth'=> true,
                                        'changeYear'=> true,
                                    ]
                            ]) ?> 

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp')->textInput(['maxlength' => true]) ?>

    <?= $model->ciudad = 'León'; ?>
    <?= $form->field($model, 'ciudad')->dropDownList([ 'León' => 'León', 'Irapuato' => 'Irapuato', 'Salamanca' => 'Salamanca', 'Celaya' => 'Celaya', ], ['prompt' => '']) ?>

    <?= $model->nivel = 1; ?>
    <?= $form->field($model, 'nivel')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
