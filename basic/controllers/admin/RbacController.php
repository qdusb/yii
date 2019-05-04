<?php

namespace app\controllers\admin;


use app\models\LoginRecord;
use Yii;
use yii\helpers\Url;
use yii\web\UnauthorizedHttpException;

class RbacController extends BaseAdminController
{
    /**
     * {@inheritdoc}
     */

    public function beforeAction($action)
    {

        return true;
        /*$items['role']='管理员';
        //$items['permission']='访问后台';
        $items['user_id']=Yii::$app->user->identity->getId();

        $this->addUserRole($items);*/

        $action=Yii::$app->controller->id.'/'.Yii::$app->controller->action->id;
        //$this->createPermission($action);
       /* $items['role']='管理员';
        $items['permission']=$action;
        $this->addChildToRole($items);
        return true;
        $action = Yii::$app->controller->action->id;*/

        if(Yii::$app->user->can($action)){
            return true;
        }else{
            $this->redirect(Url::toRoute(['admin/login']));
            return false;
            //throw new UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }

    }

    public function actionIndex()
    {


        //$this->createPermission('访问后台');
        //$this->createRole('管理员');
        /*$items['role']='管理员';
        //$items['permission']='访问后台';
        $items['user_id']=Yii::$app->user->identity->getId();

        $this->addUserRole($items);*/
        return $this->render('index');
    }

    public function actionRedis(){
        $redis=Yii::$app->redis;
        $redis->set('user', '123456');

        $redis->expire('user', 50);
    }

    public function actionCache(){
        $cache=Yii::$app->cache;
       // $cache->set('user','1423456');
        echo $cache->get('user');
    }
    public function actionSession(){
        $session=Yii::$app->session;
        //$session->set('user','123456');
        echo $session->get('user');
    }

    public function actionRecord(){

        $record=new LoginRecord();
        $record->uid=3;
        $record->created_at=time();
        $record->name='york';
        $record->session=Yii::$app->session->getId();
        //$record->save();
        $r= LoginRecord::findOne(1);
        echo $r->session;

    }

    //创建权限
    public function createPermission($name)
    {
        $auth = Yii::$app->authManager;
        $createPost = $auth->createPermission($name);
        $createPost->description = '创建了 ' . $name. ' 权限';
        $auth->add($createPost);
    }

    //创建角色
    public function createRole($name)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($name);
        $role->description = '创建了 ' . $name. ' 角色';
        $auth->add($role);
    }


    //用户添加角色
    public function addUserRole($items)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($items['role']);                //创建角色对象
        $user_id = $items['user_id'];                                             //获取用户id，此处假设用户id=1
        $auth->assign($role, $user_id);                           //添加对应关系
    }

        //给角色添加权限
    public function addChildToRole($items)
    {
        $auth = Yii::$app->authManager;
        $parent = $auth->createRole($items['role']);                //创建角色对象
        $child = $auth->createPermission($items['permission']);     //创建权限对象
        $auth->addChild($parent, $child);                           //添加对应关系
    }


}
