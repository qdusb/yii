<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form of `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'agentId', 'print', 'batchId', 'createTime', 'updateTime', 'status', 'pickIn', 'instore', 'outstore', 'userId', 'editTime', 'lineId', 'pickInTime', 'instoreTime', 'outTime', 'pickerId', 'warehouserId', 'accept', 'acceptTime', 'recept', 'receptTime', 'pay', 'payTime', 'createType', 'hold', 'holdTime', 'cancel', 'cancelTime', 'auditTime', 'merchantId', 'affirm', 'sign', 'editor'], 'integer'],
            [['orderNo', 'waybillCode', 'associatedNo', 'frName', 'frPhone', 'frCompany', 'frProvince', 'frCity', 'frCounty', 'frAddress', 'frCountry', 'frZipCode', 'toAddress', 'toName', 'toPhone', 'toCompany', 'toDoorNo', 'toStreet', 'toCounty', 'toCity', 'toProvince', 'toCountry', 'toZipCode', 'toTax', 'toBranch', 'IDNumber', 'editors', 'remarks', 'origin', 'packageId'], 'safe'],
            [['weight', 'checkWeight', 'volume', 'length', 'width', 'height', 'tax', 'insurance'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'agentId' => $this->agentId,
            'weight' => $this->weight,
            'checkWeight' => $this->checkWeight,
            'volume' => $this->volume,
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'tax' => $this->tax,
            'insurance' => $this->insurance,
            'print' => $this->print,
            'batchId' => $this->batchId,
            'createTime' => $this->createTime,
            'updateTime' => $this->updateTime,
            'status' => $this->status,
            'pickIn' => $this->pickIn,
            'instore' => $this->instore,
            'outstore' => $this->outstore,
            'userId' => $this->userId,
            'editTime' => $this->editTime,
            'lineId' => $this->lineId,
            'pickInTime' => $this->pickInTime,
            'instoreTime' => $this->instoreTime,
            'outTime' => $this->outTime,
            'pickerId' => $this->pickerId,
            'warehouserId' => $this->warehouserId,
            'accept' => $this->accept,
            'acceptTime' => $this->acceptTime,
            'recept' => $this->recept,
            'receptTime' => $this->receptTime,
            'pay' => $this->pay,
            'payTime' => $this->payTime,
            'createType' => $this->createType,
            'hold' => $this->hold,
            'holdTime' => $this->holdTime,
            'cancel' => $this->cancel,
            'cancelTime' => $this->cancelTime,
            'auditTime' => $this->auditTime,
            'merchantId' => $this->merchantId,
            'affirm' => $this->affirm,
            'sign' => $this->sign,
            'editor' => $this->editor,
        ]);

        $query->andFilterWhere(['like', 'orderNo', $this->orderNo])
            ->andFilterWhere(['like', 'waybillCode', $this->waybillCode])
            ->andFilterWhere(['like', 'associatedNo', $this->associatedNo])
            ->andFilterWhere(['like', 'frName', $this->frName])
            ->andFilterWhere(['like', 'frPhone', $this->frPhone])
            ->andFilterWhere(['like', 'frCompany', $this->frCompany])
            ->andFilterWhere(['like', 'frProvince', $this->frProvince])
            ->andFilterWhere(['like', 'frCity', $this->frCity])
            ->andFilterWhere(['like', 'frCounty', $this->frCounty])
            ->andFilterWhere(['like', 'frAddress', $this->frAddress])
            ->andFilterWhere(['like', 'frCountry', $this->frCountry])
            ->andFilterWhere(['like', 'frZipCode', $this->frZipCode])
            ->andFilterWhere(['like', 'toAddress', $this->toAddress])
            ->andFilterWhere(['like', 'toName', $this->toName])
            ->andFilterWhere(['like', 'toPhone', $this->toPhone])
            ->andFilterWhere(['like', 'toCompany', $this->toCompany])
            ->andFilterWhere(['like', 'toDoorNo', $this->toDoorNo])
            ->andFilterWhere(['like', 'toStreet', $this->toStreet])
            ->andFilterWhere(['like', 'toCounty', $this->toCounty])
            ->andFilterWhere(['like', 'toCity', $this->toCity])
            ->andFilterWhere(['like', 'toProvince', $this->toProvince])
            ->andFilterWhere(['like', 'toCountry', $this->toCountry])
            ->andFilterWhere(['like', 'toZipCode', $this->toZipCode])
            ->andFilterWhere(['like', 'toTax', $this->toTax])
            ->andFilterWhere(['like', 'toBranch', $this->toBranch])
            ->andFilterWhere(['like', 'IDNumber', $this->IDNumber])
            ->andFilterWhere(['like', 'editors', $this->editors])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'packageId', $this->packageId]);

        return $dataProvider;
    }
}
