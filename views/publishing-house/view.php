<div class="container row">
	<div class="col-md-3">
  <?php if ($onePublishingHouse->photo): ?>
    <img src="/<?=$onePublishingHouse->photo ?>">
  <?php else : ?>
    <img src="http://placehold.it/150x150">
   <?php endif; ?>
   </div>
   <div class="col-md-9">
   <h2 style="text-align: center">
  <?=$onePublishingHouse->publishing_house_name ?>
  
  </h2>
  <h3 style="text-align: center">
    Адрес вебсайта:   
    <?=$onePublishingHouse->publishing_house_website ?>
  </h3>
  <b>Изданы книги:</b> <br>
 
  <ul>
  <?php foreach($onePublishingHouse->books as $book): ?>
    <li><?= $book->book_name ?>
    </li>
   
<?php endforeach; ?>
  </div>
</div>