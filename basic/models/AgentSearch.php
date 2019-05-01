<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Agent;

/**
 * AgentSearch represents the model behind the search form of `app\models\Agent`.
 */
class AgentSearch extends Agent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'createTime', 'userId', 'company', 'status'], 'integer'],
            [['No', 'name', 'contacts', 'phone', 'address', 'city', 'intro'], 'safe'],
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
        $query = Agent::find();

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
            'createTime' => $this->createTime,
            'userId' => $this->userId,
            'company' => $this->company,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'No', $this->No])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'intro', $this->intro]);

        return $dataProvider;
    }
}
