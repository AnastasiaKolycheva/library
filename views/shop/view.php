<div class="container row">
	<div class="col-md-3">
   <?php if ($oneShop->photo): ?>
    <img src="/<?=$oneShop->photo ?>">
  <?php else : ?>
    <img src="http://placehold.it/150x150">
   <?php endif; ?>
   </div>
   <div class="col-md-9">
   <h2 style="text-align: center">
  <?=$oneShop->shop_name ?>
  
  </h2>
  <h3 style="text-align: center">
    Адрес вебсайта:   
    <?=$oneShop->shop_website ?>
  </h3>
  <b>В продаже:</b> <br>
 
  <ul>
  <?php foreach($oneShop->books as $book): ?>
    <li><?= $book->book_name ?>
    </li>
   
<?php endforeach; ?>
  </ul>
  </div>
</div>