<?php
namespace Course\Logic;
use Think\Model;
class AttachLogic extends Model{
    protected  $cdn = "http://static.puamap.com/upload";
    protected  $thumbnail ="thumbnail";
    
    public function getCdnImageByIdsLogic($ids){
        $attach_model = D("Attach");
        $image_data = $attach_model->getImagesByIds($ids);
        $result = array();
        if($image_data){
            foreach ($image_data as $k=>$v){
                $result[$v['id']]['path'] = $this->cdn.$v['path'];
                $end = strrchr($v['path'],'.');
                $begin = str_replace($end, "", $v['path']);
                $result[$v['id']]['thumbpath'] = $this->cdn.$begin.".".$this->thumbnail.$end;
            }
        }
        return $result;
    }
    /**
     * 获取图片地址
     * @param unknown $id
     */
    public function getCdmImagesByidLogic($id){
    	$attach_model = D("Attach");
    	$data = $attach_model->getCdmImagesByid($id);
    	if($data){
    		$data['path'] = $this->cdn.$data['path'];
    		$end = strrchr($data['path'],'.');
    		$begin = str_replace($end, "", $data['path']);
    		$data['thumbpath'] =$begin.".".$this->thumbnail.$end;
    	}
    	return $data ?  : "";
    }
}