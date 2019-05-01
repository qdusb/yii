<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%idcard}}".
 *
 * @property int $status
 * @property int $id
 * @property string $name
 * @property string $IDNumber
 * @property string $phone
 * @property string $address
 * @property string $photo
 * @property string $photo1
 * @property string $photo2
 * @property int $updateTime
 * @property int $expiredTime 有效期
 * @property int $userId 上传用户
 */
class IDCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%idcard}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'name', 'IDNumber', 'phone', 'address', 'photo', 'photo1', 'photo2', 'updateTime'], 'required'],
            [['status', 'updateTime', 'expiredTime', 'userId'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['IDNumber', 'phone'], 'string', 'max' => 20],
            [['address', 'photo', 'photo1', 'photo2'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status' => 'Status',
            'id' => 'ID',
            'name' => 'Name',
            'IDNumber' => 'Id Number',
            'phone' => 'Phone',
            'address' => 'Address',
            'photo' => 'Photo',
            'photo1' => 'Photo1',
            'photo2' => 'Photo2',
            'updateTime' => 'Update Time',
            'expiredTime' => '有效期',
            'userId' => '上传用户',
        ];
    }
}
