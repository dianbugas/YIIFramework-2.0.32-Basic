<?php

namespace app\controllers;

use Yii;
use app\models\Mahasiswas;
use app\models\MahasiswasSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;

class MahasiswasController extends \yii\web\Controller
{
    public function actionCreateOrder()
    {
        return $this->render('create-order');
    }

    public function actionIndex()
    {
        $searchModel = new MahasiswasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        return $this->render('index');
    }
}
