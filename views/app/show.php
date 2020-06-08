<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\yii\web\YiiAsset::register($this);
$nivel = Yii::$app->session['nivel'];
?>
<div class="users-index">
    <div class="container-fluid px-4">
        <h5 class="my-4 font-weight-bold">Administración de Empleados</h5>
        <div class="card rounded-0 border-0">
            <div class="card-body cont-vh">
                <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                    <div class="mr-auto font-weight-bold p-2">Empleados</div>
                        <div class="p-1">
                            <?php 
                            if ($nivel == 3) {
                                echo Html::a('<span class="material-icons">library_add</span><span class="txt-menu"> Nuevo</span>', ['create'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold']);
                            } ?>
                        </div>
                        <div class="p-1">
                            <?php 
                                echo Html::a('<span class="material-icons">autorenew</span><span class="txt-menu"> Cambiar Contraseña</span>', ['changepassword'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold',]);
                             ?>
                        </div>
                        <div class="p-1">
                            <?php 
                            if ($nivel != 1) {
                                echo Html::a('<span class="material-icons">save_alt</span><span class="txt-menu"> Descargar</span>', ['pdf'], ['class' => 'btn btn-outline-light border-0 rounded-0 d-flex align-items-center font-weight-bold', 'target' => '_blank',]);
                            } ?>
                        </div>
                </div>
                <?php Pjax::begin(['id' => 'empleadosgrid']); ?>
                
                <?= GridView::widget([ 
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
                    //'layout' => "{summary}\n{items}\n<div align='center'>{pager}</div>",
                    'headerRowOptions' => ['class' => 'header-table'],
                    'pager' => [
                        //'firstPageLabel' => 'Primero',
                        //'lastPageLabel'  => 'Último',
                        //'options' => ['class' => 'pagination'],
                    ],
                    'rowOptions'   => function ($model, $key, $index, $grid) {
                        return ['data-id' => $model->id];
                    },
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return (Yii::$app->session['nivel'] == 3) ? Html::a('<span class="material-icons">create</span>', 
                                    ['update', 'id' => $model->id], 
                                    ['class' => 'btn btn-primary d-flex align-items-center text-light btn-sm',]
                                ) : '';
                            }
                        ],
                        [
                            'format' => 'raw',
                            'label' => '',
                            'content' => function($model) {
                                return (Yii::$app->session['nivel'] == 3) ? Html::a('<span class="material-icons">delete_forever</span>', 
                                    ['delete', 'id' => $model->id], 
                                    [
                                        'class' => 'btn btn-danger d-flex align-items-center text-light btn-sm',
                                        'data' => ['confirm' => '¿Estás seguro quieres eliminar este usuario?','method' => 'post'], 
                                        'data-ajax' => '1',
                                    ]
                                ) : '';
                            }
                        ],
                        'username',
                        'nombre',
                        'paterno',
                        'materno',
                        'genero',
                        [
                            'label' => 'Edad',
                            'content' => function($model) {
                                return $model->getEdad();
                            }
                        ],
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
                        'nivel',
                        'activo',
                        //['class' => 'yii\grid\ActionColumn'],
                    ],
                    'tableOptions' => ['class' => 'table table-striped table-hover table-responsive table-vh column-empleados'],
                    'options' => [
                        //'class' => 'header-morado',
                   ],
                ]);?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4 mh-100 my-4" id="showEmployeeView"></div>

</div>
<?php
$jsCode = <<<JAVASCRIPT
    $('body').on('click', 'td', function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this) {
            $.ajax({
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
            });
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
                row.find('button').removeClass( "btn-primary" ).addClass( "btn-danger" );
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
                row.find('button').removeClass( "btn-danger" ).addClass( "btn-primary" );
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