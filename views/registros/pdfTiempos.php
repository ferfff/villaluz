<?php
use yii\helpers\Html;
?> 

<div class="container">
        <div class="titulo"><h5>Tiempos</h5></div>
		<table id="table">
			<tr>
				<th>Usuario</th>
				<th>Entrada</th>
				<th>Salida</th>
				<th>Tiempo Laborado</th>
				<th>Costo</th>
				<th>Pago</th>
			</tr>
			<?php foreach ($tiempos as $tiempo): ?>
                <tr>
                    <td><?= Html::encode("{$tiempo->users->username}") ?></td>
                    <td><?= Html::encode("{$tiempo->entrada}") ?></td>
                    <td><?= Html::encode("{$tiempo->salida}") ?></td>
                    <td><?= Html::encode("{$tiempo->tiempo}") ?></td>
                    <td><?= (Yii::$app->session['nivel'] == 3) ? Html::encode("{$tiempo->costo}") : '-' ?></td>
                    <td><?= (Yii::$app->session['nivel'] == 3) ? Html::encode("{$tiempo->pago}") : '-' ?></td>
                </tr>
            <?php endforeach; ?>
		</table>
	</div>
</div>
