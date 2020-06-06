<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Registros */

\yii\web\YiiAsset::register($this);
?>
<div>
    <input type="hidden" id="pacienteid" value="<?= $idPaciente ?>" />
    <input type="button" id="checkin" value="Entrada" />
    <input type="button" id="checkout" value="Salida" />

    <div>
        <span id="showMessage"></span>
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