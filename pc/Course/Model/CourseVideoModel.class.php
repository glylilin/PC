<?php
namespace Course\Model;
class CourseVideoModel extends BaseModel{
	protected $sort="id ASC,sort ASC";
	protected $fields = "id,course_id,title,thumb_id,image_id,video_id,video_time,add_time";
	/**
	 * 获取课程下面的视频
	 * @param unknown $course_id
	 */
	public function getVideoListByCourseId($course_id){
		$condition= $this->extWhere;
		$condition.=" and course_id = ".$course_id;
		return $this->field($this->fields)->where($condition)->order($this->sort)->select();
	}
}