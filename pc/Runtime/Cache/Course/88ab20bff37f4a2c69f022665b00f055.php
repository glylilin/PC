<?php if (!defined('THINK_PATH')) exit();?><div class="body_right">
		<div class="whiteBg fullWidth2">
		<?php if($userData): ?><dl class="vcourse_daoshi">
				<dt>课程主讲导师</dt>
				<dd>
					<div class="name">
						<span><img src="<?php echo ($userData["thumbpath"]); ?>" alt=""></span>
						<p>
						<label>
						<?php if($userData['nickname']): echo ($userData["nickname"]); ?>
						<?php else: ?>
						<?php echo (formatPhone($userData["mobile"])); endif; ?>
						</label>实名认证导师</p>
					</div>
					<div class="con">《简爱》创始人，《大尧秀》主持人，《话术红宝书》联合作者，澳洲海归，前职业魔术师，思维天马行空的顶级话术艺术家</div>
				</dd>
			</dl><?php endif; ?>
			<?php if($remmendData): ?><dl class="vcourse_right_like">
				<dt>你可能感兴趣的课程</dt>
				<dd>
					<ul class="vcourse_list1 fullWidth2">
					<?php if(is_array($remmendData)): foreach($remmendData as $key=>$id): ?><li class="li2">
							<div class="box">
							<?php if($id['type'] == 2): ?><div class="pic">
									<a href="/vcourse/view/<?php echo ($id["id"]); ?>" title="<?php echo ($id["title"]); ?>">
										<img originalsrc="<?php echo ($id["thumbpath"]); ?>" alt="" class="lazy">
										<p><span></span><label><?php echo ($id["number"]); ?>人已学</label></p>
									</a>
								</div>
							<?php else: ?>
								<div class="pic">
									<a href="/vcourse/entry/<?php echo ($id["type"]); ?>/<?php echo ($id["id"]); ?>" title="<?php echo ($id["title"]); ?>">
										<img originalsrc="<?php echo ($id["thumbpath"]); ?>" alt="" class="lazy">
										<p><span></span><label><?php echo ($id["number"]); ?>人已学</label></p>
									</a>
								</div><?php endif; ?>
								<p class="tt"><span><?php echo ($id["title"]); ?></span><label>课时<?php echo ($lesson); ?>节</label></p>
								<p class="price">￥<b><?php echo ($id["price"]); ?></b>/VIP2:￥<?php echo ($id["vip_price"]); ?></p>
							</div>
						</li><?php endforeach; endif; ?>
				
					</ul>
				</dd>
			</dl><?php endif; ?>
		</div>
		<dl class="app_download fullWidth2">
			<dt><b>浪迹教育APP</b>从屌丝蜕变男神神器</dt>
			<dd>
				<span><img src="/Public/static/common/images/app_download.jpg"></span>
				<p><img src="/Public/static/common/images/app_logo.png">扫码下载</p>
				<label><img src="/Public/static/common/images/icon1.png"></label>
			</dd>
		</dl>
</div>