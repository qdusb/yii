<?php
namespace app\models;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/4 0004
 * Time: 8:35
 */

class LoginRecord extends \yii\redis\ActiveRecord
{
    /**
     * 主键 默认为 id
     *
     * @return array|string[]
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * 模型对应记录的属性列表
     *
     * @return array
     */
    public function attributes()
    {
        return ['id', 'uid','name',  'session', 'created_at'];
    }

}