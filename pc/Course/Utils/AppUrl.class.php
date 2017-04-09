<?php
namespace Course\Utils;
class AppUrl{
    //登陸接口
    public static function getSignUrl(){
        return C('APP_HOST')."auth/signin";
    }
}