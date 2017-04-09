<?php
namespace Course\Logic;
use Think\Model;
use Course\Model\Comment;
class CommentLogic extends Model{
	protected $_validate_add_comment = array(
		array('content','require','{%REQUIRED}'),
		array('id','require','{%REQUIRED}'),
		array('id','/\d+/',"{%MUST_NUMBER}"),
		array('id','checkExisit',"{%COURSE_DOES_NOT_EXIST}",1,'function'),
		//array('user_id','userCheckeExist',"{%USER_DOES_NOT_EXIST}")
	);
	
	protected  $_validate_replay_comment =array(
		array('content','require','{%REQUIRED}'),
		array('comment_id','require','{%REQUIRED}'),
		array('comment_id','/\d+/',"{%MUST_NUMBER}"),
		array('comment_uid','require','{%REQUIRED}'),
		array('comment_uid','/\d+/',"{%MUST_NUMBER}"),
		array('comment_id','checkCommentExisit',"{%COMMENT_DOES_NOT_EXIST}",1,'function'),
	);
	protected $_auto =array(
		array('type',2),
		array('add_time','time',1,'function')//添加的时候完成
	);
	
	public function checkExisit($value){
		$course_logic = D('Course',"Logic");
		return $course_logic->getCourseExistByidLogic($value);
	}
	public function userCheckeExist($value){
		$user_logic = D('User','Logic');
		return $user_logic->userCheckeExistLogic($value);
	}
	
	public function checkCommentExisit($value){
		$comment_model =D('Comment');
		return $comment_model->getCommentById($value);
	}
    public function getCommentByRelIdLogic($id,$page=1){
        $comment_model =D('Comment');
        $data = $comment_model->getCommentByRelId($id,$page);
        if($data){
            $attach_logic = D("Attach",'Logic');
            foreach ($data as $k=>$v){
                $temp = $attach_logic->getCdmImagesByidLogic($v['avatar_id']);
                $data[$k]['path'] = $temp['path'];
                $data[$k]['thumbpath'] = $temp['thumbpath'];
            }
        }
        return $data;
    }
    /**
     * 获取评论的评论
     */
    public function getCommentReplayByCommentIdLogic($comment_id,$pagesize){
    	$comment_model =D('Comment');
    	$data = $comment_model->getCommentReplayByCommentId($comment_id,$pagesize);
    	if($data){
    		$attach_logic = D("Attach",'Logic');
    		foreach ($data as $k=>$v){
    			$temp = $attach_logic->getCdmImagesByidLogic($v['avatar_id']);
    			$data[$k]['path'] = $temp['path'];
    			$data[$k]['thumbpath'] = $temp['thumbpath'];
    		}
    	}
    	return $data;
    }
    
    /**
     * 添加课程评论
     * @param unknown $data
     */
    public function addLogic($data){
    	$res['status'] = false;
    	if($this->token(false)->validate($this->_validate_add_comment)->create($data)){
    		
    		 if($id = $this->add()){
    			$res['status'] = true;
    			$res['id'] = $id;
    			D("Course","Logic")->where(array('id'=>$data['rel_id']))->setInc('comment');
    		}else{
    			$res['message']=L("OPERATION_ERROR");
    			
    		} 
    	}else{
    		$res['message'] = $this->getError();
    	}
    	return $res;
    }
    /**
     * 根据id获取信息
     * @param unknown $id
     */
    public function getCommentByIdLogic($id){
    	$comment_model =D('Comment');
    	$data = $comment_model->getCommentById($id);
    	if($data){
    		$attach_logic = D("Attach",'Logic');
    		$temp = $attach_logic->getCdmImagesByidLogic($data['avatar_id']);
    		$data['path'] = $temp['path'];
    		$data['thumbpath'] = $temp['thumbpath'];
    	}
    	return $data;
    }
    /**
     * 给评论增加点赞数
     * @param unknown $id
     */
    public function addCommentLikeByIdLogic($id){
    	$cache = $this->where(array('id'=>$id))->find();
    	if($this->where(array('id'=>$id))->save(array('like'=>$cache['like']+1))){
    		return true;
    	}
    	return  false;
    }
    
    public function addReplayLogic($data){
    	$res['status'] = false;
    	if($this->token(false)->validate($this->_validate_replay_comment)->create($data)){
    		if($id = $this->add()){
    			$res['status'] = true;
    			$res['id'] = $id;
    			$this->where(array('id'=>$data['comment_id']))->setInc('number');
    		}else{
    			$res['message']=L("OPERATION_ERROR");
    		}
    	}else{
    		$res['message'] = $this->getError();
    	}
    	return $res;
    }
}