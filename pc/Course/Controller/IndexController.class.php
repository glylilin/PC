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
    	$comment_service = D("Comment",'Service');
    	$comment_list= $comment_service->getCommentByRelIdService($id);
    	$this->assign('data',$result);
    	$this->assign('comments',$comment_list);
    	$this->display("group");
    	
    }
    /**
     * 视频播放详情
     */
    public function view(){
    	$cid = I("get.cid",0,'intval');
    	$vid =  I("get.vid",0,'intval');
    	$course_service = D("Course","Service");
    	$course_video_service = D("CourseVideo","Service");
    	$comment_service = D("Comment",'Service');
    	$course_info = $course_service->getCourseExistByidService($cid);
    	$video_list_info = $course_video_service->getVideoListByCourseIdService($cid);
    	$current = array();//当前视频
    	if($video_list_info){
    	    if($vid){
    	        foreach ($video_list_info as $v){
    	            if($vid == $v['id']){
    	                $current = $v;
    	                break;
    	            }  
    	        }
    	    }else{
    	        $current = $video_list_info[0];
    	    }
    	}
    	$this->assign('course_info',$course_info);
    	$this->assign('video_list_info',$video_list_info);
    	$comment_list= $comment_service->getCommentByRelIdService($cid);
    	$this->assign('comments',$comment_list);
    	$this->assign('currentData',$current);
    	$this->display();
    }
    
   
}