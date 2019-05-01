<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%agent_express_fee}}".
 *
 * @property int $id
 * @property int $orderId
 * @property string $fee1 运费单价
 * @property string $fee2 其他运费
 * @property int $feeType 0 按件计费 1 按重量计费
 * @property int $agentId
 */
class AgentExpressFee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%agent_express_fee}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'fee1', 'fee2', 'feeType', 'agentId'], 'required'],
            [['orderId', 'feeType', 'agentId'], 'integer'],
            [['fee1', 'fee2'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderId' => 'Order ID',
            'fee1' => '运费单价',
            'fee2' => '其他运费',
            'feeType' => '0 按件计费 1 按重量计费',
            'agentId' => 'Agent ID',
        ];
    }
}
