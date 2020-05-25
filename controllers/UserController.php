<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\Users';

    
}