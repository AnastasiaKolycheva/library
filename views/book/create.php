<?php 
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;

   $form = ActiveForm::begin(); ?>
 <div class="row">
   <div class="col-sm-4">
  <?= $form->field($book, 'book_name'); ?>
  <?= $form->field($book,'ISBN'); ?>
  <?= $form->field($book,'publishing_year'); ?>
  <?= $form->field($book,'book_discription'); ?>
  <?= $form->field($book,'language_id_language'); ?>
  </div>
  </div>
  <?= Html::submitButton('Сохранить', [
  'class' => 'btn btn-success']) ?>



 <?php  ActiveForm::end(); ?>