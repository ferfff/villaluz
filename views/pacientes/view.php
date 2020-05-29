<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pacientes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pacientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'paterno',
            'materno',
            'genero',
            'edad',
            'altura',
            'nacimiento',
            'telefono',
            'movil',
            'email:email',
            'calle',
            'numero',
            'interior',
            'colonia',
            'cp',
            'ciudad',
            'diagnostico:ntext',
            'activo',
        ],
    ]) ?>

</div>


<div class="container-fluid px-4 mh-100">
        <h5 class="mb-4 font-weight-bold">Escoge un paciente en la lista</h5>
        <div class="card rounded-0 mh-100 border-0">
            <div class="card-body">
                <form class="form-inline mb-4 d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <span class="material-icons my-2">search</span>Filtrar por nombre:
                    </div>
                    <div class="search_iput mx-2">
                        <input class="form-control mr-sm-2 border-0 input_search" type="search" aria-label="Search">
                    </div>
                    <button class="btn mx-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Elizabeth Hernández</th>
                        </tr>
                        <tr>
                            <th>Adriana Martinez</th>
                        </tr>
                        <tr>
                            <th>Yolanda González</th>
                        </tr>
                        <tr>
                            <th>Adriana Martinez</th>
                        </tr>
                        <tr>
                            <th>Leonardo Mayorquin</th>
                        </tr>
                        <tr>
                            <th>Eduardo Velazco</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>