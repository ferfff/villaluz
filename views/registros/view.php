<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Registros */

\yii\web\YiiAsset::register($this);
?>



<div class="container-fluid px-4">
    <h5 class="my-4 font-weight-bold">Reloj Checador</h5>
    <div class="card rounded-0 border-0 mb-5">
        <div class="card-body cont-vh">
            <div class="d-flex header-verde p-2 text-light mb-4 align-items-center">
                <div class="mr-auto font-weight-bold p-2">Favor de Registrar la Entrada o Salida</div>
            </div>
            <div class="container-fluid">
                <div class="container text-center">
                    <div class="col d-flex align-items-center flex-column">
                        <input type="hidden" id="pacienteid" value="<?= $idPaciente ?>" />
                        <div class="col-lg-6 text-center my-5">
                            <input type="button" id="checkin" value="Entrada" class="button_in"/>
                        </div>
                        <div class="col-lg-6 text-center">
                            <input type="button" id="checkout" value="Salida" class="button_out"/>
                        <div>
                    <div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 text-center font-weight-bold">
                    <span id="showMessage"></span>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
<?php
$jsCode = <<<JAVASCRIPT
    $("body").on("click", "#checkin", function (e) {
        $('#showMessage').html("");
        $('#checkin').attr("disabled", true);
        $('#checkout').attr("disabled", true);
        console.log("checkin");
        sendInfo("checkin");
    });

    $("body").on("click", "#checkout", function (e) {
        $('#showMessage').html("");
        $('#checkin').attr("disabled", true);
        $('#checkout').attr("disabled", true);
        console.log("checkout");
        sendInfo("checkout");
    });

var sendInfo = function(type) {
    var idPaciente = $("#pacienteid").val();

    $.ajax({
        method: 'POST',
        url: 'checador',
        data: {'idPaciente': idPaciente, 'type': type},
        success:function(data) {
            $('#showMessage').html(data.message);
        },
        error: function(exception) { // if error occured
            console.log(exception);
            $('#showMessage').html(exception);
        },
    }).done(function(msg) {
        $('#checkin').attr("disabled", false);
        $('#checkout').attr("disabled", false);
    });
}
    
JAVASCRIPT;

$this->registerJs($jsCode, View::POS_END);