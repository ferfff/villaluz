<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */

\yii\web\YiiAsset::register($this);
?>
<div class="reportes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
