<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord implements IdentityInterface
{   
    public $authKey;
    public $accessToken;

    public static function findIdentity($id)
    {  
        return static::findOne($id);
        
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
     public static function findByUsername($username)
    {   
        $user = static::findOne(['login'=> $username]);
        return $user;
        
    }
    
    public static function tableName()
    {
        return 'user';
    }

    
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login', 'password'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 125],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->login;
    }
    
    public function getAuthKey()
    {
        return $this->authKey;
    }

    
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
    public function setPassword($value)
    {
      $this->password = md5($value);
    }
}
