<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersPacientes */

$this->title = 'Create Users Pacientes';
$this->params['breadcrumbs'][] = ['label' => 'Users Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-pacientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
