<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tomandjerry;

/**
 * TomandjerrySearch represents the model behind the search form about `common\models\Tomandjerry`.
 */
class TomandjerrySearch extends Tomandjerry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAME', 'SEXUAL', 'IS_LEADER', 'BIRTH_PLACE'], 'safe'],
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
        $query = Tomandjerry::find();

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
        $query->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'SEXUAL', $this->SEXUAL])
            ->andFilterWhere(['like', 'IS_LEADER', $this->IS_LEADER])
            ->andFilterWhere(['like', 'BIRTH_PLACE', $this->BIRTH_PLACE]);

        return $dataProvider;
    }
}
