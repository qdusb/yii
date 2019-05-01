<?php

namespace app\controllers\admin;

use app\models\User;
use Yii;
use yii\helpers\Url;

class LoginController extends \yii\web\Controller
{
    public $layout='@app/views/layouts/login.php';
    public $enableCsrfValidation=false;

    public function beforeAction($action)
    {
        $user=Yii::$app->session->get('admin');
        if($user){
            $this->redirect(Url::toRoute(['admin/order/index']));
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionLogin()
    {
        $request=Yii::$app->getRequest();
        $name=$request->post('name');
        $pass=$request->post('pass');

        $query=User::find()->where(array('name'=>$name,'password'=>md5('abc'.$pass.'def')));
        $user=$query->one();

        if($user){
            Yii::$app->session->set('admin',$name);
            $this->redirect(Url::toRoute(['admin/order/index']));
        }else{
            $this->redirect(Url::toRoute(['admin/login']));
        }

    }

}
