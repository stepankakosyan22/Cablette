<?php
namespace backend\modules\v1\controllers\userActions;


use backend\modules\v1\models\User;
use yii\rest\Action;
use yii\web\Response;

class GetuserAction extends Action
{
    public function run()
    {
        $auth_key=\Yii::$app->user->identity->getAuthKey();
        if (isset($auth_key) && !empty($auth_key)){
            $user=User::findIdentityByAccessToken(\Yii::$app->user->identity->getAuthKey());
            return ['user' => $user];
        }
        return ['errors'=>"Invalid user credentails"];
    }
}