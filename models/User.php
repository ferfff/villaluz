<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    const ROLE_USER = 1;
    const ROLE_EMPLEADO = 2;
    const ROLE_ADMIN = 3;

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
            [['username','nombre','paterno','materno','nacimiento','email','calle','numero','colonia','ciudad','password'], 'required'],
            [['username','nombre','paterno','materno'], 'string', 'max' => 50],
            [['calle','numero','colonia','ciudad','telefono','movil'], 'string', 'max' => 20],
            [['cp'], 'string', 'max' => 10],
            [['interior'], 'string', 'max' => 5],
            [['username','nombre','paterno','materno','telefono','movil','cp','calle','colonia','ciudad'], 'string', 'min' => 4],
            ['nivel', 'required', 'message' => 'Seleccione un nivel'],
            ['genero', 'required', 'message' => 'Seleccione un género'],
            ['nacimiento', 'date', 'format' => 'php:Y-m-d'],
            ['email', 'email'],
            ['nivel', 'default', 'value' => 1],
            ['activo', 'in', 'range'=>['0','1']],
            ['genero', 'in', 'range'=>['Masculino','Femenino']],
            ['nivel', 'in', 'range' => [self::ROLE_USER, self::ROLE_EMPLEADO, self::ROLE_ADMIN]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'ID'),
            'paterno' => Yii::t('app', 'Apellido Paterno'),
            'materno' => Yii::t('app', 'Apellido Materno'),
            'cp' => Yii::t('app', 'Código Postal'),
            'password' => Yii::t('app', 'Contraseña'),
            'authKey' => Yii::t('app', 'Auth key'),
            'email' => Yii::t('app', 'E-mail'),
            'numero' => Yii::t('app', 'Número'),
            'telefono' => Yii::t('app', 'Teléfono'),
            'movil' => Yii::t('app', 'Móvil'),
            'nacimiento' => Yii::t('app', 'Fecha de Nacimiento'),
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
        //return $this->password === $password;
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
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

    public static function isUserAdmin($username)
    {
        if (static::findOne(['username' => $username, 'nivel' => self::ROLE_ADMIN])){            
            return true;
        } else {                   
            return false;
        }    
    }

    public static function isUserEmpleado($username)
    {
        if (static::findOne(['username' => $username, 'nivel' => self::ROLE_EMPLEADO])){            
            return true;
        } else {                   
            return false;
        }    
    }
}
