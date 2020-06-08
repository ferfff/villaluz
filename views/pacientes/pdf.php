<?php
use yii\helpers\Html;
?> 

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
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= Html::encode("{$paciente->nombre}") ?></td>
                    <td><?= Html::encode("{$paciente->paterno}") ?></td>
                    <td><?= Html::encode("{$paciente->materno}") ?></td>
                    <td><?= Html::encode("{$paciente->genero}") ?></td>
                    <td><?= Html::encode("{$paciente->getEdad()}") ?></td>
                    <td><?= Html::encode("{$paciente->peso}") ?></td>
                    <td><?= Html::encode("{$paciente->altura}") ?></td>
                    <td><?= Html::encode("{$paciente->nacimiento}") ?></td>
                    <td><?= Html::encode("{$paciente->telefono}") ?></td>
                    <td><?= Html::encode("{$paciente->movil}") ?></td>
                    <td><?= Html::encode("{$paciente->email}") ?></td>
                    <td><?= Html::encode("{$paciente->calle}") ?></td>
                    <td><?= Html::encode("{$paciente->numero}") ?></td>
                    <td><?= Html::encode("{$paciente->interior}") ?></td>
                    <td><?= Html::encode("{$paciente->colonia}") ?></td>
                    <td><?= Html::encode("{$paciente->cp}") ?></td>
                    <td><?= Html::encode("{$paciente->ciudad}") ?></td>
                    <td><?= Html::encode("{$paciente->diagnostico}") ?></td>
                    <td><?= Html::encode("\${$paciente->costo}") ?></td>
                    <td><?= Html::encode("\${$paciente->pago}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>