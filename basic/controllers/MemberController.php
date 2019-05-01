<?php

namespace app\controllers;

class MemberController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin($msg='Login',$role='admin')
    {
        return $this->render('login',array('msg'=>$msg,'role'=>$role));
    }

}
