<?php

namespace app\controllers;

use Yii;
use app\models\PublishingHouse;
use app\models\PublishingHouseSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;

class PublishingHouseController extends \yii\web\Controller
{
      public function behaviors()
       {  
        return [
            'access' => [
               'class' => AccessControl::className(),
               'only'  => ['update',],
               /*'denyCallback' => function ($rule,$action) {
                  throw new \yii\web\ForbiddenHttpException('Нет доступа');
                  },*/
               
               'rules' => [
               [
                   'allow'   => false,
                   'actions' => ['update'],
                   'roles'   => ['?'],
               ],
               [
                   'allow'   => true,
                   'actions' => ['update'],
                   'roles'   => ['@'],
               ]
               ]
            ]
        ];
    }
        public function actionIndex()
    {
        $publishingHouse = PublishingHouse::find();
        $search = new PublishingHouseSearch();
        $dpPublishingHouse = $search->search(Yii::$app->request->get());
                  
        return $this->render('index', [
        	'publishingHouse' => $dpPublishingHouse,
            'publishingHouseSearch' => $search
             ]);
    }

       public function actionView($id)
      {   
    	$publishingHouse = PublishingHouse::find()
    	->where(['id_publishing_house'=> $id])
    	->one();
        if (is_null($publishingHouse)) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена');
        };
    	return $this->render ('view', [
    		'onePublishingHouse' =>$publishingHouse
    		]);
      }
      public function actionCreate ()
      {
        return $this->actionUpdate();
      }
      public function actionUpdate($id = -1) 
      { 
        $request =\Yii::$app->request;
        $publishingHouse = PublishingHouse::find()
          ->where(['id_publishing_house'=> $id])
          ->one();
          if (is_null($publishingHouse))
           $publishingHouse = new PublishingHouse();
          
         if ($request->post('PublishingHouse')) {
            
            $publishingHouse->attributes = $request->post('PublishingHouse');
            if ($publishingHouse->save()) {
                $this->redirect(['publishing-house/view', 'id' => $publishingHouse->id_publishing_house]);
            }

        }
        return $this->render('create', [
            'publishingHouse' => $publishingHouse
            ]);
      }
}


