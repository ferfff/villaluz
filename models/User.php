<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public $old_password;
	public $new_password;
    public $repeat_password;
    
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['nombre','paterno','materno','username'], 'string', 'max' => 50],
            [['telefono','movil','calle','numero','interior','colonia','ciudad'], 'string', 'max' => 50],
            ['genero', 'string', 'max' => 50],
            ['edad', 'string', 'max' => 50],
            ['nacimiento', 'string', 'max' => 50],
            ['email', 'email'],
            [['cp'], 'string', 'max' => 10],
            [['nivel'], 'integer'],
            [['activo'], 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nombre'),
            'paterno' => Yii::t('app', 'Apellido Paterno'),
            'materno' => Yii::t('app', 'Apellido Materno'),
            'cp' => Yii::t('app', 'Código Postal'),
            'username' => Yii::t('app', 'Usuario'),
            'password' => Yii::t('app', 'Contraseña'),
            'authKey' => Yii::t('app', 'Auth key'),
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        //return static::findOne(['access_token' => $token]);
        throw new NotSupportedException();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
        //return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function getEdad() 
    {
        $from = new \DateTime($this->nacimiento);
        $to   = new \DateTime('today');
        
        return $from->diff($to)->y;
    
    }
}
