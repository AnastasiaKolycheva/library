<?php
namespace app\components\widgets\book;

use yii\base\Widget;

class BookWidget extends Widget
{
    public  $book;

    public function init()
    {
        parent::init();
        // $this->registerAssets();
    }

    public function run()
    {
       
        return $this->render('book', [
            'book' => $this->book
        ]);
    }

     public function registerAssets()
     {
         $view = $this->getView();
         AdvWidgetAsset::register($view);
    }

}
