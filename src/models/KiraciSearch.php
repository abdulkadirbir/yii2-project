<?php

namespace abdulkadirbir\content\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use abdulkadirbir\content\models\Kiraci;

/**
 * KiraciSearch represents the model behind the search form of `common\models\Kiraci`.
 */
class KiraciSearch extends Kiraci
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim', 'soyisim', 'memleket'], 'safe'],
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
        $query = Kiraci::find();

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
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'soyisim', $this->soyisim])
            ->andFilterWhere(['like', 'memleket', $this->memleket]);

        return $dataProvider;
    }
}
