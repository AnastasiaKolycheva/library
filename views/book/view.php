<div class="container row">
	<div class="col-md-3">
   <img src="/img/2.jpg">
   </div>
   <div class="col-md-9">
   <h2>
  <?=$oneBook->book_name ?>  
  </h2>
  <p> Автор </p>
  <?php if ($oneBook->language_id_language != 33) : ?>
	  <p>Переводчик: <?= $oneBook->language_id_language ?> </p>
  <?php endif; ?>
  <p> <b>ISBN: </b> <?=$oneBook->ISBN ?>
  </p>
  <p> <?=$oneBook->book_discription ?> </p>
  <p> <b> Год издания: </b>
     <?=$oneBook->publishing_year ?>
  </p>
  <p> <b> Издательство: </b>
  </p>
  <p> <b> Язык издания: </b>
  <?=$oneBook->language_id_language ?>
  </p>
  <p> <b> Где купить: </b>
  </p>
  </div>
</div>