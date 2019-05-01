<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%batch_record}}".
 *
 * @property int $id
 * @property string $orderNo
 * @property int $oBid 原批次
 * @property int $nBid 新批次
 * @property string $act
 * @property int $operater
 * @property int $createTime
 */
class BatchRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%batch_record}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderNo', 'oBid', 'nBid', 'act', 'operater', 'createTime'], 'required'],
            [['oBid', 'nBid', 'operater', 'createTime'], 'integer'],
            [['orderNo'], 'string', 'max' => 16],
            [['act'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderNo' => 'Order No',
            'oBid' => '原批次',
            'nBid' => '新批次',
            'act' => 'Act',
            'operater' => 'Operater',
            'createTime' => 'Create Time',
        ];
    }
}
