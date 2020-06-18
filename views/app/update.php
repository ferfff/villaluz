<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Administración de Empleados</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Editar Empleado</div>
                <div class="p-2">
                    <?= Html::a('<span class="material-icons">close</span> Cancelar', Yii::$app->request->referrer, ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']) ?>
                </div>
            </div>
            <div class="row justify-content-center m-1">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Cambiar Contraseña</div>
            </div>
            <div class="row justify-content-center my-1">
                <?php $formPass = ActiveForm::begin([
                    'action' => ['changeuserpass'],
                    'id' => 'changepass-form',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n<div class=\"errorform mt-3\">{error}</div>",
                    ],
                ]); ?>
                <div class="form-group">
                    <?= $formPass->field($modelPass, 'password')->passwordInput(['placeholder' => 'Nueva Contraseña'])->label(false) ?>
                    <?= Html::hiddenInput('id', $id) ?>
                </div>
                <div class="form-group">
                    <?= $formPass->field($modelPass, 'confirm_password')->passwordInput(['placeholder' => 'Confirmar Contraseña'])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Aceptar', ['class' => 'btn btns btn-lg']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
