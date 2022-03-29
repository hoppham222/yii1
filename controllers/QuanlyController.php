<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\User;

class QuanlyController extends Controller {
    public function actionUser() {
        $user =new User();
        $tb_user = $user->Get_All_User();
        $user_one = $user->Get_User(1);
        // var_dump($tb_user);
        // exit;
        return $this->render('index',['user'=>$tb_user,'one'=>$user_one]);
    }
}
