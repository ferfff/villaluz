<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersPacientes */

$this->title = 'Update Users Pacientes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-pacientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
