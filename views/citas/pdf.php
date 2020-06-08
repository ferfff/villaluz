<?php
use yii\helpers\Html;
?> 

<div class="container">
        <div class="titulo"><h5>Citas</h5></div>
		<table id="table">
			<tr>
				<th>Fecha</th>
				<th>Lugar</th>
				<th>Especialista</th>
				<th>Observaciones</th>	  	
			</tr>
			<?php foreach ($citas as $cita): ?>
                <tr>
                    <td><?= Html::encode("{$cita->fecha}") ?></td>
                    <td><?= Html::encode("{$cita->lugar}") ?></td>
                    <td><?= Html::encode("{$cita->especialista}") ?></td>
                    <td><?= Html::encode("{$cita->observaciones}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
