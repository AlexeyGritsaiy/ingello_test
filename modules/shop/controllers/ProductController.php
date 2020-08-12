<?php

declare(strict_types=1);

namespace app\modules\shop\controllers;

use app\modules\shop\models\ProductAddModel;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $model = new ProductAddModel();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $attributes = $model->attributes();
        }

        $queryParams = \Yii::$app->getRequest()->getQueryParams();

        return $this->render('create', compact('model', 'queryParams'));
    }
}
