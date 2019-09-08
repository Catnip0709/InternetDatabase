<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sponsor;

/**
 * SponsorSearch represents the model behind the search form about `common\models\Sponsor`.
 */
class SponsorSearch extends Sponsor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sponsor_Name'], 'safe'],
            [['Sponsor_Amount'], 'integer'],
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
        $query = Sponsor::find();

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
            'Sponsor_Amount' => $this->Sponsor_Amount,
        ]);

        $query->andFilterWhere(['like', 'Sponsor_Name', $this->Sponsor_Name]);

        return $dataProvider;
    }
}
