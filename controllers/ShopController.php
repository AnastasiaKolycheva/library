<?php

namespace app\controllers;

use Yii;
use app\models\Shop;
use app\models\ShopSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;

class ShopController extends \yii\web\Controller
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
        $shop = Shop::find();
        $search = new ShopSearch();
        $dpShop = $search->search(Yii::$app->request->get());
                  
        return $this->render('index', [
        	'shop' => $dpShop,
            'shopSearch' => $search
             ]);
    }
  public function actionView($id)
      {   
    	$shop = Shop::find()
    	->where(['id_shop'=> $id])
    	->one();
        if (is_null($shop)) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена');
        };
    	return $this->render ('view', [
    		'oneShop' =>$shop
    		]);
      }
      public function actionCreate ()
      {
        return $this->actionUpdate();
      }
      public function actionUpdate($id = -1) 
      { 
        $request =\Yii::$app->request;
        $shop = Shop::find()
          ->where(['id_shop'=> $id])
          ->one();
          if (is_null($shop))
           $shop = new Shop();
          
         if ($request->post('Shop')) {
            
            $shop->attributes = $request->post('Shop');
            if ($shop->save()) {
                $this->redirect(['shop/view', 'id' => $shop->id_shop]);
            }

        }
        return $this->render('create', [
            'shop' => $shop
            ]);
      }
}
