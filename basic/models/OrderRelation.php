<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Relation;

/**
 * OrderRelation represents the model behind the search form of `app\models\Relation`.
 */
class OrderRelation extends Relation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ordinal'], 'integer'],
            [['name', 'url', 'target', 'lang', 'ico'], 'safe'],
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
        $query = Relation::find();

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
            'ordinal' => $this->ordinal,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'ico', $this->ico]);

        return $dataProvider;
    }
}
