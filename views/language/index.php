<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Список языков</h1>
<?php /*var_dump($lang);*/?>

  <?php foreach ($lang as $key) : ?>
          <h3>
            <?= Html::a(
          	  $key->language_type,
          	  ['language/view', 'id' => $key->id_language],
          	  ['class' => 'language-link']
          	 )
          	?>
          </h3>
  <?php endforeach; ?>     
  
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
