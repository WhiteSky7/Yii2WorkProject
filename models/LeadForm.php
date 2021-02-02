<?php

namespace app\models;

use yii\db\ActiveRecord;

class LeadForm extends ActiveRecord
{
    public $username;
    public $phoneNumber;
    public $email;

    public function rules()
    {
        return [
            
                // атрибут required указывает, что name, email, subject, body обязательны для заполнения
                [['username', 'phoneNumber', 'email',], 'required'],
                
                // атрибут email указывает, что в переменной email должен быть корректный адрес электронной почты
                ['email', 'email'],
                'phoneNumber' => [['phoneNumber'], 'string', 'max' => 10],
               
                ['username', 'required', 'message' => 'Please choose a username.'],
            
        ];
    }
}