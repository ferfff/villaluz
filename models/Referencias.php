<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "referencias".
 *
 * @property int $id
 * @property int $id_paciente
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $genero
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
 * @property string $parentesco
 *
 * @property Pacientes $paciente
 */
class Referencias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referencias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'nombre', 'paterno', 'materno', 'genero', 'nacimiento', 'telefono', 'movil', 'email', 'calle', 'numero', 'interior', 'colonia', 'cp', 'ciudad', 'parentesco'], 'required'],
            [['id_paciente'], 'integer'],
            [['ciudad'], 'string'],
            ['genero', 'in', 'range'=>['Masculino','Femenino']],
            ['genero', 'required', 'message' => 'Seleccione un género'],
            [['nacimiento'], 'safe'],
            [['nombre', 'paterno', 'materno', 'email', 'calle', 'colonia'], 'string', 'max' => 50],
            [['telefono', 'movil'], 'string', 'max' => 20],
            [['numero', 'cp', 'parentesco'], 'string', 'max' => 10],
            [['interior'], 'string', 'max' => 5],
            [['id_paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::className(), 'targetAttribute' => ['id_paciente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_paciente' => 'Id Paciente',
            'nombre' => 'Nombre',
            'paterno' => 'Paterno',
            'materno' => 'Materno',
            'genero' => 'Género',
            'nacimiento' => 'Nacimiento',
            'telefono' => 'Teléfono',
            'movil' => 'Móvil',
            'email' => 'E-mail',
            'calle' => 'Calle',
            'numero' => 'Número',
            'interior' => 'Interior',
            'colonia' => 'Colonia',
            'cp' => 'Código Postal',
            'ciudad' => 'Ciudad',
            'parentesco' => 'Parentesco',
        ];
    }

    /**
     * Gets query for [[Paciente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Pacientes::className(), ['id' => 'id_paciente']);
    }

    public function getEdad() 
    {
        $from = new \DateTime($this->nacimiento);
        $to   = new \DateTime('today');
        
        return $from->diff($to)->y;
    
    }
}
