<?php
namespace Course\Service;
use Think\Model;
class CourseVideoService extends Model{
	/**
	 * 获取课程下面的视频
	 * @param unknown $course_id
	 */
	public function getVideoListByCourseIdService($course_id){
		$course_video_service = D("CourseVideo","Logic");
		return $course_video_service->getVideoListByCourseIdLogic($course_id);
	}
}