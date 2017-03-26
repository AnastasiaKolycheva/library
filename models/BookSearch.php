<?php
namespace app\models;

use app\models\Book;
use yii\data\ActiveDataProvider;

class BookSearch extends Book
{
   public function Rules()
   {
   	return [
    [['book_name', 'publishing_year', 'language_id_language'], 'string'],
    ];
   }
   public function scenarios()
    {
        return Book::scenarios();
    }
   public function search($params)
   {
   	  $query = Book::find();
   	  $dataProvider = new ActiveDataProvider([
         'query' => $query,
         'pagination' => [
            'pageSize' => 4,
        ],
   	  ]);
     if (!($this->load($params) && $this->validate())) {
     	return $dataProvider;
     }
     $query->andFilterWhere(['like', 'book_name', $this->book_name]);
   	  return $dataProvider; 
   }

}