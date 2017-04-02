<?php 
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;
   use app\models\Language;
   use yii\helpers\ArrayHelper;

   $language = Language::find()->all();

   $langList = ArrayHelper::map($language, 'id_language', 'language_type');

   $form = ActiveForm::begin();  ?>
  <div class="row">
  <div class="col-sm-4">
     <?= $form->field($book, 'book_name'); ?>
     <?= $form->field($book,'ISBN'); ?>
     <?= $form->field($book,'publishing_year'); ?>
     <?= $form->field($book,'book_discription'); ?>
     <?= $form->field($book,'language_id_language')->dropDownList($langList); ?>
     <?= $form->field($book,'photoFile')->fileInput(); ?>
  </div>
  </div>
  <?= Html::submitButton('Сохранить', [
  'class' => 'btn btn-success']) ?>



 <?php  ActiveForm::end(); ?>