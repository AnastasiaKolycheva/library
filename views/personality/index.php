<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Список авторов</h1>
<?php /*var_dump($book);*/?>

  <?php foreach ($personality as $key) : ?>
          <h3>
            <?= Html::a(
          	  $key->pers_lastname,
              ['personality/view', 'id' => $key->id_personality],
          	  ['class' => 'pers-link']
          	 )
          	?>
          </h3>
  <?php endforeach; ?>     
  
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
