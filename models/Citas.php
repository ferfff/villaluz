<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citas".
 *
 * @property int $id
 * @property string $fecha
 * @property string $lugar
 * @property string $especialista
 * @property string|null $observaciones
 * @property int $users_id
 * @property int $pacientes_id
 *
 * @property Pacientes $pacientes
 * @property Users $users
 */
class Citas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'lugar', 'especialista', 'users_id', 'pacientes_id'], 'required'],
            [['fecha'], 'safe'],
            [['observaciones'], 'string'],
            [['users_id', 'pacientes_id'], 'integer'],
            [['lugar', 'especialista'], 'string', 'max' => 50],
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
            'lugar' => 'Lugar',
            'especialista' => 'Especialista',
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
