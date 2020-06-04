<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PacientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'paterno') ?>

    <?= $form->field($model, 'materno') ?>

    <?= $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'edad') ?>

    <?php // echo $form->field($model, 'altura') ?>

    <?php // echo $form->field($model, 'nacimiento') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'movil') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'interior') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'diagnostico') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'pago') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
