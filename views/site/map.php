<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<ul class="nav nav-list"> 
 <li class="nav-header">Карта сайта</li>
 <li><?= Html::a('На главную',['site/index']) ?>
 </li>
 <li>
   	<?= Html::a('Авторы',['personality/index']) ?>
 </li>
  <li>
 	<?= Html::a('Книги',['book/index']) ?>
 </li>
  <li>
 	Издательства
 </li>
  <li>
 	Где купить
 </li>
</ul>