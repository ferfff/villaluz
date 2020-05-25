<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Referencias */

$this->title = 'Create Referencias';
$this->params['breadcrumbs'][] = ['label' => 'Referencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
