<?php
namespace Course\Logic;
use Think\Model;
class CourseVideoLogic extends Model{
	/**
	 * 获取课程下面的视频
	 * @param unknown $course_id
	 */
	public function getVideoListByCourseIdLogic($course_id){
		$course_video_model = D("CourseVideo");
		$data = $course_video_model->getVideoListByCourseId($course_id);
		return $data;
	}
}