<?php

namespace app\modules\quantri\controllers;

use yii\web\Controller;

/**
 * Default controller for the `quantri` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {   
        $model = "Trong view module";
        return $this->render('index',['model'=>$model]);
    }
}
