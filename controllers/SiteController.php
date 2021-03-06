<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Language;
use app\models\Book;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
               'class' => AccessControl::className(),
               'only'  => ['contact',],
               /*'denyCallback' => function ($rule,$action) {
                  throw new \yii\web\ForbiddenHttpException('Нет доступа');
                  },*/
               
               'rules' => [
               [
                   'allow'   => false,
                   'actions' => ['contact'],
                   'roles'   => ['?'],
               ],
               [
                   'allow'   => true,
                   'actions' => ['contact'],
                   'roles'   => ['@'],
               ]
               ]
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('books');
    }

     public function actionBlog()
    {
       $user = [
         'name' => 'Valily',
         'age' => 3
          ];
           return $this->render('blog', [ 
              'author' => $user,
              'text' => 'Lorem ipsum'
          ]);
    }
    public function actionMap ()
    {
        return $this->render('map');
    }
    /* Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionBooks()
    {
      $books = Book::find()->all();
      return $this->render('books',[
        'books' => $books
        ]);
    }
}
