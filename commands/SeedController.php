<?php
// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\User;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $faker = \Faker\Factory::create();

        $user = new User();
        for ( $i = 1; $i <= 20; $i++ )
        {
            $user->setIsNewRecord(true);
            $user->id = null;

            $user->username = $faker->userName;
            $user->password = $faker->password;
            $user->authKey = \Yii::$app->getSecurity()->generateRandomString();
            $user->nombre = $faker->name;
            $user->paterno = $faker->lastName;
            $user->materno = $faker->lastName;
            $user->genero = 'masculino';
            $user->nacimiento = $faker->date('Y-m-d');
            $user->telefono = $faker->phoneNumber;
            $user->movil = $faker->phoneNumber;
            $user->email = $faker->email;
            $user->calle = $faker->streetName;
            $user->numero = $faker->buildingNumber;
            $user->interior = 'A';
            $user->colonia = $faker->streetName;
            $user->cp = $faker->postcode;
            $user->ciudad = $faker->city;
            $user->nivel = 2;
            $user->activo = 1;
            $user->save();
            //var_dump($user);
        }
    }
}