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


<div class="users-index">

	<div class="container">
        <div class="titulo"><h5>Empleados</h5></div>
		<table id="table">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Género</th>
				<th>Edad</th>
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
				<th>Nivel</th>
				<th>Activo</th>							  	
			</tr>
			<tr>
				<td>ferfff</td>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>1983-11-03</td>	
				<td>1234567890</td>	
				<td>1234567890</td>	
				<td>ferchofff@algo.com</td>
				<td>Juan de la Serna</td>	
				<td>210-A</td>
				<td>-</td>
				<td>Las Trojes</td>	
				<td>12345</td>
				<td>León</td>
				<td>1</td>
				<td>1</td>
			</tr>
			<tr>
				<td>ferfff</td>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>1983-11-03</td>	
				<td>1234567890</td>	
				<td>1234567890</td>	
				<td>ferchofff@algo.com</td>
				<td>Juan de la Serna</td>	
				<td>210-A</td>
				<td>-</td>
				<td>Las Trojes</td>	
				<td>12345</td>
				<td>León</td>
				<td>1</td>
				<td>1</td>
            </tr>
            <tr>
				<td>ferfff</td>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>1983-11-03</td>	
				<td>1234567890</td>	
				<td>1234567890</td>	
				<td>ferchofff@algo.com</td>
				<td>Juan de la Serna</td>	
				<td>210-A</td>
				<td>-</td>
				<td>Las Trojes</td>	
				<td>12345</td>
				<td>León</td>
				<td>1</td>
				<td>1</td>
			</tr>
			<tr>
				<td>ferfff</td>
				<td>Fernando</td>
				<td>Maldonado</td>
				<td>Galván</td>	
				<td>Masculino</td>	
				<td>36</td>
				<td>1983-11-03</td>	
				<td>1234567890</td>	
				<td>1234567890</td>	
				<td>ferchofff@algo.com</td>
				<td>Juan de la Serna</td>	
				<td>210-A</td>
				<td>-</td>
				<td>Las Trojes</td>	
				<td>12345</td>
				<td>León</td>
				<td>1</td>
				<td>1</td>
			</tr>
		</table>
	</div>

    <h1>Users</h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li>
            <p><?= Html::encode("{$user->nombre} {$user->paterno} {$user->materno} ({$user->username})") ?></p>
            <p><?= Html::encode("{$user->getEdad()}") ?></p>
            <p><?= Html::encode("{$user->nacimiento}") ?></p>
            <p><?= Html::encode("{$user->genero}") ?></p>
            <p><?= Html::encode("{$user->email}") ?></p>
            <p><?= Html::encode("{$user->ciudad}") ?></p>
            <p><?= Html::encode("{$user->nivel}") ?></p>
            <p><?= Html::encode("{$user->activo}") ?></p>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
