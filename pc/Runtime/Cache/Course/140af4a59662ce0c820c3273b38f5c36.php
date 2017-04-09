<?php if (!defined('THINK_PATH')) exit();?>
<div class="comment_list_one">
	<div class="user_portrait">
		<img src="<?php echo ($data["thumbpath"]); ?>" alt="">
	</div>
	<div class="user_comment">
		<p class="user_comment_name">
			<?php echo ($data["nickname"]); ?><span><?php echo (formatAddTime($data["add_time"])); ?></span>
		</p>
		<p class="user_comment_con"><?php echo ($data["content"]); ?></p>
		<p class="user_comment_icon" comment_id="<?php echo ($data["id"]); ?>" comment_uid="<?php echo ($data["uid"]); ?>">
			<span class="zan"><img src="/Public/static/common/images/hand.png">(<?php echo ($data["commlike"]); ?>)</span>
			<span class="hui"><img src="/Public/static/common/images/back.png">回复(<?php echo ($data["number"]); ?>)</span>
		</p>
		<div  class="user_comment_form">
			<textarea placeholder="回复：<?php echo ($data["nickname"]); ?>"></textarea>
			<span><button>回复</button></span>
		</div>
	</div>
</div>