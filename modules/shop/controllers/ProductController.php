<?php

declare(strict_types=1);

namespace app\modules\shop\controllers;

use app\modules\shop\modules\ProductAddModel;
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

        return $this->render('create', compact('model'));
    }
}
