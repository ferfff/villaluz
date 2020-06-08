<?php

use yii\helpers\Html;
?> 

<style>

	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

	body{
		font-family: 'Roboto', sans-serif;
		color: #3C4858;
    }
    
    h5{
        font-family: 'Roboto', sans-serif;
        color: #80007E;
        font-size: 18px;
        padding: 0;
        margin: 0;
    }

	/*------tablas---------------*/
	#table {
	border-collapse: collapse;
	width: 100%;
    margin: 0;
    font-family: 'Roboto', sans-serif;
	color: #3C4858;
	}

	#table td, #table th {
	border: 1px solid #ddd;
    padding: 8px;
    font-size: 6px;
	}

	#table tr:nth-child(even){background-color: #f2f2f2;}

	#table th {
		text-align: center;
		background-color: #80007E;
		color: white;
    }
    
    .titulo{
        float: right;
        color: #80007E;
        text-align: right;
    }
	</style>

<div class="pacientes-index">

<div class="container">
        <div class="titulo"><h5>Registros</h5></div>
		<table id="table">
			<tr>
				<th>Usuario</th>
				<th>Fecha</th>
				<th>Glucosa</th>
				<th>T/A</th>
				<th>F.C.(x')</th>
				<th>F.R.(x')</th>
				<th>Tº(ºC)</th>
				<th>SPO2(%)</th>
				<th>Micciones</th>
				<th>Evacuaciones</th>
				<th>Observaciones</th>							  	
			</tr>
			<tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
			</tr>
		</table>
	</div>

    <h1>Pacientes</h1>
    <ul>
    <?php foreach ($pacientes as $paciente): ?>
        <li>
            <p><?= Html::encode("{$paciente->nombre} {$paciente->paterno} {$paciente->materno}") ?></p>
            <p><?= Html::encode("{$paciente->getEdad()}") ?></p>
            <p><?= Html::encode("{$paciente->nacimiento}") ?></p>
            <p><?= Html::encode("{$paciente->genero}") ?></p>
            <p><?= Html::encode("{$paciente->email}") ?></p>
            <p><?= Html::encode("{$paciente->ciudad}") ?></p>
            <p><?= Html::encode("{$paciente->peso}") ?></p>
            <p><?= Html::encode("{$paciente->altura}") ?></p>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
