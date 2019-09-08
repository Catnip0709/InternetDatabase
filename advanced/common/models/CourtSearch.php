<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Court;

/**
 * CourtSearch represents the model behind the search form about `common\models\Court`.
 */
class CourtSearch extends Court
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['court_Name', 'court_Position'], 'safe'],
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
        $query = Court::find();

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
        $query->andFilterWhere(['like', 'court_Name', $this->court_Name])
            ->andFilterWhere(['like', 'court_Position', $this->court_Position]);

        return $dataProvider;
    }
}
