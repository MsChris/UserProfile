<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-form">

<!--
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Profile_Picture')->textInput(['maxlength' => true]) ?>
-->
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

<?= $form->field($model, 'file')->fileInput() ?>
<?php 
if ($model->Profile_Picture){
    echo '<div class="im" style="padding-left:12em;">';
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->Profile_Picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo Html::a('Delete Profile Picture', ['erase', 'id'=>$model->ID], ['class'=>'btn btn-danger']).'</br>';
    echo '</div>';
}
?>

    <?= $form->field($model, 'Full_Name')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'Gender')->dropDownList(['Male' => 'M', 'Female' => 'F'],['prompt'=>'Select Gender']) ?>
    
   <?= $form->field($model, 'Date_Of_Birth')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-dd-MM', 'options' => ['class' => 'form-control']
    ]) ?> 
    
    <?= $form->field($model, 'Years_Of_Experience')->dropDownList(['1 - 5 Years' => 'under 5 years', '5 - 10 Years' => 'over 5yrs', '5 - 10 Years' => 'under 10yrs', '10 - 15 Years' => '10 years and over'],['prompt'=>'Select your years of experience']) ?>


    <?= $form->field($model, 'Industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'About_Me')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Professional_Title')->textInput(['maxlength' => true]) ?>


        <?= $form->field($model, 'Career_Level')->dropDownList
                   (['10%' => '10%', '20%' => '20%', '30%' => '30%', '40%' => '40%', '50%' => '50%', '60%' => '60%', '70%' => '70%', '80%' => '80%', '90%' => '90%', '100%' => '100%'],['prompt'=>'Select  Career level']); ?>


      <?= $form->field($model, 'Communication_Level')->dropDownList
                   (['10%' => '10%', '20%' => '20%', '30%' => '30%', '40%' => '40%', '50%' => '50%', '60%' => '60%', '70%' => '70%', '80%' => '80%', '90%' => '90%', '100%' => '100%'],['prompt'=>'Select Communication Level']); ?>
 
    <?= $form->field($model, 'Organizational_Level')->dropDownList
                   (['10%' => '10%', '20%' => '20%', '30%' => '30%', '40%' => '40%', '50%' => '50%', '60%' => '60%', '70%' => '70%', '80%' => '80%', '90%' => '90%', '100%' => '100%'],['prompt'=>'Select  Organizational Level']); ?>

    <?= $form->field($model, 'Job_Related_Level')->dropDownList
                   (['10%' => '10%', '20%' => '20%', '30%' => '30%', '40%' => '40%', '50%' => '50%', '60%' => '60%', '70%' => '70%', '80%' => '80%', '90%' => '90%', '100%' => '100%'],['prompt'=>'Select  Job Level']); ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
