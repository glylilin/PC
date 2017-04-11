<?php
namespace Course\Service;
use Think\Model;
use Course\Utils\AppUrl;
use Course\Utils\HttpClient;
class UserService extends Model{
    public function loginService($data){
       $user_logic =  D('User',"Logic");
       $result['status'] = false;
       if($user_logic->token(false)->create($data)){
           $url = AppUrl::getSignUrl();
           $params = array(
               'name'=>$data['mobile'],
               'password'=>$data['password']
           );
           //$result = HttpClient::HttpPost($url, $params);
           $result['isSuccessful'] = true;
           if($result['isSuccessful']){
               $user_logic->loginLogic($data);
               $result['status'] = true;
           }else{
               $result['message'] = $result['data']['message'];
           }
       }else{
           $result['message'] = $user_logic->getError();
       }
       return $result;
    }
    
    public function getUserInfoService($uid){
        $user_Logic = D("User","Logic");
        return $user_Logic->getUserInfoLogic($uid);
    }
    
}