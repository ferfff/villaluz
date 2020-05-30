<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
/* @var $this yii\web\View */
/* @var $model frontend\models\ChangePasswordForm */
/* @var $form ActiveForm */
?>
 
<div class="container-fluid px-4 mh-100">
    <h5 class="my-4 font-weight-bold">Administración de Empleados</h5>
    <div class="card rounded-0 mh-100 border-0">
        <div class="card-body">
            <div class="d-flex header-verde p-2 text-light align-items-center">
                <div class="mr-auto font-weight-bold p-2">Cambiar Contraseña</div>
                <div class="p-2">
                    <?= Html::a('<span class="material-icons">close</span> Cancelar', 'index', ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold btn-header']) ?>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <?php $form = ActiveForm::begin([
                    'id' => 'changepass-form',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n<div class=\"errorform mt-3\">{error}</div>",
                    ],
                ]); ?>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput()->label('New Password') ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'confirm_password')->passwordInput() ?>
                </div>
                    <div class="form-group">
                        <?= Html::submitButton('Aceptar', ['class' => 'btn btns btn-lg']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
