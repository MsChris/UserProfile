<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\userprofile */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Userprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

  <?= DetailView::widget(['model' => $model,'options'=>['class'=>'text-center'],'attributes'=>
        [
            'ID',
[
    'attribute'=>'Profile_Picture',
    'value'=>$model->Profile_Picture,
    'format' => ['image',['width'=>'100','height'=>'100']],
],
            'Full_Name',
            'Gender',
            'Date_Of_Birth',
            'Years_Of_Experience',
            'Industry',
            'Location',
            'About_Me',
            'Professional_Title',
            'Career_Level',
            'Communication_Level',
            'Organizational_Level',
            'Job_Related_Level',
            'Address',
            'Phone_Number',
            'Website',
            'Email:email',
        ],
    ]) ?>

</div>
