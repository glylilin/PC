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
<div class="vcourse_nav fullWidth">
	<ul>
		<li><a href="#">恋爱秘籍</a></li>
		<li><a href="#">私教</a></li>
		<li><a href="#">挽回狙击</a></li>
		<li><a href="#">实战</a></li>
		<li><a href="#">全托</a></li>
		<li><a href="#">精品课</a></li>
	</ul>
</div>
<div class="vcourse_banner fullWidth">
<?php if(is_array($banner)): foreach($banner as $key=>$id): ?><a href="#" title=""><img src="<?php echo ($id["path"]); ?>" alt=""></a><?php endforeach; endif; ?>
</div>
<div class="bodyauto">
	<dl class="vcourse_tuijian fullWidth">
		<dt>推荐课程<img src="/Public/static/course/images/jiao1.png"></dt>
		<dd>
		<?php if(is_array($remmend)): foreach($remmend as $key=>$id): ?><a href="#"><?php echo ($id["title"]); ?></a><?php endforeach; endif; ?>
		</dd>
	</dl>
<?php if(is_array($data)): foreach($data as $key=>$id): ?><dl class="vcourse_classify fullWidth">
		<dt>
			<p class="left"><span><?php echo ($id["name"]); ?></span><?php echo ($id["brief"]); ?></p>
			<p class="right"><a href="/vcourse/entry/<?php echo ($id["type"]); ?>">更多<i>&gt;</i></a></p>
		</dt>
		<dd>
			<ul class="vcourse_list1 fullWidth">
			<?php if(is_array($id["child"])): foreach($id["child"] as $keys=>$v): if($keys < 4): ?><li>
					<div class="box">
						<div class="pic">
							<a href="/vcourse/entry/<?php echo ($id["type"]); ?>/<?php echo ($v["id"]); ?>" title="">
								<img originalsrc="<?php echo ($v["thumbpath"]); ?>" src="/Public/static/common/images/defaultpic.gif" alt="" class="lazy">
								<p><span></span><label><?php echo ($v["number"]); ?>人已学</label></p>
							</a>
						</div>
						<p class="tt"><span><?php echo ($v["title"]); ?></span><label>课时<?php echo ($v["lesson"]); ?>节</label></p>
						<p class="price">￥<b><?php echo ($v["price"]); ?></b>/VIP2:￥<?php echo ($v["vip_price"]); ?></p>
					</div>
				</li><?php endif; endforeach; endif; ?>
				
			</ul>
		</dd>
	</dl><?php endforeach; endif; ?>

	</dl>

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