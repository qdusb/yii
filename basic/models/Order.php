<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property int $id
 * @property string $orderNo 面单号
 * @property string $waybillCode 快递公司运单号(
 * @property string $associatedNo 关联单号
 * @property int $agentId 代理点id
 * @property string $frName 发件人
 * @property string $frPhone 发件人电话
 * @property string $frCompany 发件人公司
 * @property string $frProvince 发件人省
 * @property string $frCity 发件人市
 * @property string $frCounty 发件人县，区
 * @property string $frAddress 发件人地址
 * @property string $frCountry 发件人国家
 * @property string $frZipCode 发件人邮编
 * @property string $toAddress 收件人详细地址
 * @property string $toName 收件人
 * @property string $toPhone 收件人电话
 * @property string $toCompany 收件人公司
 * @property string $toDoorNo 收件人门牌号
 * @property string $toStreet 收件人街道
 * @property string $toCounty 区 县
 * @property string $toCity 收件人城市
 * @property string $toProvince 收件人省
 * @property string $toCountry 收件人国家
 * @property string $toZipCode 收件人邮政编码
 * @property string $toTax 税号
 * @property string $toBranch 分行
 * @property string $IDNumber 收件人身份证
 * @property double $weight 包裹重量单位KG
 * @property double $checkWeight 核重
 * @property double $volume 体积
 * @property double $length 长单位cm
 * @property double $width 宽单位cm
 * @property double $height 高单位cm
 * @property double $tax 税费
 * @property double $insurance 保险费
 * @property int $print 是否打印
 * @property int $batchId 批次号
 * @property int $createTime
 * @property int $updateTime
 * @property int $status 0无,-1问题件
 * @property int $pickIn 是否取件
 * @property int $instore 是否进入仓库
 * @property int $outstore 是否出库
 * @property int $userId 提交面单的用户ID
 * @property int $editTime
 * @property string $editors 编辑者
 * @property int $lineId
 * @property int $pickInTime
 * @property int $instoreTime
 * @property int $outTime
 * @property int $pickerId
 * @property int $warehouserId 仓库账号
 * @property string $remarks
 * @property int $accept 司机是否从系统接单
 * @property int $acceptTime 司机从系统接单时间
 * @property int $recept 司机是否收到
 * @property int $receptTime 快递公司司机上门收单时间
 * @property int $pay 支付状态 1 正在支付 2 支付完成
 * @property int $payTime 支付时间
 * @property string $origin 订单来源
 * @property string $packageId 京东包裹号
 * @property int $createType 1 在线下单 2司机下单 3 仓库称重 4批量下单 5api创建
 * @property int $hold 订单是否截停
 * @property int $holdTime 截停时间
 * @property int $cancel 是否取消
 * @property int $cancelTime 取消时间
 * @property int $auditTime 订单审核时间
 * @property int $merchantId 商户id
 * @property int $affirm 是否核实
 * @property int $sign 1 签收 0 未签收
 * @property int $editor 正在编辑
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderNo', 'waybillCode', 'associatedNo', 'agentId', 'frName', 'frPhone', 'frCompany', 'frProvince', 'frCity', 'frCounty', 'frAddress', 'frZipCode', 'toAddress', 'toName', 'toPhone', 'toCompany', 'toDoorNo', 'toStreet', 'toCounty', 'toCity', 'toProvince', 'toCountry', 'toZipCode', 'toTax', 'toBranch', 'IDNumber', 'weight', 'checkWeight', 'volume', 'tax', 'insurance', 'batchId', 'createTime', 'updateTime', 'userId', 'editTime', 'editors', 'warehouserId', 'acceptTime', 'receptTime', 'pay', 'payTime', 'origin', 'packageId', 'hold', 'holdTime', 'cancel', 'cancelTime', 'auditTime', 'merchantId', 'affirm', 'sign', 'editor'], 'required'],
            [['agentId', 'print', 'batchId', 'createTime', 'updateTime', 'status', 'pickIn', 'instore', 'outstore', 'userId', 'editTime', 'lineId', 'pickInTime', 'instoreTime', 'outTime', 'pickerId', 'warehouserId', 'accept', 'acceptTime', 'recept', 'receptTime', 'pay', 'payTime', 'createType', 'hold', 'holdTime', 'cancel', 'cancelTime', 'auditTime', 'merchantId', 'affirm', 'sign', 'editor'], 'integer'],
            [['weight', 'checkWeight', 'volume', 'length', 'width', 'height', 'tax', 'insurance'], 'number'],
            [['orderNo', 'waybillCode', 'associatedNo', 'frCounty', 'toProvince', 'toTax', 'remarks'], 'string', 'max' => 30],
            [['frName', 'frPhone', 'toName', 'toPhone', 'toDoorNo', 'toStreet', 'toCity'], 'string', 'max' => 50],
            [['frCompany', 'toAddress'], 'string', 'max' => 100],
            [['frProvince', 'frCountry', 'toZipCode', 'IDNumber', 'origin'], 'string', 'max' => 20],
            [['frCity', 'toCounty', 'packageId'], 'string', 'max' => 40],
            [['frAddress', 'toCompany', 'toCountry'], 'string', 'max' => 200],
            [['frZipCode'], 'string', 'max' => 10],
            [['toBranch', 'editors'], 'string', 'max' => 60],
            [['orderNo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderNo' => '面单号',
            'waybillCode' => '快递公司运单号(',
            'associatedNo' => '关联单号',
            'agentId' => '代理点id',
            'frName' => '发件人',
            'frPhone' => '发件人电话',
            'frCompany' => '发件人公司',
            'frProvince' => '发件人省',
            'frCity' => '发件人市',
            'frCounty' => '发件人县，区',
            'frAddress' => '发件人地址',
            'frCountry' => '发件人国家',
            'frZipCode' => '发件人邮编',
            'toAddress' => '收件人详细地址',
            'toName' => '收件人',
            'toPhone' => '收件人电话',
            'toCompany' => '收件人公司',
            'toDoorNo' => '收件人门牌号',
            'toStreet' => '收件人街道',
            'toCounty' => '区 县',
            'toCity' => '收件人城市',
            'toProvince' => '收件人省',
            'toCountry' => '收件人国家',
            'toZipCode' => '收件人邮政编码',
            'toTax' => '税号',
            'toBranch' => '分行',
            'IDNumber' => '收件人身份证',
            'weight' => '包裹重量单位KG',
            'checkWeight' => '核重',
            'volume' => '体积',
            'length' => '长单位cm',
            'width' => '宽单位cm',
            'height' => '高单位cm',
            'tax' => '税费',
            'insurance' => '保险费',
            'print' => '是否打印',
            'batchId' => '批次号',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'status' => '0无,-1问题件',
            'pickIn' => '是否取件',
            'instore' => '是否进入仓库',
            'outstore' => '是否出库',
            'userId' => '提交面单的用户ID',
            'editTime' => 'Edit Time',
            'editors' => '编辑者',
            'lineId' => 'Line ID',
            'pickInTime' => 'Pick In Time',
            'instoreTime' => 'Instore Time',
            'outTime' => 'Out Time',
            'pickerId' => 'Picker ID',
            'warehouserId' => '仓库账号',
            'remarks' => 'Remarks',
            'accept' => '司机是否从系统接单',
            'acceptTime' => '司机从系统接单时间',
            'recept' => '司机是否收到',
            'receptTime' => '快递公司司机上门收单时间',
            'pay' => '支付状态 1 正在支付 2 支付完成',
            'payTime' => '支付时间',
            'origin' => '订单来源',
            'packageId' => '京东包裹号',
            'createType' => '1 在线下单 2司机下单 3 仓库称重 4批量下单 5api创建',
            'hold' => '订单是否截停',
            'holdTime' => '截停时间',
            'cancel' => '是否取消',
            'cancelTime' => '取消时间',
            'auditTime' => '订单审核时间',
            'merchantId' => '商户id',
            'affirm' => '是否核实',
            'sign' => '1 签收 0 未签收',
            'editor' => '正在编辑',
        ];
    }

    public function getProducts(){
        return $this->hasMany(OrderProduct::className(), ['orderId' => 'id']);
    }

    public function getIdcard(){
        return $this->hasOne(IDCard::className(),['IDNumber'=>'IDNumber']);
    }

    public function getTracks(){
        return $this->hasMany(Track::className(),['orderId'=>'id']);
    }
}
