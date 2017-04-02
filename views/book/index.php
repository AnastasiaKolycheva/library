<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Список книг</h1>
<?php /*var_dump($book);*/?>

  <?= GridView::widget([
     'dataProvider' => $book,
     'filterModel' => $bookSearch,
     'columns' => ['book_name',
        'publishing_year',
        'language.language_type',
        ['class' => 'yii\grid\ActionColumn',
          'template' => '{view} {update}'
         ]
    ]

    ])
   
   /*foreach ($personality as $key) : ?>
          <h3>
            <?= Html::a(
              $key->pers_lastname,
              ['personality/view', 'id' => $key->id_personality],
              ['class' => 'pers-link']
             )
            ?>
          
          
            <?= Html::a(
              'Редактировать',
              ['personality/create', 'id' => $key->id_personality],
              ['class' => 'btn pull-right']
             )
            ?>
            </h3>
            
  <?php endforeach; */
  ?> 
  <br> 
  
  <?= Html::a(
      'Добавить книгу',
      ['book/create'],
      ['class' => 'btn btn-success']
    )    ?>