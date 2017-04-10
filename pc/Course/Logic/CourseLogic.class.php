<?php
namespace Course\Logic;
use Think\Model;
class CourseLogic extends Model{
   public $split_type = array();
    public function __construct(){
        $this->CourseLogic();
    }
    public function CourseLogic(){
        parent::__construct();
        $this->split_type = array(
         array(
         'type'=>1,
         'name'=>L('LOVE_CHEATS'),
         'brief'=>L("LOVE_CHEATS_BIREF"),
         ),
         array(
         'type'=>4,
         'name'=>L("PRIVATE_EDUCATION"),
         'brief'=>L("PRIVATE_EDUCATION_BIREF"),
         ),
         array(
         'type'=>5,
         'name'=>L("SNIPER"),
         'brief'=>L("SNIPER_BIREF"),
         ),
         array(
         'type'=>3,
         'name'=>L("BOARDING"),
         'brief'=>L("BOARDING_BIREF"),
         ),
         array(
         'type'=>6,
         'name'=>L("ACTUAL_COMBAT"),
         'brief'=>L("ACTUAL_COMBAT_BIREF"),
         'video'=>0,
         ),
         array(
         'type'=>2,
         'name'=>L("EXCELLENT_COURSE"),
         'brief'=>L("EXCELLENT_COURSE_BRIEF"),
         'video'=>1,
         ),
        ); 
    }
   /**
    * 格式化分类数据
    */
    public function formatCourseTreeLogic(){
       $course_model =  D("course");
       $tree_data = $course_model->getCourseParentTotal();
       $tree_data = $this->formatCourseImageLogic($tree_data);
   
       $res =array();
       if($tree_data){
           foreach ($this->split_type as $k=>$v){
               $res[$k] = $v;
                foreach ($tree_data as $value){
                	if($v['type'] == $value['type']){
                		$res[$k]['child'][] = $value;
                	} 
                }
           } 
       }
    return $res;
    }
    /**
     * 获取顶级父类
     */
    public function formatCourseParentLogic(){
    	return $this->formatCourseTreeLogic();
    }
    
    /*
     * 加载图片后的结果
     */
    public function formatCourseImageLogic($tree_data){
        $attach_logic = D('Attach','Logic');
        $images = $attach_logic->getCdnImageByIdsLogic($this->formatCourseImageIdsLogic($tree_data));
        if($tree_data){
            foreach ($tree_data as $k=>$v){
                $tree_data[$k]['path'] = $images[$v['image_id']]['path'];
                $tree_data[$k]['thumbpath'] = $images[$v['image_id']]['thumbpath'];
            }
        }
        return $tree_data;
    }
    //获取推荐课程
    public function getTopCourseLogic(){
       $course_model =  D("course");
    	$cache_data = $course_model->getCourseTop();
        $cache_data = $this->formatCourseImageLogic($cache_data);
       return $cache_data;
    }
    /**
     * banner
     */
    public  function getRecommendCourseLogic(){
    	$course_model =  D("course");
    	$cache_data = $course_model->getCourseRecommend();
        $cache_data = $this->formatCourseImageLogic($cache_data);
        return $cache_data;
    }
    
    public function formatCourseImageIdsLogic($data) {
        $tree_data = $data;
        $img_ids = array();
        if($tree_data){
            foreach ($tree_data as $v){
                if($v['image_id']){
                    $img_ids[] = $v['image_id'];
                }
            }
        }
        return $img_ids ? implode(",", $img_ids) : "";
    }
    /**
     * 通过id判断分类是否存在
     * @param unknown $id
     */    
    public function checkTypeExisitLogic($id){
        
        foreach ($this->split_type as $v){
            if($id == $v['type']){
                return true;
            }
        }
        return false;
    }
    /**
     * 获取分类下的课程
     * @param unknown $id
     */
    public function getCourseByTypeidLogic($id){
    	$result['error'] = false;
    	if($this->checkTypeExisitLogic($id)){
    		foreach ($this->split_type as $v){
    			if($id == $v['type']){
    				$result['info'] = $v;
    				break;
    			}
    		}
    		$course_model = D("course");
    		$result['data'] = $this->formatCourseImageLogic($course_model->getCourseListByType($id));
    	}else{
    		$result['error'] = true;
    		$result['message'] = L("TYPE_DOES_NOT_EXIST");
    	}
    	
    	return $result;
    }
    /**
     * 通过类型和课程id获取剩和子类id;
     * @param unknown $type
     * @param unknown $id
     */
    public function getCourseChildListByTypeAndIdLogic($type,$id) {
    	 $result['error'] = false;
    	 if(!$this->checkTypeExisitLogic($type)){
    	 	$result['error'] = true;
    	 	$result['message'] = L("TYPE_DOES_NOT_EXIST");
    	 }else{
    	 	$course_model = D('Course');
    	 	$self_data = $course_model->getCourseInfoById($id);
    	 	
    	 	if($self_data){
    	 		$attach_logic = D('Attach',"Logic");
    	 		$image_cache = $attach_logic->getCdmImagesByidLogic($self_data['image_id']);
    	 		$self_data['path'] = $image_cache['path'];
    	 		$self_data['thumbpath'] = $image_cache['thumbpath'];
    	 		if($self_data['type'] == $type){
    	 			$result['self'] = $self_data;
    	 			if($self_data['type'] == 1){
    	 			    $result['child'] = $this->formatCourseImageLogic($course_model->getCourseChildInfoById($id));
    	 			}
    	 		}else{
    	 			$result['error'] = true;
    	 			$result['message'] = L("TYPE_INCONSISTENCY");
    	 		}
    	 	}else{
    	 		$result['error'] = true;
    	 		$result['message'] = L("CURRICULUM_DOES_NOT_EXIST");
    	 	}
    	 }
    	
    	 return $result;
    }
    /**
     * 判断课程是否存在
     * @param unknown $id
     */
    public function getCourseExistByidLogic($id){
    	$course_model = D("Course");
    	$data = $course_model->getCourseInfoById($id);
    	return $data;
    }
}