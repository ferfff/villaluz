<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_pacientes".
 *
 * @property int $id
 * @property int $users_id
 * @property int $pacientes_id
 *
 * @property Checador[] $checadors
 * @property Citas[] $citas
 * @property Medicamentos[] $medicamentos
 * @property Registros[] $registros
 * @property Reportes[] $reportes
 * @property Pacientes $pacientes
 * @property User $users
 */
class UsersPacientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_pacientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'pacientes_id'], 'required'],
            [['pacientes_id'], 'integer'],
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
            'users_id' => 'Users ID',
            'pacientes_id' => 'Pacientes ID',
        ];
    }

    /**
     * Gets query for [[Checadors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecadors()
    {
        return $this->hasMany(Checador::className(), ['users_pacientes_id' => 'id']);
    }

    /**
     * Gets query for [[Citas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Citas::className(), ['users_pacientes_id' => 'id']);
    }

    /**
     * Gets query for [[Medicamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicamentos()
    {
        return $this->hasMany(Medicamentos::className(), ['users_pacientes_id' => 'id']);
    }

    /**
     * Gets query for [[Registros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistros()
    {
        return $this->hasMany(Registros::className(), ['users_pacientes_id' => 'id']);
    }

    /**
     * Gets query for [[Reportes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportes()
    {
        return $this->hasMany(Reportes::className(), ['users_pacientes_id' => 'id']);
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
}
