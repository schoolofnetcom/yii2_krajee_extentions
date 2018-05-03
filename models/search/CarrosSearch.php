<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carros;

/**
 * CarrosSearch represents the model behind the search form of `app\models\Carros`.
 */
class CarrosSearch extends Carros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'marca_id'], 'integer'],
            [['modelo', 'ano_fabricacao', 'valor', 'ainda_fabrica', 'data_cadastro'], 'safe'],
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
        $query = Carros::find();

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
            'marca_id' => $this->marca_id,
            'data_cadastro' => $this->data_cadastro,
        ]);

        $query->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'ano_fabricacao', $this->ano_fabricacao])
            ->andFilterWhere(['like', 'valor', $this->valor])
            ->andFilterWhere(['like', 'ainda_fabrica', $this->ainda_fabrica]);

        return $dataProvider;
    }
}
