<?php
namespace Course\Controller;
use Think\Controller;
use Course\Utils\AppUrl;
use Course\Utils\HttpClient;
class UserController extends Controller
{

    public function index()
    {
        $userinfo = session('userinfo');
        $user_service = D("User", "Service");
        $userinfo = $user_service->getUserInfoService($userinfo['id']);
        session('userinfo', $userinfo);
        $uploadUrl = AppUrl::getUpdateUrl() . "?access_token=" . $userinfo['access_token'];
        $this->assign('uploadUrl', $uploadUrl);
        $this->assign('userinfo', $userinfo);
        $this->display();
    }
    /**
     * 修改头像
     */
    public function updateNickName()
    {
        $res['status'] = false;
        if (IS_AJAX) {
            $nickname = I("post.nickname",'',"trim,addslashes");
            if($nickname){
               $user_model =  D("User");
               $userinfo = session("userinfo");
               $where = array(
                   'id'=>$userinfo['id']
               );
               $updateData = array(
                   'nickname' =>$nickname
               );
               if($user_model->updateUserInfo($where,$updateData)){
                   $res['status'] = true;
               }
            }
        }
        $this->ajaxReturn($res);
    }
    /**
     * 修改微信号
     */
    public function updateWechat()
    {
        $res['status'] = false;
        if (IS_AJAX) {
            $weixin = I("post.weixin",'',"trim,addslashes");
            if($weixin){
                $user_model =  D("User");
                $userinfo = session("userinfo");
                $where = array(
                    'id'=>$userinfo['id']
                );
                $updateData = array(
                    'weixin' =>$weixin
                );
                if($user_model->updateUserInfo($where,$updateData)){
                    $res['status'] = true;
                }
            }
        }
        $this->ajaxReturn($res);
    }
    /**
     * 修改密碼
     */
    public function updatePassword(){
        $res['status'] = false;
        if (IS_AJAX) {
            $password = I("post.password",'',"trim,addslashes");
            $userinfo = session('userinfo');
            if($password && $userinfo && strlen($password) >=6){
               $url =  AppUrl::updatePassword();
               $params = array(
                   'access_token'=>$userinfo['access_token'],
                   'password' =>$password
               );
              $result =  HttpClient::HttpGet($url,$params);
              if($result['status']){
                  $res['status'] = true;
              }
            }
        }
        $this->ajaxReturn($res);
    }
    
    public function MyCourse(){
        $userinfo = session("userinfo");
        $data = array();
        if($userinfo){
           $order_service =  D("Order","Service");
           $data = $order_service->getOrderListByUserIdService($userinfo['id']);
        }
       
        $this->assign("orderData",$data);
        $this->display('mycourse');
    }
}