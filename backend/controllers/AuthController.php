<?php

namespace backend\controllers;

class AuthController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
