<?php
 
 return [
  'nombre' => $faker->firstName,
  'paterno' => $faker->firstName,
  'materno' => $faker->firstName,
  'genero' => 'Masculino',
  'nacimiento' => $faker->date,
  'telefono' => $faker->phoneNumber,
  'movil' => $faker->phoneNumber,
  'email' => $faker->email,
  'ciudad' => $faker->city,
  'calle' => $faker->firstName,
  'numero' => $faker->firstName,
  'interior' => $faker->firstName,
  'colonia' => $faker->firstName,
  'cp' => $faker->firstName,
  'nivel' => 2,
  'activo' =>1,
  'password' => Yii::$app->getSecurity()->generatePasswordHash('password_' . $index),
  'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
  'username' => $faker->sentence(1, true),  // generate a sentence with 7 words
];
