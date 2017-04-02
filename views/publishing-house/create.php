<?php 
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;

   $form = ActiveForm::begin(); ?>
 <div class="row">
   <div class="col-sm-4">
  <?= $form->field($publishingHouse, 'publishing_house_name'); ?>
  <?= $form->field($publishingHouse,'publishing_house_website'); ?>
  <?= $form->field($publishingHouse, 'photoFile')->fileInput(); ?>
  </div>
  </div>
  <?= Html::submitButton('Сохранить', [
  'class' => 'btn btn-success']) ?>



 <?php  ActiveForm::end(); ?>
