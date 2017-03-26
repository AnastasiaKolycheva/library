<?php
namespace app\models;

use app\models\Personality;
use yii\data\ActiveDataProvider;

class PersonalitySearch extends Personality
{
   public function Rules()
   {
   	return [
    [['pers_name', 'pers_secondname', 'pers_lastname'], 'string'],
    ];
   }
   public function scenarios()
    {
        return Personality::scenarios();
    }
   public function search($params)
   {
   	  $query = Personality::find();
   	  $dataProvider = new ActiveDataProvider([
         'query' => $query,
         'pagination' => [
            'pageSize' => 4,
        ],
   	  ]);
     if (!($this->load($params) && $this->validate())) {
     	return $dataProvider;
     }
     $query->andFilterWhere(['like', 'pers_lastname', $this->pers_lastname]);
   	  return $dataProvider; 
   }

}