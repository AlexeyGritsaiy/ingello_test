<?php

declare(strict_types=1);

namespace app\modules\user\controllers\auth;

use yii\web\Controller;

class TokenController extends Controller
{
    public function actionCreate()
    {
        if (\Yii::$app->request->post()) {
            $token = \Yii::$app->security->generateRandomString(rand(25, 50));
            \Yii::$app->session->setFlash('user-token', $token);
        }

        return $this->render('index');
    }
}
