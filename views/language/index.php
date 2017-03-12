<?php
/* @var $this yii\web\View */
?>
<h1>Список языков</h1>
<?php /*var_dump($lang);*/?>

  <?php foreach ($lang as $key) : ?>
         <h3><?= $key->id_language ?> </h3>
         <h3> <?= $key->language_type ?> </h3>
  <?php endforeach; ?>     
  
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
