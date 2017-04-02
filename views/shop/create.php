<?php 
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;

   $form = ActiveForm::begin(); ?>
 <div class="row">
   <div class="col-sm-4">
  <?= $form->field($shop, 'shop_name'); ?>
  <?= $form->field($shop,'shop_website'); ?>
  <?= $form->field($shop,'photoFile')->fileInput(); ?>
  </div>
  </div>
  <?= Html::submitButton('Сохранить', [
  'class' => 'btn btn-success']) ?>



 <?php  ActiveForm::end(); ?>
