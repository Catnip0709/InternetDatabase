<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\News;

/**
 * NewsSearch represents the model behind the search form about `common\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['News_Title', 'News_Time', 'News_Link', 'News_TeamA', 'News_TeamB'], 'safe'],
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
        $query = News::find();

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
        $query->andFilterWhere(['like', 'News_Title', $this->News_Title])
            ->andFilterWhere(['like', 'News_Time', $this->News_Time])
            ->andFilterWhere(['like', 'News_Link', $this->News_Link])
            ->andFilterWhere(['like', 'News_TeamA', $this->News_TeamA])
            ->andFilterWhere(['like', 'News_TeamB', $this->News_TeamB]);

        return $dataProvider;
    }
}
