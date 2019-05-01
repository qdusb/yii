<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%country}}".
 *
 * @property int $id
 * @property string $code 国家简码
 * @property string $name 中文名称
 * @property string $nameEn 英文名称
 * @property string $currency 货币
 * @property int $phone 电话区号
 * @property string $CODCurrency
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%country}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'nameEn', 'currency', 'phone', 'CODCurrency'], 'required'],
            [['phone'], 'integer'],
            [['code', 'name', 'currency', 'CODCurrency'], 'string', 'max' => 20],
            [['nameEn'], 'string', 'max' => 10],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '国家简码',
            'name' => '中文名称',
            'nameEn' => '英文名称',
            'currency' => '货币',
            'phone' => '电话区号',
            'CODCurrency' => 'Cod Currency',
        ];
    }
}
