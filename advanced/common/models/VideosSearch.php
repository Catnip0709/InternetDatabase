<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Videos;

/**
 * VideosSearch represents the model behind the search form about `common\models\Videos`.
 */
class VideosSearch extends Videos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Videos_Name', 'Videos_Time', 'Videos_Link', 'Videos_TeamA', 'Videos_TeamB'], 'safe'],
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
        $query = Videos::find();

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
        $query->andFilterWhere(['like', 'Videos_Name', $this->Videos_Name])
            ->andFilterWhere(['like', 'Videos_Time', $this->Videos_Time])
            ->andFilterWhere(['like', 'Videos_Link', $this->Videos_Link])
            ->andFilterWhere(['like', 'Videos_TeamA', $this->Videos_TeamA])
            ->andFilterWhere(['like', 'Videos_TeamB', $this->Videos_TeamB]);

        return $dataProvider;
    }
}
