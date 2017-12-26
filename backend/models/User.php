<?php
namespace app\models;
use \yii\db\ActiveRecord;

class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }
    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'username','auth_key','password_hash','password_reset_token','email','status','created_at','updated_at'], 'string']
        ];
    }
}