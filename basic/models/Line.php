<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%line}}".
 *
 * @property int $id
 * @property string $No 线路编号
 * @property string $brevityCode 线路简码
 * @property string $name
 * @property string $intro
 * @property double $weight 最大重量
 * @property int $status
 * @property string $prescription 时效
 * @property int $nameLimit 姓名限制
 * @property int $phoneLimit 电话限制
 * @property int $addressLimit 地址限制
 * @property int $IDNumberLimit 身份证限制
 * @property string $frCountry 起始国家
 * @property string $toCountry 目的地国家
 * @property string $cats 产品种类
 * @property int $company 所属分公司
 */
class Line extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%line}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No', 'brevityCode', 'name', 'prescription', 'nameLimit', 'phoneLimit', 'addressLimit', 'IDNumberLimit', 'frCountry', 'toCountry', 'cats', 'company'], 'required'],
            [['weight'], 'number'],
            [['status', 'nameLimit', 'phoneLimit', 'addressLimit', 'IDNumberLimit', 'company'], 'integer'],
            [['No'], 'string', 'max' => 20],
            [['brevityCode', 'frCountry', 'toCountry'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 100],
            [['intro'], 'string', 'max' => 200],
            [['prescription'], 'string', 'max' => 40],
            [['cats'], 'string', 'max' => 1000],
            [['brevityCode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'No' => '线路编号',
            'brevityCode' => '线路简码',
            'name' => 'Name',
            'intro' => 'Intro',
            'weight' => '最大重量',
            'status' => 'Status',
            'prescription' => '时效',
            'nameLimit' => '姓名限制',
            'phoneLimit' => '电话限制',
            'addressLimit' => '地址限制',
            'IDNumberLimit' => '身份证限制',
            'frCountry' => '起始国家',
            'toCountry' => '目的地国家',
            'cats' => '产品种类',
            'company' => '所属分公司',
        ];
    }
}
