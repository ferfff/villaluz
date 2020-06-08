<?php
use yii\helpers\Html;
?> 

<div class="container">
    <div class="titulo"><h5>Empleados</h5></div>
		<table id="table">
			<tr>
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
			<?php foreach ($users as $user): ?>
                <tr>
                    <td><?= Html::encode("{$user->nombre}") ?></td>
                    <td><?= Html::encode("{$user->paterno}") ?></td>
                    <td><?= Html::encode("{$user->materno}") ?></td>
                    <td><?= Html::encode("{$user->genero}") ?></td>
                    <td><?= Html::encode("{$user->getEdad()}") ?></td>
                    <td><?= Html::encode("{$user->nacimiento}") ?></td>
                    <td><?= Html::encode("{$user->telefono}") ?></td>
                    <td><?= Html::encode("{$user->movil}") ?></td>
                    <td><?= Html::encode("{$user->email}") ?></td>
                    <td><?= Html::encode("{$user->calle}") ?></td>
                    <td><?= Html::encode("{$user->numero}") ?></td>
                    <td><?= Html::encode("{$user->interior}") ?></td>
                    <td><?= Html::encode("{$user->colonia}") ?></td>
                    <td><?= Html::encode("{$user->cp}") ?></td>
                    <td><?= Html::encode("{$user->ciudad}") ?></td>
                    <td><?= Html::encode("{$user->nivel}") ?></td>
                    <td><?= Html::encode("\${$user->activo}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
