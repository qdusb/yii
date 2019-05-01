<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property int $updateTime 更新时间
 * @property string $name 产品名称
 * @property string $nameEn 英文名称
 * @property string $image
 * @property int $brandId
 * @property int $categoryId
 * @property string $path 产品分类路径
 * @property string $SKU
 * @property string $URL
 * @property string $weight
 * @property string $barCode 条形码
 * @property string $spec 单位
 * @property int $unit 规格单位
 * @property string $price
 * @property string $declarePrice 报关价格
 * @property string $declareCode
 * @property int $crossTaxId 跨境税ID
 * @property int $parcelTaxId 行邮税ID
 * @property int $status 状态
 * @property int $createTime
 * @property int $isDeclare 是否是申报产品，1:是
 * @property int $userId 如果是申报产品则记录申报用户
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updateTime', 'name', 'nameEn', 'image', 'brandId', 'categoryId', 'path', 'SKU', 'URL', 'weight', 'barCode', 'spec', 'unit', 'price', 'declarePrice', 'declareCode', 'crossTaxId', 'parcelTaxId', 'status', 'createTime'], 'required'],
            [['updateTime', 'brandId', 'categoryId', 'unit', 'crossTaxId', 'parcelTaxId', 'status', 'createTime', 'isDeclare', 'userId'], 'integer'],
            [['weight', 'price', 'declarePrice'], 'number'],
            [['name', 'nameEn'], 'string', 'max' => 255],
            [['image', 'path', 'barCode'], 'string', 'max' => 100],
            [['SKU', 'declareCode'], 'string', 'max' => 30],
            [['URL'], 'string', 'max' => 120],
            [['spec'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'updateTime' => '更新时间',
            'name' => '产品名称',
            'nameEn' => '英文名称',
            'image' => 'Image',
            'brandId' => 'Brand ID',
            'categoryId' => 'Category ID',
            'path' => '产品分类路径',
            'SKU' => 'Sku',
            'URL' => 'Url',
            'weight' => 'Weight',
            'barCode' => '条形码',
            'spec' => '单位',
            'unit' => '规格单位',
            'price' => 'Price',
            'declarePrice' => '报关价格',
            'declareCode' => 'Declare Code',
            'crossTaxId' => '跨境税ID',
            'parcelTaxId' => '行邮税ID',
            'status' => '状态',
            'createTime' => 'Create Time',
            'isDeclare' => '是否是申报产品，1:是',
            'userId' => '如果是申报产品则记录申报用户',
        ];
    }
}
