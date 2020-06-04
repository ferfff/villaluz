<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$GLOBALS['nivel'] = $nivel;
?>
<div class="users-index">
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
</div>
