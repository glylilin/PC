<?php
namespace Course\Logic;
use Think\Model;
class UserLogic extends Model{
    protected $_validate =array(
        array('mobile','require','{%REQUIRED}'),
        array('mobile','/1[3|4|5|7|8]\d{9}/','{%FORMAT_ERROR}'),
        array('password','require','{%REQUIRED}'),
        array('password',"6,20",'{%RANGE_PASSWORD}',0,'length'),
    );
    
    public function loginLogic($data){
        $user_model = D("User");
        session('userinfo',null);
        if($cdata = $user_model->login($data['mobile'])){
        	$attach_logic = D('Attach','Logic');
        	$path_data = $attach_logic->getCdmImagesByidLogic($cdata['id']);
        	$cdata['path'] = $path_data['path'];
        	$cdata['thumbpath'] = $path_data['thumbpath'];
        	session('userinfo',$cdata);
        }
    }
    
    public function userCheckeExistLogic($id){
    	$user_model = D("User");
    	if($user_model->getUserInfoById($id)){
    		return true;
    	}
    	return false;
    }
    /**
     * 获取用户信息
     */
    public function getUserInfoLogic($id){
        $user_model = D("User");
        $data = $user_model->getUserInfoById($id);
        if($data){
           $attach_logic =  D('Attach',"Logic");
           $cache = $attach_logic->getCdmImagesByidLogic($data['avatar_id']);
           $data['path'] = $cache['path'];
           $data['thumbpath'] = $cache['thumbpath'];
        }
        return $data;
    }
}