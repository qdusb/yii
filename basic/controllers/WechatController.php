<?php

namespace app\controllers;

use app\models\WechatUser;
use Yii;
use yii\rest\ActiveController;

class WechatController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionValid()
    {
        $echoStr = $_GET["echostr"];
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        //valid signature , option
        if($this->checkSignature($signature,$timestamp,$nonce)){
            echo $echoStr;
        }
    }

    private function checkSignature($signature,$timestamp,$nonce)
    {
        // you must define TOKEN by yourself
        $token = Yii::$app->params['wechat']['token'];
        if (!$token) {
            echo 'TOKEN is not defined!';
        } else {
            $tmpArr = array($token, $timestamp, $nonce);
            // use SORT_STRING rule
            sort($tmpArr, SORT_STRING);
            $tmpStr = implode( $tmpArr );
            $tmpStr = sha1( $tmpStr );
            if( $tmpStr == $signature ){
                return true;
            }else{
                return false;
            }
        }
    }

    public function actionAccesstoken()
    {
        $code = $_GET["code"];
        $state = $_GET["state"];
        $appid = Yii::$app->params['wechat']['appid'];
        $appsecret = Yii::$app->params['wechat']['appsecret'];
        $request_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';

        //初始化一个curl会话
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = $this->response($result);

        //获取token和openid成功，数据解析
        $access_token = $result['access_token'];
        $refresh_token = $result['refresh_token'];
        $openid = $result['openid'];

        //请求微信接口，获取用户信息
        $userInfo = $this->getUserInfo($access_token,$openid);
        $user_check = WechatUser::find()->where(['openid'=>$openid])->one();
        if ($user_check) {
            //更新用户资料
        } else {
            //保存用户资料
        }

        //前端网页的重定向
        if ($openid) {
            return $this->redirect($state.$openid);
        } else {
            return $this->redirect($state);
        }
    }

    public function getUserInfo($access_token,$openid)
    {
        $request_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
        //初始化一个curl会话
        $ch = curl_init(null);
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = $this->response($result);
        return $result;
    }

    public function actionUserinfo()
    {
        if(isset($_REQUEST["openid"])){
            $openid = $_REQUEST["openid"];
            $user = WechatUser::find()->where(['openid'=>$openid])->one();
            if ($user) {
                $result['error'] = 0;
                $result['msg'] = '获取成功';
                $result['user'] = $user;
            } else {
                $result['error'] = 1;
                $result['msg'] = '没有该用户';
            }
        } else {
            $result['error'] = 1;
            $result['msg'] = 'openid为空';
        }
        return $result;
    }

    private function response($text)
    {
        return json_decode($text, true);
    }


}
