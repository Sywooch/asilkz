<?php

namespace app\modules\cms\models\form;

use yii\base\Model;
use \Yii;

class Feedback extends Model{

    public $name;
    public $phone;
    public $email;

    public function rules()
    {
        return [
          [ ['name','phone'], 'required' ],
            ['email','email']
        ];
    }

    public function attributeLabels()
    {
        return [
          'name'=>'Имя',
          'phone'=>'Номер телефона',
          'email'=>'Email',
        ];
    }

    public function send()
    {
        $subject = 'Постпил новый заказ звонка с сайта '.Yii::$app->name;
        $result = Yii::$app->mailer->compose('feedback',['model'=>$this,'subject'=>$subject])
            ->setFrom(Yii::$app->params['email']->from)
            ->setTo(Yii::$app->params['email']->to)
            ->setSubject($subject)
            ->send();
        return $result;
    }

}