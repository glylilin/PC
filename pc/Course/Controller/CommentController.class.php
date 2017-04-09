<?php
namespace Course\Controller;
use Think\Controller;
class CommentController extends Controller{
	public function _initialize(){
		//暂时性处理
		if(!session('?userinfo') && !session('userinfo')){
			$result = array('status'=>false,'message'=>'nologin');
			$this->ajaxReturn($result);
		}
	}
	/**
	 * 添加
	 * @param unknown $param
	 */
	public function add() {
		$res['status'] = false;
		if(IS_AJAX){
			$content = I('param.content','',"trim,addslashes");
			$userinfo = session('userinfo');
			$rel_id = I("param.rel_id",0,'intval');
			$data = array(
				'content'=>$content,'rel_id'=>$rel_id,'user_id'=>$userinfo['id']
			);
			$comment_service = D("Comment","Service");
			$res = $comment_service->addService($data);
			if($res['status']){
				$res['data'] = W('Comment/item',array($res['data']));
			}
		}else{
			$res['message'] = L("ILLEGAL_OPERATION");
		}
		$this->ajaxReturn($res);
	}
	/**
	 * 点赞
	 */
	public function like(){
		$res['status'] =false;
		if(IS_AJAX){
			$comment_id = I("post.comment_id",0,'trim,intval');
			$comment_logic = D("Comment",'Logic');
			if($comment_logic->addCommentLikeByIdLogic($comment_id)){
				$res['status'] = true;
			}
		}
		$this->ajaxReturn($res);
	}
	/**
	 * 为评论增加回答
	 */
	public function addReplay(){
		$res['status'] = false;
		if(IS_AJAX){
			$content = I('post.content','',"trim,addslashes");
			$userinfo = I("session.userinfo",array());
			$comment_id = I("post.comment_id",0,'intval');
			$comment_uid = I("post.comment_uid",0,'intval');
			$data = array(
				'content'=>$content,
				'comment_id'=>$comment_id,
				'comment_uid'=>$comment_uid,
				'user_id'=>$userinfo['id']
			);
			$comment_service = D("Comment","Service");
			$res = $comment_service->addReplayService($data);
			if($res['status']){
				$res['data'] = W('Comment/item',array($res['data']));
			}
		}else{
			$res['message'] = L("ILLEGAL_OPERATION");
		}
		$this->ajaxReturn($res);
	}
	/**
	 * 获取评论下的评论
	 */
	public function replayList(){
		$res['status'] = false;
		if(IS_AJAX){
			$comment_id = I("post.comment_id",0,'intval');
			$comment_service = D("Comment","Service");
			$res = $comment_service->getCommentReplayByCommentIdService($comment_id);
			if($res['status']){
				$html ="";
				foreach ($res['data'] as $v){
					$html .= W('Comment/item',array($v));
				}
				$res['data'] = $html;
			}
		}else{
			$res['message'] = L("ILLEGAL_OPERATION");
		}
		$this->ajaxReturn($res);
	}
}