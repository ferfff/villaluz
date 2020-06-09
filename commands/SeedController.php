<?php
// commands/SeedController.php
namespace app\commands;

use app\models\Pacientes;
use app\models\Referencias;
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
            $user->password = '$2y$13$tWyHQsw.Ao56mFZjbjj6VO6VRtQZK5RW3hzQCUnBo5Q7VzNSY./X2';
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

    public function actionPacient()
    {
        $faker = \Faker\Factory::create();

        $paciente = new Pacientes();
        for ( $i = 1; $i <= 20; $i++ )
        {
            $paciente->setIsNewRecord(true);
            $paciente->id = null;

            //$paciente->username = $faker->userName;
            //$paciente->password = $faker->password;
            //$paciente->authKey = \Yii::$app->getSecurity()->generateRandomString();
            $paciente->nombre = $faker->name;
            $paciente->paterno = $faker->lastName;
            $paciente->materno = $faker->lastName;
            $paciente->genero = 'masculino';
            $paciente->altura = 1.70;
            $paciente->nacimiento = $faker->date('Y-m-d');
            $paciente->telefono = $faker->phoneNumber;
            $paciente->movil = $faker->phoneNumber;
            $paciente->email = $faker->email;
            $paciente->calle = $faker->streetName;
            $paciente->numero = $faker->buildingNumber;
            $paciente->interior = 'A';
            $paciente->colonia = $faker->streetName;
            $paciente->cp = $faker->postcode;
            $paciente->ciudad = $faker->city;
            $paciente->diagnostico = $faker->text(100);
            $paciente->costo = 20;
            $paciente->pago = 15;
            $paciente->save();
            //var_dump($user);
        }
    }

    public function actionReference()
    {
        $faker = \Faker\Factory::create();

        $referencia = new Referencias();
        for ( $i = 1; $i <= 5; $i++ )
        {
            $referencia->setIsNewRecord(true);
            $referencia->id = null;

            //$referencia->username = $faker->userName;
            //$referencia->password = $faker->password;
            //$referencia->authKey = \Yii::$app->getSecurity()->generateRandomString();
            $referencia->id_paciente = 5;
            $referencia->nombre = $faker->name;
            $referencia->paterno = $faker->lastName;
            $referencia->materno = $faker->lastName;
            $referencia->genero = 'masculino';
            $referencia->nacimiento = $faker->date('Y-m-d');
            $referencia->telefono = $faker->phoneNumber;
            $referencia->movil = $faker->phoneNumber;
            $referencia->email = $faker->email;
            $referencia->calle = $faker->streetName;
            $referencia->numero = $faker->buildingNumber;
            $referencia->interior = 'A';
            $referencia->colonia = $faker->streetName;
            $referencia->cp = $faker->postcode;
            $referencia->ciudad = $faker->city;
            $referencia->parentesco = 'HIJO';
            $referencia->save();
            //var_dump($user);
        }
    }
}