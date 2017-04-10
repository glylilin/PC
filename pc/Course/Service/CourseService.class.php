<?php
namespace Course\Service;
use Think\Model;
use Common\Common\HttpStatus;
class CourseService extends Model{
    /**
     * 获取缓存和处理后的分类
     */
    public function getCourseListService(){
        $cache_data = array();//S("course_tree_data");
        if(!$cache_data){
            $cache_data = D("Course",'Logic')->formatCourseParentLogic();
            S("course_tree_data",$cache_data);
        }
        
        return $cache_data;
    }
    /**
     * 获取置顶的课程
     */
    public function getTopCourseService(){
         $cache_data = array();//S("course_top_data");
        if(!$cache_data){
            $cache_data = D("Course",'Logic')->getTopCourseLogic();
            S("course_top_data",$cache_data);
        }
        return $cache_data;
    }
    
    /**
     * 获取置顶的课程
     */
    public function getRecommendCourseService(){
        $cache_data = array();//S("course_recommend_data");
        if(!$cache_data){
            $cache_data = D("Course",'Logic')->getRecommendCourseLogic();
            S("course_recommend_data",$cache_data);
        }
        return $cache_data;
    }
    /**
     * 通过分类获取内容
     * @param unknown $id
     */
    public function getCourseByTypeidService($id){
        $data = array();//S("course_entry_data_".$id);
        if(!$data){
        	$course_logic = D("Course",'Logic');
            $cache_data= $course_logic->getCourseByTypeidLogic($id);
            if($cache_data['error']){
            	throw new \Exception($cache_data['messag'], HttpStatus::NOT_FUND, null);
            }else{
            	$data  = $cache_data['info'];
            	$data['child']  = $cache_data['data'];
            	S("course_entry_data_".$id,$data);
            }
        }
        return $data;
    }
    /**
     * 通过类型和课程id获取剩和子类id;
     * @param unknown $type
     * @param unknown $id
     */
    public function getCourseChildListByTypeAndIdService($type,$id) {
    	$course_logic = D("Course",'Logic');
    	$result = $course_logic->getCourseChildListByTypeAndIdLogic($type,$id);
    	
    	if($result['error']){
    		throw new \Exception($result['messag'],HttpStatus::NOT_FUND,null);
    	}
    	return $result;
    }
    /**
     * 判断课程是否存在
     * @param unknown $id
     */
    public function getCourseExistByidService($id){
    	$course_logic = D("Course",'Logic');
    	$result = $course_logic->getCourseExistByidLogic($id);
    	if(!$result){
    		throw new \Exception(L("COURSE_DOES_NOT_EXIST"),HttpStatus::NOT_FUND,null);
    	}
    	return $result;
    	
    }
    
}