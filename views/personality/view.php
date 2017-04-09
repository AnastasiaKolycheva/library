<?php 
use app\components\widgets\book\BookWidgetAsset;
BookWidgetAsset::register($this); 
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="container row">
	<div class="col-md-3">
  <?php if ($onePersonality->photo): ?>
    <img class="imgs" src="/<?=$onePersonality->photo ?>">
  <?php else : ?>
    <img src="http://placehold.it/150x150">
   <?php endif; ?>
   </div>
   <div class="col-md-9">
   <h2 class="text-center">
  <?=$onePersonality->pers_lastname ?>
  
  </h2>
  <h3 class="text-center">
    <?=$onePersonality->pers_name ?>
    <?=$onePersonality->pers_secondname ?>
  </h3>
  <p class="bio">
    <strong><?=$onePersonality->biography ?></strong>
  </p>
  
  <br>
 
   <?php foreach($onePersonality->books as $book): ?>
    <div class="book col-md-2">
    <div> 
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