<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Warga;

/**
 * WargaSearch represents the model behind the search form of `common\models\Warga`.
 */
class WargaSearch extends Warga
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jk', 'status'], 'integer'],
            [['no_kk', 'nik', 'nama', 'alamat', 'agama', 'goldar', 'tgl_masuk'], 'safe'],
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
        $query = Warga::find();

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
            'jk' => $this->jk,
            'tgl_masuk' => $this->tgl_masuk,
        ]);

        $query->andFilterWhere(['like', 'no_kk', $this->no_kk])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'goldar', $this->goldar]);

        return $dataProvider;
    }
}
