<?php

use yii\helpers\Html;
?> 

<div class="pacientes-index">


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
