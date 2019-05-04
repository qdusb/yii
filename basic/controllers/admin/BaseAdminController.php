<?php

namespace app\controllers\admin;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

/**
 *  implements the CRUD actions for Agent model.
 */
class BaseAdminController extends Controller
{

    public $layout='@app/views/layouts/admin.php';
    public function init()
    {

    }

    public function beforeAction($action)
    {
        if(!Yii::$app->user->identity){
            $this->redirect(Url::toRoute(['admin/login/index']));
        }
        return parent::beforeAction($action);
    }

}
