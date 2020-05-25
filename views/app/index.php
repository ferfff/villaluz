<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <h1>Users</h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?= Html::encode("{$user->nombre} {$user->paterno} {$user->materno} ({$user->username})") ?>:
            <?= $user->ciudad ?>
            <?= Html::a('View', ['view', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update', ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $user->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </li>
    <?php endforeach; ?>
    </ul>


</div>
