<?php
namespace Course\Model;
class CourseModel extends BaseModel{
	/* public $viewFields = array(
			'Course'=>array('id','type','title','user_id','course_id','image_id','time','price','vip_price','number','lesson','content','summary'),
			'User'=>array("nickname", '_on'=>'User.id=Course.user_id'),
	); */
    protected  $fields = array('id','type','title','user_id','course_id','image_id','time','price','vip_price','number','lesson','content','like','summary','comment');
    protected $sort = "`sort` = 0, `sort` ASC, `id` ASC";
    //获取所有的视频
    public function getCourseParentTotal(){
	    $where = $this->extWhere;
	    $where .= " and type!=0";
	    $data = $this->field($this->fields)->where($where)->order($this->sort)->select();
	    return $data;
    }
    /**
     * 推荐
     */
    public function getCourseRecommend(){
    	$where = $this->extWhere;
    	$where .= " and type!=0 and recommend =1";
    	$data = $this->field($this->fields)->where($where)->order($this->sort)->select();
    	return $data;
    }
    /**
     * 置顶
     */
    public function getCourseTop(){
    	$where = $this->extWhere;
    	$where .= " and top =1 ";
   
    	$data = $this->field($this->fields)->where($where)->order($this->sort)->select();
    	return $data;
    }
    
    /**
     * 通过id获取课程自身信息
     * @param unknown $id
     */
    public function getCourseInfoById($id){
    	$where = $this->extWhere;
    	$where .= " and id = ".$id;
    	return $this->field($this->fields)->where($where)->find();
    }
    /**
     * 获取课的子课程信息
     * @param unknown $id
     */
    public function getCourseChildInfoById($id){
    	$where = $this->extWhere;
    	$where .=" and course_id = ".$id;
    	$data = $this->field($this->fields)->where($where)->order($this->sort)->select();
    	return $data;
    }
    /**
     * 获取分类数据
     * @param unknown $type
     */
    public function getCourseListByType($type){
    	$where = $this->extWhere;
    	$where .=" and type =".$type;
    	$data = $this->where($where)->order($this->sort)->select();
    	return $data;
    }
    
    /**
     * 获取相关推荐规则为该视频的类别但不包含本身
     * @param unknown $typeid
     * @param unknown $cid
     */
    public function getRemmendCourseList($typeid,$cid){
       $where = $this->extWhere;
       $where .=" and type=".$typeid." and id !=".$cid;
       return $this->field($this->fields)->where($where)->limit(3)->select();
    }
}