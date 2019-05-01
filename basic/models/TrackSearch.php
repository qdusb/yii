<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Track;

/**
 * TrackSearch represents the model behind the search form of `app\models\Track`.
 */
class TrackSearch extends Track
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'code', 'orderId', 'createTime', 'updateTime', 'operatorId', 'status'], 'integer'],
            [['type', 'place', 'memo'], 'safe'],
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
        $query = Track::find();

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
            'code' => $this->code,
            'orderId' => $this->orderId,
            'createTime' => $this->createTime,
            'updateTime' => $this->updateTime,
            'operatorId' => $this->operatorId,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'memo', $this->memo]);

        return $dataProvider;
    }
}
