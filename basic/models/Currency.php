<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * @property int $id
 * @property string $name 币种
 * @property double $rate 汇率
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rate'], 'required'],
            [['rate'], 'number'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '币种',
            'rate' => '汇率',
        ];
    }
}
