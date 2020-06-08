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
		padding: 0;
        margin: 0;
    }
	</style>

<div class="pacientes-index">

<div class="container">
        <div class="titulo"><h5>Pacientes</h5></div>
		<table id="table">
			<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Género</th>
				<th>Edad</th>
				<th>Peso</th>
				<th>Altura</th>
				<th>Nacimiento</th>
				<th>Teléfono</th>
				<th>Móvil</th>
				<th>E-mail</th>
				<th>Calle</th>
				<th>Número</th>
				<th>Interior</th>
				<th>Colonia</th>
				<th>C.P.</th>
				<th>Ciudad</th>
				<th>Diagnóstico</th>
				<th>Costo</th>	
				<th>Pago</th>							  	
			</tr>
			<tr>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>0</td>	
				<td>1.7</td>	
				<td>1990-03-15</td>	
				<td>1234567890</td>
				<td>1234567890</td>	
				<td>mgoodwin@hotmail.com</td>
				<td>Juan de la Serna</td>
				<td>210-A</td>	
				<td>0</td>
				<td>Las Trojes</td>
				<td>12345</td>
				<td>León</td>
				<td>Aut similique quibusdam nam voluptatem iste a. Aut omnis laboriosam dolores qui eum.</td>
				<td>123</td>
				<td>123</td>
			</tr>
			<tr>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>0</td>	
				<td>1.7</td>	
				<td>1990-03-15</td>	
				<td>1234567890</td>
				<td>1234567890</td>	
				<td>mgoodwin@hotmail.com</td>
				<td>Juan de la Serna</td>
				<td>210-A</td>	
				<td>0</td>
				<td>Las Trojes</td>
				<td>12345</td>
				<td>León</td>
				<td>Aut similique quibusdam nam voluptatem iste a. Aut omnis laboriosam dolores qui eum.</td>
				<td>123</td>
				<td>123</td>
			</tr>
			<tr>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>0</td>	
				<td>1.7</td>	
				<td>1990-03-15</td>	
				<td>1234567890</td>
				<td>1234567890</td>	
				<td>mgoodwin@hotmail.com</td>
				<td>Juan de la Serna</td>
				<td>210-A</td>	
				<td>0</td>
				<td>Las Trojes</td>
				<td>12345</td>
				<td>León</td>
				<td>Aut similique quibusdam nam voluptatem iste a. Aut omnis laboriosam dolores qui eum.</td>
				<td>123</td>
				<td>123</td>
			</tr>
			<tr>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>0</td>	
				<td>1.7</td>	
				<td>1990-03-15</td>	
				<td>1234567890</td>
				<td>1234567890</td>	
				<td>mgoodwin@hotmail.com</td>
				<td>Juan de la Serna</td>
				<td>210-A</td>	
				<td>0</td>
				<td>Las Trojes</td>
				<td>12345</td>
				<td>León</td>
				<td>Aut similique quibusdam nam voluptatem iste a. Aut omnis laboriosam dolores qui eum.</td>
				<td>123</td>
				<td>123</td>
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