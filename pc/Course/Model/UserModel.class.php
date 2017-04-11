<?php
namespace Course\Model;
class UserModel extends BaseModel{
	
	public function login($mobile){
		$condition = $this->extWhere;
		$condition .=" and mobile = '".$mobile."'";
		return $this->where($condition)->find();
	}
	/**
	 * 根据id获取用户信息
	 * @param unknown $id
	 */
	public function getUserInfoById($id){
		$condition = $this->extWhere;
		$condition .=" and id = '".$id."'";
		return $this->where($condition)->find();
	}
	/**
	 * 更新信息
	 * @param unknown $where
	 * @param unknown $updateData
	 */
	public function updateUserInfo($where,$updateData){
	    return $this->where($where)->save($updateData);
	}
}