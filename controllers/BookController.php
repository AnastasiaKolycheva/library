<?php

namespace app\controllers;

use Yii;
use app\models\Book;
use app\models\BookSearch;
use yii\data\ActiveDataProvider;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
    
        
        $book = Book::find();
        $search = new BookSearch();
        $dpBook = $search->search(Yii::$app->request->get());
                  
        return $this->render('index', [
            'book' => $dpBook,
            'bookSearch' => $search
             ]);
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
      public function actionCreate ()
      {
        return $this->actionUpdate();
      }
      public function actionUpdate($id = -1) 
      { 
        $request =\Yii::$app->request;
        $book = Book::find()
          ->where(['book_id'=> $id])
          ->one();
          if (is_null($book))
           $book = new Book();
          
         if ($request->post('Book')) {
            
            $book->attributes = $request->post('Book');
            if ($book->save()) {
                $this->redirect(['book/view', 'id' => $book->book_id]);
            }

        }
        return $this->render('create', [
            'book' => $book
            ]);
      } 
}
        
    


       
    
