<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'glucosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temperatura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'micciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evacuaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'users_pacientes_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
