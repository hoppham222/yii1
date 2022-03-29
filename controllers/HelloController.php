<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Hello;

class HelloController extends Controller {
    public function actionIndex() {
        $this->layout='mylayout';
       return $this->render('index');
    }

    public function  actionUser() {
        $nodel = new Hello();
        $nodel->setUser('Phạm Văn Hợp','HHH.net','hh@gmail.com');
        echo $nodel->getUser();
    }
}