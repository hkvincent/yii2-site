<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Properties;

/**
 * PropertiesSearch represents the model behind the search form about `app\models\Properties`.
 */
class PropertiesSearch extends Properties
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PropertiesID'], 'integer'],
            [['Address1', 'Address2', 'Address3', 'Postcode', 'Type', 'Description', 'SaleStatus', 'Created', 'Updated', 'Deleted'], 'safe'],
            [['Price'], 'number'],
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
        $query = Properties::find();

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
            'PropertiesID' => $this->PropertiesID,
            'Price' => $this->Price,
            'Created' => $this->Created,
            'Updated' => $this->Updated,
            'Deleted' => $this->Deleted,
        ]);

        $query->andFilterWhere(['like', 'Address1', $this->Address1])
            ->andFilterWhere(['like', 'Address2', $this->Address2])
            ->andFilterWhere(['like', 'Address3', $this->Address3])
            ->andFilterWhere(['like', 'Postcode', $this->Postcode])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'SaleStatus', $this->SaleStatus]);

        return $dataProvider;
    }
}
