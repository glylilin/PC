<?php
namespace Common\TagLib;
use Think\Template\TagLib;
class Custom extends TagLib{
    protected $tags = array(
        'Signin'=>array('close'=>0),
        'Menu'=>array('attr'=>'name','close'=>0),
        'Share'=>array('close'=>0),
    );
//自定义登录标签
public function _Signin(){
$str=<<<LABEL
<div class="shadow"></div>
<dl class="entrance_box">
	<dt><p><span class="denglu">账号登陆</span>|<span class="zhuce">注册</span></p><a class="close"><img src="__IMAGES__/close.png"></a></dt>
	<dd class="entrance">
		
			<div class="bor"><img src="__IMAGES__/land_icon1.png"><span><input type="text" name="login[mobile]" class="require" md="mobile" placeholder="手机号"></span><p class="error"></p></div>
			<div class="bor"><img src="__IMAGES__/land_icon3.png"><span><input type="password" md="password" name="login[password]" class="require" placeholder="登陆密码"></span><p class="error"></p></div>
			<div class="check_box"><p><label><input type="checkbox"/>记住我</label></p><span><a href="#">忘记密码?</a></span></div>
			<button class="loginBtn">登陆</button>
	
		<div class="other">其他方式：<a href="#" target="_blank"><img src="__IMAGES__/weixin.png"></a><a href="#" target="_blank"><img src="__IMAGES__/qq.png"></a><a href="#" target="_blank"><img src="__IMAGES__/weibo.png"></a></div>
	</dd>
	<dd class="register">
		<form action="#">
			<div class="bor"><img src="__IMAGES__/land_icon1.png"><span><input type="text" placeholder="手机号"></span></div>
			<div class="bor_box">
				<div class="bor bor2"><img src="__IMAGES__/land_icon2.png"><span><input type="text" placeholder="验证码"></span></div>
				<div class="yanzhengma">获取验证码</div>
			</div>
			<div class="bor"><img src="__IMAGES__/land_icon3.png"><span><input type="password" placeholder="密码不少于6位"></span></div>
			<div class="bor"><img src="__IMAGES__/land_icon3.png"><span><input type="password" placeholder="确认密码"></span></div>
			<div class="bor"><img src="__IMAGES__/land_icon4.png"><span><input type="text" placeholder="昵称"></span></div>
			<button>注册</button>
			<div class="check_box"><p><label><input type="checkbox"/>同意</label><a href="#">《浪迹教育用户服务协议》</a></p><span><a href="#">已有账号？登录</a></span></div>
		</form>
	</dd>
</dl>
LABEL;
if(session('?userinfo') && session('userinfo')){
$username =	session('userinfo')['nickname'] ? session('userinfo')['nickname'] : formatPhone(session('userinfo')['mobile']);
$Signin = <<<LABEL
<dl class="header bodyauto">
	<dt>浪迹PUA实战泡妞把妹社区 - 浪迹教育</dt>
	<dd>
		<p class="user_name">你好，<a href="#"><?php echo $username?></a>我的课程</p>
		<p><img src="__IMAGES__/yanzhen.png" class="img1" />验证官方微信<img src="__IMAGES__/xiajiantou.png"  class="img2" /></p>
		<p><a href="#">手机版</a></p>
	</dd>
</dl>
LABEL;
}else{
$Signin =<<<LABEL
<dl class="header bodyauto">
	<dt>浪迹PUA实战泡妞把妹社区 - 浪迹教育</dt>
	<dd>
		<p><img src="__IMAGES__/yanzhen.png" class="img1" />验证官方微信<img src="__IMAGES__/xiajiantou.png"  class="img2" /></p>
		<p><a href="#">手机版</a></p>
		<p class="user_entrance"><a class="denglu">登陆</a>|<a class="zhuce">注册</a></p>
	</dd>
</dl>
LABEL;
}
return $str.$Signin;
}

//导航
public function _Menu($attr){
    $class =strtolower($attr['name']) ;
$nav = <<<CONTENT
<div class="nav fullWidth">
	<div class="bodyauto">
		<div class="nav_div fullWidth">
			<p class="logo"><a href="#" target="_blank"><img src="__IMAGES__/logo.png" alt="PUA"/></a></p>
			<ul class="nav_list">
				<li><a href="/" title="首页" target="_blank">首页</a></li>
				<li><a href="http://huati.puamap.com/" title="话题" target="_blank">话题<img src="__IMAGES__/new.png" class="superscript" /></a></li>
				<li><a href="/video/" title="视频" target="_blank">视频</a></li>
				<li><a href="/vcourse" title="VIP课程" target="_blank" <?php if($class == "vip") { ?>class="current" <?php }?>>VIP课程</a></li>
				<li><a href="/teacher/" title="导师团队" target="_blank">导师团队</a></li>
				<li><a href="/zixun/" title="资讯" target="_blank">资讯<span class="icon"><img src="__IMAGES__/jiao1.png"></span></a>
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
				<li><a href="/app.htm" title="APP下载" target="_blank">APP下载<img src="__IMAGES__/bamei.png"
				class="superscript"/></a></li>
			</ul>
			<form action="#">
				<input type="text" placeholder="浪迹一分钟" /><button></button>
			</form>
		</div>
	</div>
</div>
CONTENT;
return $nav;
}

public function _Share(){
$share =<<<LABEL
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
LABEL;
return $share;			
}
}