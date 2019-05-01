<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%express}}".
 *
 * @property int $id
 * @property string $code 快递公司编码
 * @property string $name 快递公司名称
 */
class Express extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%express}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 20],
            [['code', 'name'], 'unique', 'targetAttribute' => ['code', 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '快递公司编码',
            'name' => '快递公司名称',
        ];
    }
}
