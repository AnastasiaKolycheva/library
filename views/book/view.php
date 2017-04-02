<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="container row">
	<div class="col-md-3">
  <?php if ($oneBook->photo): ?>
    <img src="/<?=$oneBook->photo ?>">
  <?php else : ?>
    <img src="http://placehold.it/150x150">
   <?php endif; ?>
   </div>
   <div class="col-md-9">
   <h2>
  <?=$oneBook->book_name ?>  
  </h2>
  <p> <b>Автор:</b>
    <?php foreach($oneBook->personality as $personality): ?>
      <?= Html::a(
    $personality->pers_lastname . '&nbsp;' . 
    $personality->pers_name . '&nbsp;' .
    $personality->pers_secondname,
      ['personality/view', 'id' => $personality->id_personality]
    ) ?>
    <?php endforeach; ?>
    </p>
  <?php /* if ($oneBook->language_id_language != 33) : ?>
	  <p>Переводчик: <?= $oneBook->language_id_language ?> </p>
  <?php endif; */ ?>
   
  <p> <b>ISBN: </b> <?=$oneBook->ISBN ?>
  </p>
  <p> <?=$oneBook->book_discription ?> </p>
  <p> <b> Год издания: </b>
     <?=$oneBook->publishing_year ?>
  </p>
  <p> <b> Издательство: </b>
  <?php foreach($oneBook->publishingHouse as $publishingHouse): ?>
    <?= Html::a ( $publishingHouse->publishing_house_name, 
    ['publishing-house/view', 'id' => $publishingHouse->id_publishing_house])?>
    <?php endforeach; ?>
  </p>
  <p> <b> Язык издания: </b>
  <?=$oneBook->language->language_type; ?>
  </p>
  <p> <b> Где купить: </b>
   <ul> <?php foreach($oneBook->shop as $shop): ?>
   <li><?= Html::a($shop->shop_name, $shop->shop_website) ?></li>
    <?php endforeach; ?>
    </ul>
  </p>
  </div>
</div>

   
