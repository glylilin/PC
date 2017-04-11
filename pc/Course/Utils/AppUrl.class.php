<?php
namespace Course\Utils;
class AppUrl{
    //登陸接口
    public static function getSignUrl(){
        return C('APP_HOST')."auth/signin";
    }
    /**
     * 修改头像
     * @return string
     */
    public static function getUpdateUrl(){
        return C('APP_HOST')."user/updateAvata";
    }
    /**
     * 修改密碼
     */
    public static function  updatePassword(){
        return C('APP_HOST2')."third/upassword";
    }
}