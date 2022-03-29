<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php 
if(Yii::$app->session->hasFlash('LoginFalse')){?>
<div class="alert alert-danger">Đăng nhập thất bại</div>
<?php  
}
?>

<?php 
if(Yii::$app->session->hasFlash('LoginOk')){?>
<div class="alert alert-success">Đăng nhập thành công</div>
<?php  
}
?>

<?php $form =ActiveForm::begin()?>
<?= $form->field($model,'user_name')->textInput(['placeholder'=>"Nhập tài khoản"]) ?>
<?= $form->field($model,'password')->passwordInput(['placeholder'=>"Nhập mật khẩu"]) ?>
<?= Html::submitButton('Đăng nhập',['class'=>'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
