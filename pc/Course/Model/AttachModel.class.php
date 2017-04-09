<?php
namespace Course\Model;
class AttachModel extends BaseModel{
    protected $fields =array('path','id');
    /**
     * 根据ids获取图片
     * @param unknown $ids
     */
    public function getImagesByIds($ids){
    	$result = array();
        if($ids){
        	$condition = $this->extWhere;
           	$condition  .=" and id in (".$ids.")";
           	$result =  $this->where($condition)->select();
        }
        return $result;
    }
    /**
     * 获取图片地址
     */
    public function getCdmImagesByid($id){
    	$condition = $this->extWhere;
    	$condition .=" and id=".$id;
    	return $this->where($condition)->find();
    }
}
?>