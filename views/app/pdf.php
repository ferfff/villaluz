<?php

use yii\helpers\Html;
?> 

<div class="users-index">


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
