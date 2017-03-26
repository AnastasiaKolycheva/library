<?php
namespace app\models;

use app\models\Shop;
use yii\data\ActiveDataProvider;

class ShopSearch extends Shop
{
   public function Rules()
   {
   	return [
    [['shop_name', 'shop_website'], 'string'],
    ];
   }
   public function scenarios()
    {
        return Shop::scenarios();
    }
   public function search($params)
   {
   	  $query = Shop::find();
   	  $dataProvider = new ActiveDataProvider([
         'query' => $query,
         'pagination' => [
            'pageSize' => 4,
        ],
   	  ]);
     if (!($this->load($params) && $this->validate())) {
     	return $dataProvider;
     }
     $query->andFilterWhere(['like', 'shop_name', $this->shop_name]);
   	  return $dataProvider; 
   }

}