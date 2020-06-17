<?php
use yii\helpers\Html;
?> 

<div class="container">
        <div class="titulo"><h5>Medicamentos Base</h5></div>
		<table id="table">
			<tr>
				<th>Usuario</th>
				<th>Medicamento</th>
				<th>Dosis</th>
				<th>Horario</th>					  	
			</tr>
			<?php foreach ($medicamentos as $medicamento): ?>
                <tr>
                    <td><?= Html::encode("{$medicamento->users->id}") ?></td>
                    <td><?= Html::encode("{$medicamento->medicamento}") ?></td>
                    <td><?= Html::encode("{$medicamento->dosis}") ?></td>
                    <td><?= Html::encode("{$medicamento->horario}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
