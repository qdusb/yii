<?php

namespace app\controllers\admin;

use yii\base\InvalidParamException;
use yii\filters\VerbFilter;
use Yii;
use yii\rbac\Item;
use yii\rbac\Rule;

class RbacController extends BaseAdminController
{
    /**
     * {@inheritdoc}
     */

    public function actionIndex()
    {
        //$this->createPermission('访问后台');
        //$this->createRole('管理员');
        $items['role']='管理员';
        $items['permission']='访问后台';


        return $this->render('index');
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

    //给角色添加权限
    public function addChildToRole($items)
    {
        $auth = Yii::$app->authManager;
        $parent = $auth->createRole($items['role']);                //创建角色对象
        $child = $auth->createPermission($items['permission']);     //创建权限对象
        $auth->addChild($parent, $child);                           //添加对应关系
    }

    public function add($object)
    {
        if ($object instanceof Item) {
            return $this->addItem($object);
        } elseif ($object instanceof Rule) {
            return $this->addRule($object);
        } else {
            throw new InvalidParamException("Adding unsupported object type.");
        }
    }

}
