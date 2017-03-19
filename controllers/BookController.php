<?php

namespace app\controllers;

use app\models\Book;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
    
        $book = Book:: find()->all();
        
        return $this->render('index', [
        	'book' => $book ]);
        }
    public function actionView($id)
      {   
    	$book = Book::find()
    	->where(['book_id'=> $id])
    	->one();
        if (is_null($book)) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена');
        };
    	return $this->render ('view', [
    		'oneBook' =>$book
    		]);
      } 
}
        
    


       
    
