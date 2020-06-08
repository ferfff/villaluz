<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medicamentos */
\yii\web\YiiAsset::register($this);
?>
<div class="medicamentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formEventual', [
        'model' => $model,
    ]) ?>

</div>
