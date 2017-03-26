<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Список авторов</h1>
<?php /*var_dump($book);*/?>

  <?= GridView::widget([
     'dataProvider' => $personality,
     'filterModel' => $personalitySearch,
     'columns' => ['pers_name',
        'pers_secondname',
        'pers_lastname',
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
      'Создать автора',
      ['personality/create'],
      ['class' => 'btn btn-success']
    )    ?>
  

