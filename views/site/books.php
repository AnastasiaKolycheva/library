<?php 
	use app\components\widgets\book\BookWidget;
	?>
	<?php foreach ($books as $item) : ?>
		<?= BookWidget::widget([
			'book' => $item
		]) ?>
<?php /*
  <div class="book col-md-2">
    <div class="book_img"> 
      <img src="//placehold.it/100x150"> </div>
    <div class="book_title">
  <?= $item ->book_name ?> </div>
  </div> */ ?>
<?php endforeach; ?>
