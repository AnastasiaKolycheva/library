<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Список издательств</h1>

<?= GridView::widget([
     'dataProvider' => $publishingHouse,
     'filterModel' => $publishingHouseSearch,
     'columns' => ['publishing_house_name',
        'publishing_house_website',
        ['class' => 'yii\grid\ActionColumn',
          'template' => '{view} {update}'
         ]
    ]

    ])
  ?> 
  <br> 
  
  <?= Html::a(
      'Добавить информацию об издательстве',
      ['publishing-house/create'],
      ['class' => 'btn btn-success']
    )    ?>


