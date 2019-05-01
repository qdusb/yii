<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%agent}}".
 *
 * @property int $id
 * @property string $No
 * @property string $name
 * @property string $contacts 联系人
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property int $createTime
 * @property string $intro
 * @property int $userId
 * @property int $company
 * @property int $status 0 禁用 1 启用
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%agent}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No', 'name', 'contacts', 'phone', 'address', 'city', 'createTime', 'intro', 'userId', 'company', 'status'], 'required'],
            [['createTime', 'userId', 'company', 'status'], 'integer'],
            [['No', 'phone'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 100],
            [['contacts', 'city'], 'string', 'max' => 30],
            [['address', 'intro'], 'string', 'max' => 200],
            [['No'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'No' => 'No',
            'name' => 'Name',
            'contacts' => '联系人',
            'phone' => 'Phone',
            'address' => 'Address',
            'city' => 'City',
            'createTime' => 'Create Time',
            'intro' => 'Intro',
            'userId' => 'User ID',
            'company' => 'Company',
            'status' => '0 禁用 1 启用',
        ];
    }
}
