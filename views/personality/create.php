<?php 
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;

   $form = ActiveForm::begin(); ?>
 <div class="row">
   <div class="col-sm-4">
  <?= $form->field($personality, 'pers_name'); ?>
  <?= $form->field($personality,'pers_secondname'); ?>
  <?= $form->field($personality,'pers_lastname'); ?>
  <?= $form->field($personality,'biography'); ?>
  <?= $form->field($personality,'photoFile')->fileInput(); ?>
  </div>
  </div>
  <?= Html::submitButton('Сохранить', [
  'class' => 'btn btn-success']) ?>



 <?php  ActiveForm::end(); ?>



<!--<form action="" method="post">
   <input type="text" name="Personality[pers_name]" placeholder="Имя"> <br>
   <input type="text" name="Personality[pers_secondname]" placeholder="Отчество/Второе имя"> <br>
   <input type="text" name="Personality[pers_lastname]" placeholder="Фамилия"> <br>
      <input type="submit" class="btb btn-success"> <br>
      <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
        value="<?= Yii::$app->request->getCsrfToken() ?>">
</form>-->

