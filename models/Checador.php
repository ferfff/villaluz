<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "checador".
 *
 * @property int $id
 * @property string $entrada
 * @property string $salida
 * @property int $users_id
 * @property int $pacientes_id
 *
 * @property Pacientes $pacientes
 * @property Users $users
 */
class Checador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entrada', 'users_id', 'pacientes_id'], 'required'],
            [['users_id', 'pacientes_id'], 'integer'],
            [['pacientes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::className(), 'targetAttribute' => ['pacientes_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entrada' => 'Entrada',
            'salida' => 'Salida',
            'users_id' => 'Users ID',
            'pacientes_id' => 'Pacientes ID',
        ];
    }

    /**
     * Gets query for [[Pacientes]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getPacientes()
    {
        return $this->hasOne(Pacientes::className(), ['id' => 'pacientes_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }

    /**
     * {@inheritdoc}
     * @return ChecadorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChecadorQuery(get_called_class());
    }

    public function getTiempo() 
    {
        $entrada = new \DateTime($this->entrada);
        $salida = new \DateTime($this->salida);
        $difSegundos = $salida->getTimestamp() - $entrada->getTimestamp();

        $horas = floor($difSegundos / 3600);
        $minutos = floor(($difSegundos - ($horas * 3600)) / 60);
        $segundos = $difSegundos - ($horas * 3600) - ($minutos * 60);
        
        return $horas . ':' . sprintf('%02s', $minutos) . ":" . sprintf('%02s', $segundos);
    }

    public function getCosto()
    {
        $entrada = new \DateTime($this->entrada);
        $salida = new \DateTime($this->salida);
        $difSegundos = $salida->getTimestamp() - $entrada->getTimestamp();
        
        $minutos = $difSegundos/60;
        $minutosLaborados = $this->pacientes->costo/60;

        return round($minutos * $minutosLaborados, 2);
    }

    public function getPago() 
    {
        $entrada = new \DateTime($this->entrada);
        $salida = new \DateTime($this->salida);
        $difSegundos = $salida->getTimestamp() - $entrada->getTimestamp();
        
        $minutos = $difSegundos/60;
        $minutosLaborados = $this->pacientes->pago/60;

        return round($minutos * $minutosLaborados, 2);
    }
}
