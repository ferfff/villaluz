<?php

namespace app\controllers;

class NoticiasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
