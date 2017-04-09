<?php
namespace Course\Service;
use Think\Model;
class CommentService extends Model{
	//查找内容
    public function getCommentByRelIdService($id,$page=1)
    {
        $comment_service = D('Comment',"Logic");
        $data = $comment_service->getCommentByRelIdLogic($id,$page);
        $result['status'] = false;
        if($data){
            $result['status'] = true;
            $result['data'] = $data;
        }
        return  $result;
    }
    /*
     * 添加内容
     */
   public function addService($data){
   		$comment_logic = D("Comment","Logic");
   		$res = $comment_logic->addLogic($data);
   		if($res['status']){
   			$res['data'] = $this->getCommentByIdService($res['id']);
   		}
   		return $res;
   }
   /**
    * 根据id获取评论信息
    * @param unknown $id
    */
   public function getCommentByIdService($id){
   		$comment_service = D('Comment',"Logic");
   		return $comment_service->getCommentByIdLogic($id);
   }
   /**
    * 增加评论的回复
    * @param unknown $data
    */
   public function addReplayService($data){
   		$comment_service = D('Comment',"Logic");
   		$res = $comment_service->addReplayLogic($data);
   		if($res['status']){
   			$res['data'] = $this->getCommentByIdService($res['id']);
   		}
   		return $res;
   }
   /**
    * 获取评论的评论通过comment_id
    * @param unknown $id
    */
   public function getCommentReplayByCommentIdService($comment_id){
   		$pagesize = C("COMMENT_REPLAY_PAGE_SIZE");
   		$comment_logic = D('Comment','Logic');
   		$data =	$comment_logic->getCommentReplayByCommentIdLogic($comment_id,$pagesize);
   		$result['status'] = false;
   		if($data){
   			$result['status'] = true;
   			$result['data'] = $data;
   		}
   		return  $result;
   }
}