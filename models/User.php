<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $id_user
 * @property string $user_name
 * @property string $password
 * @property string $name
 * @property string $email
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    public function Get_All_User() {
        return User::find()->all();

    }

    public function Get_User($id) {
        return User::findOne($id);
        // return User::find('id'->$id)->all();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'password'], 'required','message'=>'Không được bỏ trống'],
            [['user_name', 'name'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'user_name' => 'Tên tài khoản',
            'password' => 'Mật khẩu',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }

    public function Dangnhap($username,$password){
        $dong = User::find()->where(['user_name'=>$username,'password'=>$password])->count();
        if($dong ==1){
            return true;
        }else{
            return false;
        }
    }
}
