<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Referencias */

\yii\web\YiiAsset::register($this);
?>
<div class="referencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_paciente',
            'nombre',
            'paterno',
            'materno',
            'genero',
            'edad',
            'nacimiento',
            'telefono',
            'movil',
            'email:email',
            'calle',
            'numero',
            'interior',
            'colonia',
            'cp',
            'ciudad',
            'parentesco',
        ],
    ]) ?>

</div>
