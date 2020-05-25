<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pacientes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $genero
 * @property int $edad
 * @property float $altura
 * @property string $nacimiento
 * @property string $telefono
 * @property string $movil
 * @property string $email
 * @property string $calle
 * @property string $numero
 * @property string $interior
 * @property string $colonia
 * @property string $cp
 * @property string $ciudad
 * @property string $diagnostico
 * @property int $activo
 */
class Pacientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pacientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'materno', 'genero', 'edad', 'altura', 'nacimiento', 'telefono', 'movil', 'email', 'calle', 'numero', 'interior', 'colonia', 'cp', 'ciudad', 'diagnostico', 'activo'], 'required'],
            [['genero', 'ciudad', 'diagnostico'], 'string'],
            [['edad', 'activo'], 'integer'],
            [['altura'], 'number'],
            [['nacimiento'], 'safe'],
            [['nombre', 'paterno', 'materno', 'telefono', 'movil', 'email', 'colonia'], 'string', 'max' => 50],
            [['calle'], 'string', 'max' => 100],
            [['numero', 'cp'], 'string', 'max' => 10],
            [['interior'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'paterno' => 'Paterno',
            'materno' => 'Materno',
            'genero' => 'Genero',
            'edad' => 'Edad',
            'altura' => 'Altura',
            'nacimiento' => 'Nacimiento',
            'telefono' => 'Telefono',
            'movil' => 'Movil',
            'email' => 'Email',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'interior' => 'Interior',
            'colonia' => 'Colonia',
            'cp' => 'Cp',
            'ciudad' => 'Ciudad',
            'diagnostico' => 'Diagnostico',
            'activo' => 'Activo',
        ];
    }
}
