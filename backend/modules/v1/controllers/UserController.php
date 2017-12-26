<?php

namespace backend\modules\v1\controllers;

use backend\controllers\RestController;
use Codeception\Module\REST;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class UserController extends RestController
{
    public function behaviors()
    {
        return ArrayHelper::merge([
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    HttpBearerAuth::className(),
                    QueryParamAuth::className()
                ],
                'except' => [
                    'login',
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'login' => ['POST'],
                    'change-password' => ['POST'],
                    'getuser' => ['GET'],
                ]
            ],
        ], parent::behaviors());
    }


    public $modelClass = 'backend\modules\v1\models\User';

    public function actions()
    {
        $actions = [];
        $actions['login'] = [
            'class' => 'backend\modules\v1\controllers\userActions\LoginAction',
            'modelClass' => $this->modelClass
        ];
        $actions['change-password'] = [
            'class' => 'backend\modules\v1\controllers\userActions\ChangePasswordAction',
            'modelClass' => $this->modelClass
        ];
        $actions['getuser'] = [
            'class' => 'backend\modules\v1\controllers\userActions\GetuserAction',
            'modelClass' => $this->modelClass
        ];

        return $actions;
    }
}
