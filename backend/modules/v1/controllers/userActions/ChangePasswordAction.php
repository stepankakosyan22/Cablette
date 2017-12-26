<?php

namespace backend\modules\v1\controllers\userActions;


use backend\modules\v1\models\User;
use yii\rest\Action;
use yii\web\Response;

class ChangePasswordAction extends Action
{
    public function run()
    {
        $post = \Yii::$app->request->post();
        if (isset($post) && !empty($post) && isset($post['old_password']) && isset($post['new_password'])) {
            $old_password = $post['old_password'];
            $new_password = $post['new_password'];
            $auth_key = \Yii::$app->user->identity->getAuthKey();
            $current_user = User::findIdentityByAccessToken($auth_key);
            if (\Yii::$app->security->validatePassword($old_password, $current_user['password_hash'])) {
                $current_user->password_hash = \Yii::$app->security->generatePasswordHash($new_password);
                $current_user->update();
                return true;
            }else{
                return ['errors' => "Something goes wrong"];
        }
        }
    }
}