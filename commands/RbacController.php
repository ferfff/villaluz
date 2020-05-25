<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
        
        // add "changePassword" permission
        $changePassword = $auth->createPermission('changePassword');
        $changePassword->description = 'Change passwords';
        $auth->add($changePassword);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // add "author" role and give this role the "createPost" permission
        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);

        // add "author" role and give this role the "createPost" permission
        $empleado = $auth->createRole('empleado');
        $auth->add($empleado);
        $auth->addChild($empleado, $cliente);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $empleado);
        $auth->addChild($cliente, $changePassword);
    }
}