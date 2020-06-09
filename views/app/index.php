<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataColumn;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\yii\web\YiiAsset::register($this);
?>
<div class="users-index">
    <div class="container-fluid px-4">
        <h5 class="my-4 font-weight-bold">Escoge un paciente en la lista</h5>
        <div class="card rounded-0 cont-vh border-0">
            <div class="card-body">
                <div class="form-inline mb-4 d-flex justify-content-center">
                    <form class="form-inline mb-3 d-flex">
                        <div class="d-flex align-items-center">
                            <span class="material-icons my-2">search</span>Filtrar por nombre:
                        </div>
                        <div class="search_iput mx-2">
                            <input id="findPacients" class="form-control mr-sm-2 border-0 input_search" type="search" aria-label="Search" onkeyup="buscarPacientes()">
                        </div>
                    </form>
                    <table id="pacientesIndexTable" class="table table-striped table-hover">
                        <tbody>
                            <?php foreach ($pacientes as $key => $paciente) { ?>
                                <tr>
                                    <td><?= "$paciente->nombre $paciente->paterno" ?></td>
                                    <td style="display:none;"><?= $paciente->id ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$jsCode = <<<JAVASCRIPT
    $('body').on('click', 'tr', function (e) {
        var pacienteid = $(this).find('td:last-child').text();
        window.location.href = "/registros/verify?id="+pacienteid;
        //$.redirect('/checador/', {'pacienteid': pacienteid,});    
    });

    var buscarPacientes = function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("findPacients");
        filter = input.value.toUpperCase();
        table = document.getElementById("pacientesIndexTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
JAVASCRIPT;

$this->registerJs($jsCode, View::POS_END);