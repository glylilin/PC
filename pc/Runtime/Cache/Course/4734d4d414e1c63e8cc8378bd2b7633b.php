<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
<meta name="applicable-device" content="pc,mobile">
<title>浪迹教育VIP课程</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link type="text/css" rel="stylesheet" href="/Public/static/course/css/public.css"/>
<script type="text/javascript" src="/Public/static/common/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/static/common/js/lyz.delayLoading.min.js"></script>
<script type="text/javascript" src="/Public/static/common/js/public.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/static/course/css/main.css"/>
<script type="text/javascript" src="/Public/static/course/js/main.js"></script>
</head>
<body>
<div class="shadow"></div>
<dl class="entrance_box">
	<dt><p><span class="denglu">账号登陆</span>|<span class="zhuce">注册</span></p><a class="close"><img src="/Public/static/common/images/close.png"></a></dt>
	<dd class="entrance">
		
			<div class="bor"><img src="/Public/static/common/images/land_icon1.png"><span><input type="text" name="login[mobile]" class="require" md="mobile" placeholder="手机号"></span><p class="error"></p></div>
			<div class="bor"><img src="/Public/static/common/images/land_icon3.png"><span><input type="password" md="password" name="login[password]" class="require" placeholder="登陆密码"></span><p class="error"></p></div>
			<div class="check_box"><p><label><input type="checkbox"/>记住我</label></p><span><a href="#">忘记密码?</a></span></div>
			<button class="loginBtn">登陆</button>
	
		<div class="other">其他方式：<a href="#" target="_blank"><img src="/Public/static/common/images/weixin.png"></a><a href="#" target="_blank"><img src="/Public/static/common/images/qq.png"></a><a href="#" target="_blank"><img src="/Public/static/common/images/weibo.png"></a></div>
	</dd>
	<dd class="register">
		<form action="#">
			<div class="bor"><img src="/Public/static/common/images/land_icon1.png"><span><input type="text" placeholder="手机号"></span></div>
			<div class="bor_box">
				<div class="bor bor2"><img src="/Public/static/common/images/land_icon2.png"><span><input type="text" placeholder="验证码"></span></div>
				<div class="yanzhengma">获取验证码</div>
			</div>
			<div class="bor"><img src="/Public/static/common/images/land_icon3.png"><span><input type="password" placeholder="密码不少于6位"></span></div>
			<div class="bor"><img src="/Public/static/common/images/land_icon3.png"><span><input type="password" placeholder="确认密码"></span></div>
			<div class="bor"><img src="/Public/static/common/images/land_icon4.png"><span><input type="text" placeholder="昵称"></span></div>
			<button>注册</button>
			<div class="check_box"><p><label><input type="checkbox"/>同意</label><a href="#">《浪迹教育用户服务协议》</a></p><span><a href="#">已有账号？登录</a></span></div>
		</form>
	</dd>
</dl><dl class="header bodyauto">
	<dt>浪迹PUA实战泡妞把妹社区 - 浪迹教育</dt>
	<dd>
		<p class="user_name">你好，<a href="#"><?php echo 狂?></a>我的课程</p>
		<p><img src="/Public/static/common/images/yanzhen.png" class="img1" />验证官方微信<img src="/Public/static/common/images/xiajiantou.png"  class="img2" /></p>
		<p><a href="#">手机版</a></p>
	</dd>
</dl>
<div class="nav fullWidth">
	<div class="bodyauto">
		<div class="nav_div fullWidth">
			<p class="logo"><a href="#" target="_blank"><img src="/Public/static/common/images/logo.png" alt="PUA"/></a></p>
			<ul class="nav_list">
				<li><a href="/" title="首页" target="_blank">首页</a></li>
				<li><a href="http://huati.puamap.com/" title="话题" target="_blank">话题<img src="/Public/static/common/images/new.png" class="superscript" /></a></li>
				<li><a href="/video/" title="视频" target="_blank">视频</a></li>
				<li><a href="/vcourse" title="VIP课程" target="_blank" <?php if(vip == "vip") { ?>class="current" <?php }?>>VIP课程</a></li>
				<li><a href="/teacher/" title="导师团队" target="_blank">导师团队</a></li>
				<li><a href="/zixun/" title="资讯" target="_blank">资讯<span class="icon"><img src="/Public/static/common/images/jiao1.png"></span></a>
					<div class="hide_nav nav_zixun">
						<dl class="list1">
							<dt>资讯分类</dt>
							<dd>
								<a href="/zixun/liaotian/">聊天</a>
								<a href="/zixun/yuehui/">约会</a>
								<a href="/zixun/wanhui/">挽回</a>
								<a href="/zixun/dashan/">搭讪</a>
								<a href="/zixun/lilun/">理论</a>
								<a href="/zixun/xingxiang/">形象改造</a>
								<a href="/zixun/shizhan/">实战案例</a>
								<a href="/zixun/langji/">PUA浪迹专栏</a>
								<a href="/zixun/changqi/">长期关系</a>
								<a href="/zixun/jiaoyou/">社交软件</a>
								<a href="/zixun/zhanshi/">展示面</a>
								<a href="/zixun/bameidaren/">把妹达人</a>
								<a href="/zixun/zhuinvsheng/">追女生</a>
								<a href="/zixun/biaobai/">表白</a>
								<a href="/zixun/qita/">其他</a>
							</dd>
						</dl>
						<dl class="list2">
							<dt>本期推荐资讯</dt>
							<dd>
								<p class="p1">
									<a href="/zixun/lilun/691.html" title="女人最讨厌什么？这些话千万不要说！！！">
										<span><img src="/zixun/uploads/allimg/170309/2-1F3091A5144Q.png" alt="女人最讨厌什么？这些话千万不要说！！！"></span>
										<label>女人最讨厌什么？这些话千万不要说！！！</label>
									</a>
								</p>
								<p class="p2">
									<a href="/zixun/yuehui/689.html" title="第一次见面去哪里约会？你知道吗？"><b></b>第一次见面去哪里约会？你知道吗？</a>
									<a href="/zixun/qita/687.html" title="扒一扒光环下电视剧男主渣的一面"><b></b>扒一扒光环下电视剧男主渣的一面</a>
									<a href="/zixun/lilun/688.html" title="你真以为女生喜欢有钱的男生么？"><b></b>你真以为女生喜欢有钱的男生么？</a>
									<a href="/zixun/biaobai/685.html" title="喜欢一个女生不敢表白"><b></b>喜欢一个女生不敢表白</a>
									<a href="/zixun/lilun/686.html" title="正确的恋爱方式和方法"><b></b>正确的恋爱方式和方法</a>
									<a href="/zixun/qita/684.html" title="这些令人面红耳赤的两性职业，你投过简历没？"><b></b>这些令人面红耳赤的两性职业，你投过简历没？</a>
								</p>
							</dd>
						</dl>
					</div>
				</li>
				<li><a href="/baike/" title="浪迹百科" target="_blank">浪迹百科</a></li>
				<li><a href="/app.htm" title="APP下载" target="_blank">APP下载<img src="/Public/static/common/images/bamei.png"
				class="superscript"/></a></li>
			</ul>
			<form action="#">
				<input type="text" placeholder="浪迹一分钟" /><button></button>
			</form>
		</div>
	</div>
</div>
<dl class="vcourse_pay_box">
	<dt><p>购买课程</p><a class="close"><img src="/Public/static/common/images/close.png"></a></dt>
	<dd>
		<div class="pic">
			<p class="left"><img src="<?php echo ($data["self"]["path"]); ?>" alt=""/></p>
			<p class="right">
				<span class="tt">恋爱魔方</span>
				<span class="time">课时：<?php echo ($data["self"]["time"]); ?></span>
				<span class="price">￥<b>1999</b></span>
			</p>
		</div>
		<div class="btn">
			<form action="pay.php">
				<p class="left"><label><input type="checkbox" name="">同意</label><a href="#">《浪迹教育用户服务协议》</a></p>
				<P class="right"><span class="cancel">取消</span><button>去支付</button></p>
			</form>
		</div>
	</dd>
</dl>
<div class="bodyauto">
	<dl class="vcourse_intro fullWidth">
		<dt><img src="<?php echo ($data["self"]["path"]); ?>"></dt>
		<dd>
			<div class="tt"><h2><?php echo ($data["self"]["title"]); ?></h2><span><?php echo ($data["self"]["time"]); ?></span></div>
			<div class="people"><span><img src="/Public/static/course/images/zan1.png"><?php echo ($data["self"]["like"]); ?></span><span><img src="/Public/static/course/images/people.png"><?php echo ($data["self"]["number"]); ?></span></div>
			<div class="intro">
				<span>本课程适合人群：</span><p><?php echo ($data["self"]["summary"]); ?></p>
			</div>
			<div class="price">￥<span><?php echo ($data["self"]["price"]); ?></span></div>
			<div class="buy"><a class="btn">购买课程</a><a href="#" target="_blank">咨询</a></div>
			<div class="share">
				<span>分享到：</span>
				<div class="bdsharebuttonbox">
				<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
				<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
				<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
				<a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a>
				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};
				with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
		</dd>
	</dl>

	<div class="body_right">
		<div class="whiteBg fullWidth2">
			<!-- <dl class="vcourse_daoshi">
				<dt>课程主讲导师</dt>
				<dd>
					<div class="name">
						<span><img src="/Public/static/course/images/mentor1.jpg" alt=""></span>
						<p><label>大尧 Mr. Yao</label>实名认证导师</p>
					</div>
					<div class="con">《简爱》创始人，《大尧秀》主持人，《话术红宝书》联合作者，澳洲海归，前职业魔术师，思维天马行空的顶级话术艺术家</div>
				</dd>
			</dl> -->

			<dl class="vcourse_right_like">
				<dt>你可能感兴趣的课程</dt>
				<dd>
					<ul class="vcourse_list1 fullWidth2">
						<li class="li2">
							<div class="box">
								<div class="pic">
									<a href="#" title="">
										<img originalsrc="/Public/static/course/images/001.jpg" alt="" class="lazy">
										<p><span>传奇PUA魔卡</span><label>2579人已学</label></p>
									</a>
								</div>
								<p class="tt"><span>恋爱方法</span><label>课时1节</label></p>
								<p class="price">￥<b>18000</b>/VIP2:￥17000</p>
							</div>
						</li>
						<li class="li2">
							<div class="box">
								<div class="pic">
									<a href="#" title="">
										<img originalsrc="/Public/static/course/images/001.jpg" alt="" class="lazy">
										<p><span>传奇PUA魔卡</span><label>2579人已学</label></p>
									</a>
								</div>
								<p class="tt"><span>恋爱方法</span><label>课时1节</label></p>
								<p class="price">￥<b>18000</b>/VIP2:￥17000</p>
							</div>
						</li>
					</ul>
				</dd>
			</dl>

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

	<div class="body_left whiteBg">
		<div class="vcourse_left_title"><span class="current">套餐介绍</span><span>评论</span></div>
		<div class="vcourse_tab fullWidth2">
			<div class="vcourse_con">
				<!-- <?php echo ($data["self"]["title"]); ?>：<br/> -->
				<?php echo ($data["self"]["content"]); ?>
			</div>
			
			<ul class="vcourse_list1 fullWidth2">
			<?php if(is_array($data["child"])): foreach($data["child"] as $key=>$id): ?><li class="li3">
					<div class="box">
						<div class="pic">
							<a href="#" title="">
								<img originalsrc="<?php echo ($id["thumbpath"]); ?>" alt="" class="lazy">
								<p><span></span><label><?php echo ($id["number"]); ?>人已学</label></p>
							</a>
						</div>
						<p class="tt"><span><?php echo ($id["title"]); ?></span><label>课时<?php echo ($id["lesson"]); ?>节</label></p>
					</div>
				</li><?php endforeach; endif; ?>
			</ul>

		</div>
		<div class="vcourse_tab" style="display:none;">
			<dl class="comment_form" vid="<?php echo ($data["self"]["id"]); ?>">
				<!-- <dt>网友评论</dt> -->
				<dd>
					
						<textarea placeholder="文明上网理性发言，请遵守新闻评论服务协议" class="comment_content"></textarea>
						<p><button class="submitComment">提交</button></p>
				
				</dd>
			</dl>
			<dl class="comment_list">
				<dt>全部评论<img src="/Public/static/common/images/comment.png"/><span><?php echo ($data["self"]["comment"]); ?></span></dt>
				<?php if($comments['status']): if(is_array($comments["data"])): foreach($comments["data"] as $key=>$id): ?><dd>
				<?=W('Comment/item',array($id))?>
				</dd><?php endforeach; endif; endif; ?>
			</dl>
			<div class="comment_more"><a href="#">加载更多</a></div>
		</div>
	</div>
</div>

<div class="bodyauto">
	<div class="footer fullWidth">
		<p><a href="/bbs/article-7-1.html" title="关于我们" target="_blank">关于我们</a><a href="/bbs/article-9-1.html" title="联系我们" target="_blank">联系我们</a><a href="/bbs/article-8-1.html" title="加入我们" target="_blank">加入我们</a><a href="/zixun/sitemap_1.html" title="网站地图" target="_blank">网站地图</a><a href="http://m.puamap.com/" title="手机版" target="_blank">手机版</a></p>
		<p class="copyright">Copyright © 2017 浪迹教育.蜀ICP备13017604号-1</p>
		<p>浪迹教育PUA实战泡妞把妹社区 - 浪迹教育</p>
	</div>
</div>
<ul class="right_btn">
	<li><a class="kefu_btn" href="###" target="_blank"><img src="/Public/static/common/images/right_q.png"><br>情感答疑</a></li>
	<li><a href="/app.htm" title="扫码下载APP" target="_blank"><img src="/Public/static/common/images/right_logo.png"><br>浪迹APP</a><p><img src="/Public/static/common/images/app_download.jpg"><br>扫码下载APP</p></li>
	<li class="goTop"><a><img src="/Public/static/common/images/right_top.png"><br>返回顶部</a></li>
</ul>
</body>
</html>