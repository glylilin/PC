<?php
namespace Course\Model;
use Think\Model\ViewModel;
class CommentModel extends ViewModel{
    protected $extWhere = "`Comment`.`display`=1 and `Comment`.`delete`=0 ";
    protected $sort= "add_time desc";
    const VIDEO_TYPE =2;
    public $viewFields = array(
        'Comment'=>array('id','user_id','type','rel_id','comment_uid','comment_id','add_time','like'=>'commlike','number','content'),
        'User' =>array('avatar_id','nickname','mobile','id'=>'uid','_on'=>"Comment.user_id = User.id") 
    );
    /**
     * 根据rel_id获取评论信息
     * @param unknown $id
     * @param number $page
     */
    public function getCommentByRelId($id,$page =1){
        $condition =$this->extWhere;
        $condition .= 'and rel_id='.$id." and Comment.type = ".self::VIDEO_TYPE;
        $limit = ($page-1)*C("PAGESIZES").",".C("PAGESIZES");
        return $this->where($condition)->order($this->sort)->limit($limit)->select();
    }
    
    /**
     * 获取评论的评论
     * @param unknown $comment_id
     * @param unknown $pagesize
     */
    public function getCommentReplayByCommentId($comment_id,$pagesize){
    	$condition =$this->extWhere;
    	$condition .= 'and comment_id='.$comment_id." and Comment.type = ".self::VIDEO_TYPE;
    	$limit = "0,".$pagesize;
    	return $this->where($condition)->order($this->sort)->limit($limit)->select();
    }
    /**
     * 根据ID号获取评论信息
     */
    public function getCommentById($id){
    	$condition =$this->extWhere;
    	$condition .= 'and Comment.id='.$id." and Comment.type = ".self::VIDEO_TYPE;
    	$data = $this->where($condition)->find();
    	return $data;
    }
    
}