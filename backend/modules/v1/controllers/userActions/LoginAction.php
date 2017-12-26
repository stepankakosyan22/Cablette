<?php
namespace backend\modules\v1\controllers\userActions;


use backend\modules\v1\models\User;
use yii\rest\Action;
use yii\web\Response;

class LoginAction extends Action
{
    public function run()
    {
        $post=\Yii::$app->request->post();
        if(isset($post) && !empty($post) && isset($post['password']) && isset($post['username'])) {
            $password = $post['password'];
            $username=$post['username'];

            if($username && $password) {
                $findByUsername = User::findByUsername($post['username']);
                if ($findByUsername && \Yii::$app->security->validatePassword($password, $findByUsername['password_hash'])) {
                    $findByUsername->update();
                }else{
                    return ['errors' => "Invalid username or password"];
                }
                return ['user' => $findByUsername];
            }
        }
        return ['errors' => "Invalid User credentials"];
    }
}