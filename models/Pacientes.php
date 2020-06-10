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
 * @property float $peso
 * @property float $altura
 * @property string $nacimiento
 * @property string|null $telefono
 * @property string|null $movil
 * @property string $email
 * @property string $calle
 * @property string $numero
 * @property string|null $interior
 * @property string $colonia
 * @property string $cp
 * @property string $ciudad
 * @property string $diagnostico
 * @property float $costo
 * @property float $pago
 *
 * @property Referencias[] $referencias
 * @property UsersPacientes[] $usersPacientes
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
            [['nombre', 'paterno', 'materno', 'genero', 'peso', 'altura', 'nacimiento', 'email', 'calle', 'numero', 'colonia', 'cp', 'ciudad', 'diagnostico', 'costo', 'pago'], 'required'],
            [['ciudad', 'diagnostico'], 'string'],
            ['genero', 'in', 'range'=>['Masculino','Femenino']],
            ['genero', 'required', 'message' => 'Seleccione un género'],
            [['altura', 'peso', 'costo', 'pago'], 'number'],
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
            'paterno' => 'Apellido Paterno',
            'materno' => 'Apellido Materno',
            'genero' => 'Género',
            'peso' => 'Peso',
            'altura' => 'Altura',
            'nacimiento' => 'Nacimiento',
            'telefono' => 'Teléfono',
            'movil' => 'Mévil',
            'email' => 'Email',
            'calle' => 'Calle',
            'numero' => 'Némero',
            'interior' => 'Interior',
            'colonia' => 'Colonia',
            'cp' => 'Código Postal',
            'ciudad' => 'Ciudad',
            'diagnostico' => 'Diagnostico',
            'costo' => 'Costo',
            'pago' => 'Pago',
        ];
    }

    /**
     * Gets query for [[Referencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferencias()
    {
        return $this->hasMany(Referencias::className(), ['id_paciente' => 'id']);
    }

    /**
     * Gets query for [[UsersPacientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersPacientes()
    {
        return $this->hasMany(UsersPacientes::className(), ['pacientes_id' => 'id']);
    }

    public function getNombreCompleto () {
        return "$this->nombre $this->paterno";
    }

    public function getEdad() 
    {
        $from = new \DateTime($this->nacimiento);
        $to   = new \DateTime('today');
        
        return $from->diff($to)->y;
    
    }
}
