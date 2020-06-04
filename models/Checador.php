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
            [['entrada', 'salida', 'users_id', 'pacientes_id'], 'required'],
            [['entrada', 'salida'], 'safe'],
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
