<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reportes".
 *
 * @property int $id
 * @property string $periodo
 * @property string $reporte
 * @property int $users_id
 * @property int $pacientes_id
 *
 * @property Pacientes $pacientes
 * @property Users $users
 */
class Reportes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reportes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['periodo', 'reporte', 'users_id', 'pacientes_id'], 'required'],
            [['reporte'], 'string'],
            [['pacientes_id'], 'integer'],
            [['periodo'], 'string', 'max' => 50],
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
            'periodo' => 'Periodo',
            'reporte' => 'Reporte',
            'fecha' => 'Fecha',
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
