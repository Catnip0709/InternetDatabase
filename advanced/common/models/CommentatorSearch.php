<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Commentator;

/**
 * CommentatorSearch represents the model behind the search form about `common\models\Commentator`.
 */
class CommentatorSearch extends Commentator
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['commentator_Name', 'commentator_NativePlace'], 'safe'],
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
        $query = Commentator::find();

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
        $query->andFilterWhere(['like', 'commentator_Name', $this->commentator_Name])
            ->andFilterWhere(['like', 'commentator_NativePlace', $this->commentator_NativePlace]);

        return $dataProvider;
    }
}
