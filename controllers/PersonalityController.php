<?php

namespace app\controllers;
use Yii;
use app\models\Personality;
use app\models\PersonalitySearch;
use yii\data\ActiveDataProvider;

class PersonalityController extends \yii\web\Controller
{
    public function actionIndex()
    {
    
        $personality = Personality::find();
        $search = new PersonalitySearch();
        $dpPersonality = $search->search(Yii::$app->request->get());
                  
        return $this->render('index', [
        	'personality' => $dpPersonality,
            'personalitySearch' => $search
             ]);
        }

    public function actionView($id)
      {   
    	$personality = Personality::find()
    	->where(['id_personality'=> $id])
    	->one();
        if (is_null($personality)) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена');
        };
    	return $this->render ('view', [
    		'onePersonality' =>$personality
    		]);
      }
      public function actionCreate ()
      {
        return $this->actionUpdate();
      }
      public function actionUpdate($id = -1) 
      { 
        $request =\Yii::$app->request;
        $personality = Personality::find()
          ->where(['id_personality'=> $id])
          ->one();
          if (is_null($personality))
           $personality = new Personality();
          
         if ($request->post('Personality')) {
            
            $personality->attributes = $request->post('Personality');
            if ($personality->save()) {
                $this->redirect(['personality/view', 'id' => $personality->id_personality]);
            }

        }
        return $this->render('create', [
            'personality' => $personality
            ]);
      }
}