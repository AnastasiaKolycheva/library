<?php

namespace app\controllers;
use app\models\Personality;

class PersonalityController extends \yii\web\Controller
{
    public function actionIndex()
    {
    
        $personality = Personality:: find()->all();
        
        return $this->render('index', [
        	'personality' => $personality ]);
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
}