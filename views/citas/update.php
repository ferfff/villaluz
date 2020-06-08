<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Citas */
\yii\web\YiiAsset::register($this);
?>
<div class="citas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
