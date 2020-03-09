<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumnis;

/**
 * AlumnisSearch represents the model behind the search form of `app\models\Alumnis`.
 */
class AlumnisSearch extends Alumnis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'beastudi_id', 'prodi_id'], 'integer'],
            [['nama', 'jk', 'tmp_lahir', 'tgl_lahir', 'email', 'no_hp', 'alamat', 'foto', 'angkatan', 'status_kerja', 'tmp_kerja'], 'safe'],
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
        $query = Alumnis::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'beastudi_id' => $this->beastudi_id,
            'prodi_id' => $this->prodi_id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'angkatan', $this->angkatan])
            ->andFilterWhere(['like', 'status_kerja', $this->status_kerja])
            ->andFilterWhere(['like', 'tmp_kerja', $this->tmp_kerja]);

        return $dataProvider;
    }
}
