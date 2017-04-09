<?php
namespace Course\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        if(IS_AJAX){
            $data  = I('param.login');
            $user_service = D("User","Service");
            $res = $user_service->loginService($data);
        }else{
            $res['status'] = false;
            $res['message'] = L("ILLEGAL_OPERATION");
        }
        $this->ajaxReturn($res);
    }
}