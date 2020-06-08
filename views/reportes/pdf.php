<?php
use yii\helpers\Html;
?> 

<div class="container">
        <div class="titulo"><h5>Reportes</h5></div>
		<table id="table">
			<tr>
				<th>ID</th>
				<th>Periodo</th>
				<th>Reporte</th>	
			</tr>
			<?php foreach ($reportes as $reporte): ?>
                <tr>
                    <td><?= Html::encode("{$reporte->id}") ?></td>
                    <td><?= Html::encode("{$reporte->periodo}") ?></td>
                    <td><?= Html::encode("{$reporte->reporte}") ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
