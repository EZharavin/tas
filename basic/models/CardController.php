<?php

namespace app\models;

class CardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
