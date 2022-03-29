<?php

namespace app\controllers;
use app\models\User;
use Yii;

class DangnhapController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $model = new User();
        if($model->load(Yii::$app->request->post())){

            $request = Yii::$app->request->post('User');
            $username = $request['user_name'];
            $password = $request['password'];
            
            if($model->Dangnhap($username,$password)==true){
                echo 'Đăng nhập thành  công';
                Yii::$app->session->setFlash('LoginOk');
            }else {
                Yii::$app->session->setFlash('LoginFalse');
            }
        }
        return $this->render('index',['model'=>$model]);
    }

}
