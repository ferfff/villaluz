<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <h1>Users</h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?= Html::encode("{$user->nombre} {$user->paterno} {$user->materno} ({$user->username})") ?>:
            <?= $user->ciudad ?>
            <?= Html::a('View', ['view', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update', ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $user->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </li>
    <?php endforeach; ?>
    </ul>


</div>


    <div class="container-fluid px-4 mh-100">
        <h5 class="mb-4 font-weight-bold">Escoge un paciente en la lista</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Pacientes</div>
                    <div class="p-2"><button type="button" class="btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold"><span class="material-icons mr-2">library_add</span> Nuevo</button></div>
                </div>
                <table class="table table-striped table-hover table-responsive">
                    <thead class="header-morado">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido paterno</th>
                            <th scope="col">Apellido materno</th>
                            <th scope="col">Género</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Altura</th>
                            <th scope="col">Nacimiento</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Móvil</th>
                            <th scope="col">Email</th>
                            <th scope="col">Calle</th>
                            <th scope="col">Número</th>
                            <th scope="col">Interior</th>
                            <th scope="col">Colonia</th>
                            <th scope="col">CP</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Diagnóstico</th>
                            <th scope="col">Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><button type="button" class="btn btn-primary d-flex align-items-center"><span class="material-icons">create</span></button></th>
                            <th><button type="button" class="btn btn-danger d-flex align-items-center"><span class="material-icons">delete_forever</span></button></th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Género</th>
                            <th>Edad</th>
                            <th>Altura</th>
                            <th>Nacimiento</th>
                            <th>Teléfono</th>
                            <th>Móvil</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Interior</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Diagnóstico</th>
                            <th>Activo</th>
                        </tr>
                        <tr>
                            <th><button type="button" class="btn btn-primary d-flex align-items-center"><span class="material-icons">create</span></button></th>
                            <th><button type="button" class="btn btn-danger d-flex align-items-center"><span class="material-icons">delete_forever</span></button></th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Género</th>
                            <th>Edad</th>
                            <th>Altura</th>
                            <th>Nacimiento</th>
                            <th>Teléfono</th>
                            <th>Móvil</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Interior</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Diagnóstico</th>
                            <th>Activo</th>
                        </tr>
                        <tr>
                            <th><button type="button" class="btn btn-primary d-flex align-items-center"><span class="material-icons">create</span></button></th>
                            <th><button type="button" class="btn btn-danger d-flex align-items-center"><span class="material-icons">delete_forever</span></button></th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Género</th>
                            <th>Edad</th>
                            <th>Altura</th>
                            <th>Nacimiento</th>
                            <th>Teléfono</th>
                            <th>Móvil</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Interior</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Diagnóstico</th>
                            <th>Activo</th>
                        </tr>
                        <tr>
                            <th><button type="button" class="btn btn-primary d-flex align-items-center"><span class="material-icons">create</span></button></th>
                            <th><button type="button" class="btn btn-danger d-flex align-items-center"><span class="material-icons">delete_forever</span></button></th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Género</th>
                            <th>Edad</th>
                            <th>Altura</th>
                            <th>Nacimiento</th>
                            <th>Teléfono</th>
                            <th>Móvil</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Interior</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Diagnóstico</th>
                            <th>Activo</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>