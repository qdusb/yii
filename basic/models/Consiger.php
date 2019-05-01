<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%consiger}}".
 *
 * @property int $id
 * @property int $userId
 * @property string $name
 * @property int $IDType 证件类型
 * @property string $IDNumber
 * @property string $country 国家
 * @property string $province 州
 * @property string $city
 * @property string $county 区
 * @property string $address
 * @property string $street
 * @property string $doorNo
 * @property string $company
 * @property string $phone
 * @property string $zipCode
 * @property int $updateTime
 * @property int $isDefault
 */
class Consiger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%consiger}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'name', 'IDNumber', 'country', 'province', 'city', 'county', 'address', 'street', 'doorNo', 'company', 'phone', 'zipCode', 'updateTime'], 'required'],
            [['userId', 'IDType', 'updateTime', 'isDefault'], 'integer'],
            [['name', 'province', 'city'], 'string', 'max' => 50],
            [['IDNumber', 'country', 'doorNo', 'phone'], 'string', 'max' => 20],
            [['county'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 200],
            [['street', 'company'], 'string', 'max' => 40],
            [['zipCode'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'name' => 'Name',
            'IDType' => '证件类型',
            'IDNumber' => 'Id Number',
            'country' => '国家',
            'province' => '州',
            'city' => 'City',
            'county' => '区',
            'address' => 'Address',
            'street' => 'Street',
            'doorNo' => 'Door No',
            'company' => 'Company',
            'phone' => 'Phone',
            'zipCode' => 'Zip Code',
            'updateTime' => 'Update Time',
            'isDefault' => 'Is Default',
        ];
    }
}
