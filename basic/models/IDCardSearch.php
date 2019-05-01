<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IDCard;

/**
 * IDCardSearch represents the model behind the search form of `app\models\IDCard`.
 */
class IDCardSearch extends IDCard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'id', 'updateTime', 'expiredTime', 'userId'], 'integer'],
            [['name', 'IDNumber', 'phone', 'address', 'photo', 'photo1', 'photo2'], 'safe'],
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
        $query = IDCard::find();

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
            'status' => $this->status,
            'id' => $this->id,
            'updateTime' => $this->updateTime,
            'expiredTime' => $this->expiredTime,
            'userId' => $this->userId,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'IDNumber', $this->IDNumber])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'photo1', $this->photo1])
            ->andFilterWhere(['like', 'photo2', $this->photo2]);

        return $dataProvider;
    }
}
