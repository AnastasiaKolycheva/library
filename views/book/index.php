<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Список книг</h1>
<?php /*var_dump($book);*/?>

  <?php foreach ($book as $key) : ?>
          <h3>
            <?= Html::a(
          	  $key->book_name,
          	  ['book/view', 'id' => $key->book_id],
          	  ['class' => 'book-link']
          	 )
          	?>
          </h3>
  <?php endforeach; ?>     
  
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
