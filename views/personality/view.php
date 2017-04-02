<div class="container row">
	<div class="col-md-3">
  <?php if ($onePersonality->photo): ?>
    <img src="/<?=$onePersonality->photo ?>">
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
  <p>
    <?=$onePersonality->biography ?>
  </p>
  
  <b>Книги:</b> <br>
 
  <ul>
  <?php foreach($onePersonality->books as $book): ?>
    <li><?= $book->book_name ?>
    </li>
   
<?php endforeach; ?>
  </ul>
  </div>
</div>