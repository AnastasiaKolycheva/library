<?php 
use app\components\widgets\book\BookWidgetAsset;
BookWidgetAsset::register($this); 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="container row">
	<div class="col-md-3">
  <?php if ($onePublishingHouse->photo): ?>
    <img class="imgs" src="/<?=$onePublishingHouse->photo ?>">
  <?php else : ?>
    <img src="http://placehold.it/150x150">
   <?php endif; ?>
   </div>
   <div class="col-md-9">
   <h2 class="text-center">
  <?=$onePublishingHouse->publishing_house_name ?>
  
  </h2>
  <h3 class="text-center">
    Адрес вебсайта:   
    <?= Html::a($onePublishingHouse->publishing_house_website,$onePublishingHouse->publishing_house_website)?>
  </h3>
  <h3 class="text-center"><em>Изданы книги:</em></h3> <br>
 
   <?php foreach($onePublishingHouse->books as $book): ?>
     <div class="book col-md-2">
    <div class="book_img"> 
      <img class="imgs" src="/<?=$book->photo ?>"> </div>
    <div class="book_title">
  <?= Html::a($book->book_name,
           ['book/view', 'id' => $book->book_id
           ])
   ?> </div>
  </div>
   
<?php endforeach; ?>
  </div>
</div>