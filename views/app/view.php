<?php
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
\yii\web\YiiAsset::register($this);
?>

<div class="card rounded-0 mh-100 border-0">
    <div class="card-body">
        <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
            <div class="mr-auto font-weight-bold p-2">Asignar Pacientes a: <span class="font-weight-bold nombre_empleado"><?= $user->username ?></span></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                        <div class="mr-auto font-weight-bold p-2">Pacientes Asignados</div>
                        <input type="hidden" id="iduser" value="<?= $user->id ?>" />
                    </div>
                    <form class="form-inline mb-4 d-flex">
                        <div class="d-flex align-items-center">
                            <span class="material-icons my-2">search</span>Filtrar por nombre:
                        </div>
                        <div class="search_iput mx-2">
                            <input class="form-control mr-sm-2 border-0 input_search" id="searchAsignados" type="search" aria-label="Search" onkeyup="buscarAsignados()">
                        </div>
                    </form>
                    <table id="tblAsignados" class="table table-striped table-hover">
                        <tbody id="eliminarTable">
                            <?php
                                foreach ($assigned as $key => $userspacientes) {?>
                                    <tr>
                                        <th>
                                            <?= Html::button('<span class="material-icons">remove</span>', ['class' => 'btn btn-danger btn-sm mr-2 eliminar', 'id' => $userspacientes->pacientes->id]);?>
                                            <b><?= $userspacientes->pacientes->nombre." ".$userspacientes->pacientes->paterno; ?></b>
                                        </th>
                                    </tr>
                                <?php
                                } // end foreach
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                        <div class="mr-auto font-weight-bold p-2">Pacientes Disponibles</div>
                    </div>
                    <form class="form-inline mb-4 d-flex">
                        <div class="d-flex align-items-center">
                            <span class="material-icons my-2">search</span>Filtrar por nombre:
                        </div>
                        <div class="search_iput mx-2">
                            <input class="form-control mr-sm-2 border-0 input_search" id="searchDesignados" type="search" aria-label="Search" onkeyup="buscarDesasignados()">
                        </div>
                    </form>
                    <table id="tblDesasignados" class="table table-striped table-hover">
                        <tbody id="agregarTable">
                            <?php
                                foreach ($notAssigned as $key => $pacientes) { ?>
                                    <tr>
                                        <th>
                                            <?= Html::button('<span class="material-icons">add</span>',  ['class' => 'btn btn-primary btn-sm mr-2 agregar', 'id'=> $pacientes->id]);?>
                                            <b><?= $pacientes->nombre." ".$pacientes->paterno; ?></b>
                                        </th>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$jsCode = <<<JAVASCRIPT
    $('body').on('click', 'td', function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this) {
            window.location.href = "/app/view?id="+id;

            /*$.ajax({
                method: 'GET',
                url: 'view',
                data: {'id': id},
                success:function(data) {
                    $('#showEmployeeView').html(data);
                    window.location.hash = '#showEmployeeView'; 
                },
                error: function(exception) { // if error occured
                    console.log(exception);
                },
            });*/
        }
    });

    $('body').on('click', '.agregar', function (e) {
        var pacienteid = $(this).attr('id');
        var iduser = $("#iduser").val();
        $.ajax({
            method: 'POST',
            url: 'asignar',
            data: {'pacienteid': pacienteid, 'userid': iduser},
            context: this,
            success:function() {
                var row = $(this).closest("tr").clone();
                $(this).closest("tr").remove();
                row.appendTo($("#eliminarTable"));
                row.find('button').removeClass( "btn-primary agregar" ).addClass( "btn-danger eliminar" );
                row.find('span').text('remove');
            },
            error: function(exception) { // if error occured
                console.log(exception);
            },
        }); 
    });

    $('body').on('click', '.eliminar', function (e) {
        var pacienteid = $(this).attr('id');
        var iduser = $("#iduser").val();
        $.ajax({
            method: 'POST',
            url: 'desasignar',
            data: {'pacienteid': pacienteid, 'userid': iduser},
            context: this,
            success:function() {
                var row = $(this).closest("tr").clone();
                $(this).closest("tr").remove();
                row.appendTo($("#agregarTable"));
                row.find('button').removeClass( "btn-danger eliminar" ).addClass( "btn-primary agregar" );
                row.find('span').text('add');
            },
            error: function(exception) { // if error occured
                console.log(exception);
            },
        });
    });

    var buscarAsignados = function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchAsignados");
        filter = input.value.toUpperCase();
        table = document.getElementById("tblAsignados");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("th")[0];
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

    var buscarDesasignados = function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchDesignados");
        filter = input.value.toUpperCase();
        table = document.getElementById("tblDesasignados");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("th")[0];
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