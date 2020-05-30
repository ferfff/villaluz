<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
/* @var $this yii\web\View */
/* @var $model frontend\models\ChangePasswordForm */
/* @var $form ActiveForm */
 
$this->title = 'Change Password';
?>
<div class="user-changePassword">
 
    <?php $form = ActiveForm::begin(); ?>
 
        <?= $form->field($model, 'password')->passwordInput()->label('New Password') ?>
        <?= $form->field($model, 'confirm_password')->passwordInput() ?>
 
        <div class="form-group">
            <?= Html::submitButton('Change', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
 
</div>



<div class="container-fluid px-4 mh-100">
        <h5 class="my-4 font-weight-bold">Administración de Empleados</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Cambiar Contraseña</div>
                    <div class="p-2">
                        <a class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold btn-header" href="http://villaluz.localhost/app"><span class="material-icons">close</span> Cancelar</a></div>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btns btn-lg">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>