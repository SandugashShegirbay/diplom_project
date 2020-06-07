<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Univers;

/**
 * UniversSearch represents the model behind the search form of `frontend\models\Univers`.
 */
class UniversSearch extends Univers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'students', 'sthouse', 'cat_id', 'spec_id', 'reg_id'], 'integer'],
            [[ 'grants', 'accr','name'], 'safe'],
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
        $query = Univers::find();

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
            'price' => $this->price,
            'students' => $this->students,
            'sthouse' => $this->sthouse,
            'cat_id' => $this->cat_id,
            'spec_id' => $this->spec_id,
            'reg_id' => $this->reg_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'grants', $this->grants])
            ->andFilterWhere(['like', 'accr', $this->accr]);

        return $dataProvider;
    }
}
