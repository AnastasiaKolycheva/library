<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Интернет-магазины</h1>

<?= GridView::widget([
     'dataProvider' => $shop,
     'filterModel' => $shopSearch,
     'columns' => ['shop_name',
        'shop_website',
        ['class' => 'yii\grid\ActionColumn',
          'template' => '{view} {update}'
         ]
    ]

    ])
  ?> 
  <br> 
  
  <?= Html::a(
      'Добавить информацию об интернет-магазине',
      ['shop/create'],
      ['class' => 'btn btn-success']
    )    ?>

