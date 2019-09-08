<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Team;

/**
 * TeamSearch represents the model behind the search form about `common\models\Team`.
 */
class TeamSearch extends Team
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Team_Nation', 'Team_Coach', 'Team_Group', 'Team_Shirtsponsor'], 'safe'],
            [['Team_Score'], 'integer'],
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
        $query = Team::find();

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
            'Team_Score' => $this->Team_Score,
        ]);

        $query->andFilterWhere(['like', 'Team_Nation', $this->Team_Nation])
            ->andFilterWhere(['like', 'Team_Coach', $this->Team_Coach])
            ->andFilterWhere(['like', 'Team_Group', $this->Team_Group])
            ->andFilterWhere(['like', 'Team_Shirtsponsor', $this->Team_Shirtsponsor]);

        return $dataProvider;
    }
}
