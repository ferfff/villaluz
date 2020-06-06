<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registros".
 *
 * @property int $id
 * @property string $fecha
 * @property string|null $glucosa
 * @property string|null $ta
 * @property string|null $fc
 * @property string|null $fr
 * @property string|null $temperatura
 * @property string|null $spo2
 * @property string|null $micciones
 * @property string|null $evacuaciones
 * @property string|null $observaciones
 * @property int $users_id
 * @property int $pacientes_id
 *
 * @property Pacientes $pacientes
 * @property Users $users
 */
class Registros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'users_id', 'pacientes_id'], 'required'],
            [['fecha'], 'safe'],
            [['observaciones'], 'string'],
            [['users_id', 'pacientes_id'], 'integer'],
            [['glucosa', 'ta', 'fc', 'fr', 'temperatura', 'spo2', 'micciones', 'evacuaciones'], 'string', 'max' => 45],
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
            'fecha' => 'Fecha',
            'glucosa' => 'Glucosa',
            'ta' => 'T/A',
            'fc' => 'F.C.(x\')',
            'fr' => 'F.R.(x\')',
            'temperatura' => 'Tº(ºC)',
            'spo2' => 'SPO2(%)',
            'micciones' => 'Micciones',
            'evacuaciones' => 'Evacuaciones',
            'observaciones' => 'Observaciones',
            'users_id' => 'Users ID',
            'pacientes_id' => 'Pacientes ID',
        ];
    }

    /**
     * Gets query for [[Pacientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPacientes()
    {
        return $this->hasOne(Pacientes::className(), ['id' => 'pacientes_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
}
