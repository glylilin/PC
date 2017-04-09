<?php
namespace Course\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      
       $course_service =  D("Course","Service");
       $data = $course_service->getCourseListService();
       $banner = $course_service->getTopCourseService();
       $remmend = $course_service->getRecommendCourseService();     
       $this->assign('data',$data);
       $this->assign('remmend',$remmend);
       $this->assign('banner',$banner);
       $this->display();
    }
    /**
     * 获取课程列表
     */
    public function entry(){
       $type = I("param.type","0","trim,intval");
       $id = I("param.id","0","trim,intval");
       if($id){
       		$this->colnum($type,$id);
       }else{
	       	$course_service =  D("Course","Service");
	       	$data=  $course_service->getCourseByTypeidService($type);
	       	$this->assign('data',$data);
	       	$this->display();
       }
       
    }
    /**
     * 视频详情页面
     */
    public function colnum($type,$id){
    	$course_service =  D("Course","Service");
    	$result = $course_service->getCourseChildListByTypeAndIdService($type,$id);
    	switch ($type){
    	    case "1":
    	        $tpl = 'group';
    	        break;
    	}
    	$comment_service = D("Comment",'Service');
    	$comment_list= $comment_service->getCommentByRelIdService($id);
    	
    	$this->assign('data',$result);
    	$this->assign('comments',$comment_list);
    	$this->display($tpl);
    	
    }
    
   
}