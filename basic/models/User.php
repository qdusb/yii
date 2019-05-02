<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $displayName
 * @property string $email
 * @property string $phoneCode 手机国家编号
 * @property string $pic 头像
 * @property int $isAdmin
 * @property int $isApproved
 * @property int $lastPasswordChangedDate
 * @property string $lastLoginIP
 * @property int $lastLoginDate
 * @property int $loginCount
 * @property int $createdDate
 * @property int $lastModifiedDate
 * @property int $role
 * @property int $roleExtendType
 * @property int $groupid
 * @property string $action
 * @property string $info
 * @property string $infoClass
 * @property string $relation
 * @property string $defaultUrl
 * @property string $address
 * @property string $phone
 * @property int $agentId
 * @property int $company
 * @property string $verNo
 * @property string $udid
 * @property string $token
 * @property string $wechat 微信账号
 * @property string $wechat_connect_id
 * @property int $vip 用户类型
 * @property string $invitationCode 邀请码
 * @property string $balance 金额
 * @property int $grade 会员等级
 * @property string $currency 货币
 * @property string $location 发货地
 * @property string $country 所属国家id
 * @property string $province
 * @property string $city
 * @property string $county
 * @property string $companyName
 * @property string $IDNumber
 * @property string $zipcode
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * 根据给到的ID查询身份。
     *
     * @param string|integer $id 被查询的ID
     * @return IdentityInterface|null 通过ID匹配到的身份对象
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * 根据 token 查询身份。
     *
     * @param string $token 被查询的 token
     * @return IdentityInterface|null 通过 token 得到的身份对象
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string 当前用户ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string 当前用户的（cookie）认证密钥
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password', 'displayName', 'phoneCode', 'pic', 'createdDate', 'role', 'defaultUrl', 'address', 'phone', 'invitationCode', 'balance', 'grade', 'currency', 'location', 'province', 'city', 'county', 'companyName', 'IDNumber', 'zipcode'], 'required'],
            [['isAdmin', 'isApproved', 'lastPasswordChangedDate', 'lastLoginDate', 'loginCount', 'createdDate', 'lastModifiedDate', 'role', 'roleExtendType', 'groupid', 'agentId', 'company', 'vip', 'grade'], 'integer'],
            [['action', 'info', 'infoClass', 'relation'], 'string'],
            [['balance'], 'number'],
            [['name', 'password', 'displayName', 'email'], 'string', 'max' => 50],
            [['phoneCode'], 'string', 'max' => 6],
            [['pic'], 'string', 'max' => 100],
            [['lastLoginIP'], 'string', 'max' => 15],
            [['defaultUrl', 'address'], 'string', 'max' => 200],
            [['phone', 'country', 'province', 'city', 'county', 'companyName'], 'string', 'max' => 20],
            [['verNo'], 'string', 'max' => 32],
            [['udid', 'token', 'wechat', 'wechat_connect_id'], 'string', 'max' => 64],
            [['invitationCode'], 'string', 'max' => 12],
            [['currency', 'zipcode'], 'string', 'max' => 10],
            [['location'], 'string', 'max' => 30],
            [['IDNumber'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'displayName' => 'Display Name',
            'email' => 'Email',
            'phoneCode' => '手机国家编号',
            'pic' => '头像',
            'isAdmin' => 'Is Admin',
            'isApproved' => 'Is Approved',
            'lastPasswordChangedDate' => 'Last Password Changed Date',
            'lastLoginIP' => 'Last Login Ip',
            'lastLoginDate' => 'Last Login Date',
            'loginCount' => 'Login Count',
            'createdDate' => 'Created Date',
            'lastModifiedDate' => 'Last Modified Date',
            'role' => 'Role',
            'roleExtendType' => 'Role Extend Type',
            'groupid' => 'Groupid',
            'action' => 'Action',
            'info' => 'Info',
            'infoClass' => 'Info Class',
            'relation' => 'Relation',
            'defaultUrl' => 'Default Url',
            'address' => 'Address',
            'phone' => 'Phone',
            'agentId' => 'Agent ID',
            'company' => 'Company',
            'verNo' => 'Ver No',
            'udid' => 'Udid',
            'token' => 'Token',
            'wechat' => '微信账号',
            'wechat_connect_id' => 'Wechat Connect ID',
            'vip' => '用户类型',
            'invitationCode' => '邀请码',
            'balance' => '金额',
            'grade' => '会员等级',
            'currency' => '货币',
            'location' => '发货地',
            'country' => '所属国家id',
            'province' => 'Province',
            'city' => 'City',
            'county' => 'County',
            'companyName' => 'Company Name',
            'IDNumber' => 'Id Number',
            'zipcode' => 'Zipcode',
        ];
    }

}
