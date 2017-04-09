<?php
use app\components\widgets\book\BookWidgetAsset;
BookWidgetAsset::register($this);
use yii\helpers\Url;
use yii\helpers\Html;
?>


<div class="book col-md-2">
    <div class="book_img"> 
   <img class="imgs" src="/<?=$book->photo ?>"> </div>
    <div class="book_title">
  <?= Html::a($book->book_name,
  	       ['book/view', 'id' => $book->book_id
  	       ])
   ?> </div>
  </div>