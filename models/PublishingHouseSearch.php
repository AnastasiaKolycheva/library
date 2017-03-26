<?php
namespace app\models;

use app\models\PublishingHouse;
use yii\data\ActiveDataProvider;

class PublishingHouseSearch extends PublishingHouse
{
   public function Rules()
   {
   	return [
    [['publishing_house_name', 'publishing_house_website'], 'string'],
    ];
   }
   public function scenarios()
    {
        return PublishingHouse::scenarios();
    }
   public function search($params)
   {
   	  $query = PublishingHouse::find();
   	  $dataProvider = new ActiveDataProvider([
         'query' => $query,
         'pagination' => [
            'pageSize' => 4,
        ],
   	  ]);
     if (!($this->load($params) && $this->validate())) {
     	return $dataProvider;
     }
     $query->andFilterWhere(['like', 'publishing_house_name', $this->publishing_house_name]);
   	  return $dataProvider; 
   }

}