<?php

namespace app\controllers;

use app\models\Language;

class LanguageController extends \yii\web\Controller
{
    public function actionIndex()
    {
    
        $lang = Language:: find()->all();
        
        return $this->render('index', [
        	'lang' => $lang ]);
        }
    public function actionView($id)
    {   
    	$lang = Language::find()
    	->where(['id_language'=> $id])
    	->one();
    	return $this->render ('view', [
    		'oneLanguage' =>$lang
    		]);
    }
}

       
    


