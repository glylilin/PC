<?php
namespace Course\Widget;
use Think\Controller;
class CommentWidget extends Controller{
    public function item($data){
        layout(false);
        $this->assign('data',$data);
        return $this->fetch("Widget::item");
    }
    /**
     * 获取相关推荐
     * @param unknown $cid
     */
    public function right($cid){
        layout(false);
        $course_service = D("Course","Service");
        $curseInfo = $course_service->getCourseExistByidService($cid);
        $rightUserData = array();
        $remmendData = array();
        if($curseInfo){
            if($curseInfo['user_id']){
                $user_service = D("User","Service");
                $rightUserData =  $user_service->getUserInfoService($curseInfo['user_id']);
            }
            $remmendData = $course_service->getRemmendCourseListService($curseInfo['type'],$cid);
        }
       
       $this->assign('userData',$rightUserData);
       $this->assign('remmendData',$remmendData);
        return $this->fetch("Widget::right");
    }

}