<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%order_product}}".
 *
 * @property int $id
 * @property int $orderId 采购单ID
 * @property int $productId 产品ID
 * @property string $name 产品名称
 * @property string $nameEn 产品英文名称
 * @property int $qty 产品数量
 * @property string $weight 单品重量
 * @property string $price 价格
 * @property string $declarePrice 申报价值
 * @property int $createTime 创建时间
 * @property int $updateTime 更新时间
 * @property string $SKU 商品SKU
 * @property string $URL 商品链接
 * @property string $declareCode 申报代码
 */
class OrderProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%order_product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'productId', 'name', 'nameEn', 'qty', 'price', 'declarePrice', 'createTime', 'updateTime', 'SKU', 'URL', 'declareCode'], 'required'],
            [['orderId', 'productId', 'qty', 'createTime', 'updateTime'], 'integer'],
            [['weight', 'price', 'declarePrice'], 'number'],
            [['name', 'nameEn', 'declareCode'], 'string', 'max' => 60],
            [['SKU'], 'string', 'max' => 30],
            [['URL'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderId' => '采购单ID',
            'productId' => '产品ID',
            'name' => '产品名称',
            'nameEn' => '产品英文名称',
            'qty' => '产品数量',
            'weight' => '单品重量',
            'price' => '价格',
            'declarePrice' => '申报价值',
            'createTime' => '创建时间',
            'updateTime' => '更新时间',
            'SKU' => '商品SKU',
            'URL' => '商品链接',
            'declareCode' => '申报代码',
        ];
    }
}
