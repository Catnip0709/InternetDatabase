<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Competition;

/**
 * CompetitionSearch represents the model behind the search form about `common\models\Competition`.
 */
class CompetitionSearch extends Competition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Competition_Time', 'Competition_TeamA', 'Competition_TeamB', 'Competition_Court', 'Competition_CCTV5'], 'safe'],
            [['Competition_AScore', 'Competition_BScore'], 'integer'],
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
        $query = Competition::find();

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
            'Competition_AScore' => $this->Competition_AScore,
            'Competition_BScore' => $this->Competition_BScore,
        ]);

        $query->andFilterWhere(['like', 'Competition_Time', $this->Competition_Time])
            ->andFilterWhere(['like', 'Competition_TeamA', $this->Competition_TeamA])
            ->andFilterWhere(['like', 'Competition_TeamB', $this->Competition_TeamB])
            ->andFilterWhere(['like', 'Competition_Court', $this->Competition_Court])
            ->andFilterWhere(['like', 'Competition_CCTV5', $this->Competition_CCTV5]);

        return $dataProvider;
    }
}
