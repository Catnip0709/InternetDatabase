<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Coach;

/**
 * CoachSearch represents the model behind the search form about `common\models\Coach`.
 */
class CoachSearch extends Coach
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Coach_Name'], 'safe'],
            [['Coach_Age'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Coach::find();

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
            'Coach_Age' => $this->Coach_Age,
        ]);

        $query->andFilterWhere(['like', 'Coach_Name', $this->Coach_Name]);

        return $dataProvider;
    }
}
