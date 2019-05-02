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
        if(Yii::$app->user->identity->getId()) {
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

        $identity = User::findOne(['name' => $name,'password'=>md5('abc'.$pass.'def')]);
        Yii::$app->user->login($identity);

        if(Yii::$app->user->identity){
            $this->redirect(Url::toRoute(['admin/order/index']));
        }else{
            $this->redirect(Url::toRoute(['admin/login']));
        }

    }

}
