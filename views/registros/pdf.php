<?php
use yii\helpers\Html;
?> 

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
			<?php foreach ($registros as $registro): ?>
                <tr>
                    <td><?= Html::encode("{$registro->users->id}") ?></td>
                    <td><?= Html::encode("{$registro->fecha}") ?></td>
                    <td><?= Html::encode("{$registro->glucosa}") ?></td>
                    <td><?= Html::encode("{$registro->ta}") ?></td>
                    <td><?= Html::encode("{$registro->fc}") ?></td>
                    <td><?= Html::encode("{$registro->fr}") ?></td>
                    <td><?= Html::encode("{$registro->temperatura}") ?></td>
                    <td><?= Html::encode("{$registro->spo2}") ?></td>
                    <td><?= Html::encode("{$registro->micciones}") ?></td>
                    <td><?= Html::encode("{$registro->evacuaciones}") ?></td>
                    <td><?= Html::encode("{$registro->observaciones}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
