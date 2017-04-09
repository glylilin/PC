var loginSub = true;
$(function(){
	$(".kefu_btn").attr({"href":"###","target":"_blank"});
	$(".goTop").click(function(){
		$("html,body").animate({scrollTop:0},500);
	})
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			$(".goTop").show();
		}else{
			$(".goTop").hide();
		}
	})
//导航
	$(".nav_list li").hover(function(){
		$(this).find(".hide_nav").stop(true,true).slideDown();
		$(this).find(".icon").show();
	},function(){
 		$(this).find(".hide_nav").slideUp();
 		$(this).find(".icon").hide();
 	})

//右侧浮动按钮
 	$(".right_btn li").hover(function(){
 		$(this).find("p").stop(true,true).slideDown();
 	},function(){
 		$(this).find("p").slideUp();
 	})
 	$(".right_btn li p").hover(function(){
 		$(this).parent().find("a").addClass("hover");
 	},function(){
 		$(this).parent().find("a").removeClass("hover");
 	})

//登陆注册
 	$(".user_entrance .denglu").click(function(){
 		login();
 	})

 	$(".user_entrance .zhuce").click(function(){
 		$(".entrance_box .zhuce").addClass("current");
 		$(".shadow").show();
 		$(".register").show();
 		$(".entrance_box").fadeIn();
 	})

 	$(".entrance_box>dt>p>span").click(function(){
 		$(this).siblings("span").removeClass("current");
 		$(this).addClass("current");
 	})

 	$(".entrance_box .denglu").click(function(){
 		$(".entrance_box dd").hide();
 		$(".entrance").show();
 	})

 	$(".entrance_box .zhuce").click(function(){
 		$(".entrance_box dd").hide();
 		$(".register").show();
 	})

 	$(".entrance_box .close").click(function(){
 		$(".shadow").hide();
 		$(".entrance_box").fadeOut();
 		$(".entrance_box>dt>p>span").removeClass("current");
 		$(".entrance_box dd").hide(500);
 	})
//注册验证码
	var countdown=60;
	var down_time=null;
	$(".yanzhengma").click(function(){
		var This=this;
		if($(this).hasClass("forbidden")){
			return;
		}
		$(this).addClass("forbidden");
		down_time=setInterval(function(){
			if(countdown>1){
				countdown--;
				$(This).text(countdown+"s后重发");
			}else{
				$(This).removeClass("forbidden");
				$(This).text("获取验证码");
				clearInterval(down_time);
				countdown=60;
				down_time=null;
			}			
		}, 1000);
	})
//支付方式
	$(".pay_box>.btn>p>a").click(function(){
		$(this).addClass("current").siblings("a").removeClass("current");
	})
//修改昵称
	$(".user_head .edit").click(function(){
		$(this).parent().hide();
		$(this).parent().siblings("form").css("display","table-cell");
	})
	$(".user_head .cancel").click(function(){
		$(this).parent().hide();
		$(this).parent().siblings("p").show();
		$(this).siblings("input").val($(this).siblings("input").attr("rel"));
	})
//修改号码
	$(".user_number .edit").click(function(){
		$(this).siblings("input").removeAttr("disabled"); 
		$(this).hide().siblings().show();
	})
	$(".user_number .cancel").click(function(){
		$(this).hide();
		$(this).siblings("button").hide();
		$(this).siblings(".edit").show();
		$(this).siblings("input").attr("disabled","disabled"); 
		$(this).siblings("input").val($(this).siblings("input").attr("rel"));
	})

//懒加载
	$(".lazy").delayLoading({
		defaultImg: "./Public/static/common/images/load.gif",           // 预加载前显示的图片
		errorImg: "./Public/static/common/images/defaultpic.gif",                        // 读取图片错误时替换图片(默认：与defaultImg一样)
		imgSrcAttr: "originalSrc",           // 记录图片路径的属性(默认：originalSrc，页面img的src属性也要替换为originalSrc)
		beforehand: 0,                       // 预先提前多少像素加载图片(默认：0)
		event: "scroll",                     // 触发加载图片事件(默认：scroll)
		duration: "normal",                  // 三种预定淡出(入)速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认:"normal"
		container: window,                   // 对象加载的位置容器(默认：window)
		success: function (imgObj) { },      // 加载图片成功后的回调函数(默认：不执行任何操作)
		error: function (imgObj) { }       // 加载图片失败后的回调函数(默认：不执行任何操作)
	});
	
	//验证
	$('.require').blur(function(){
		verification(this);
	});
	$(".require").focus(function(){
		$(this).parent().next().text("");
		return;
	});
	$(".loginBtn").click(function(){
		$('.require').each(function(k,v){
			verification(v);
		});
		if(!loginSub){
			return false;
		}
		var mobile = $("input[name='login[mobile]']").val();
		var password = $("input[name='login[password]']").val();
		var url="/vcourse/login/login";
		$.ajax({
			url:url,
			type:"POST",
			data:{'login[mobile]':mobile,'login[password]':password},
			dataType:"JSON",
			success:function(res){
				if(res.status){
					window.location.reload();
				}else{
					alert(res.message);
				}
			}
		});
	});
	//发表评论
	$('.submitComment').click(function(){
		var content =$(".comment_content").val();
		if(!content){
			return;
		}
		if($(this).hasClass("submited")){return;}
		var url ="/vcourse/comment/add";
		var rel_id = $(this).parents(".comment_form").attr('vid');
		if(!rel_id){
			return;
		}
		$(this).addClass("submited");
		$.ajax({
			url:url,
			type:"POST",
			data:{'content':content,'rel_id':rel_id},
			dataType:"JSON",
			success:function(res){
				if(res['status']){
					var html = '<dd>'+res['data']+"</dd>";
					$('.comment_list').find("dt").eq(0).after(html);
					$(".comment_content").val("");
					var num = parseInt($('.comment_list').find("dt").eq(0).find('span').text()) + 1;
					$('.comment_list').find("dt").eq(0).find('span').text(num);
				}else{
					switch(res['message']){
					case "nologin":
						login();
						break;
					
					}
				}
				$(this).removeClass("submited");
			}
		});
	});
	
	//点赞
	$('.zan').live('click',function(){
		if($(this).hasClass('zaned')){
			return;
		}
		var comment_id = $(this).parent().attr('comment_id');
		var reg=/\d+/;
		if(!reg.test(comment_id)){
			return;
		}
		var url="/vcourse/comment/like";
		var This = this;
		var likeStrY = $(this).html();
		var likeStr = $(this).text();
		var likeString = likeStr.replace("(",'').replace(")","");
		$(this).addClass('zaned')
		$.ajax({
			url:url,
			type:"POST",
			data:{'comment_id':comment_id,'like':1},
			dataType:"JSON",
			success:function(res){
				if(res['status']){
					$(This).html(likeStrY.replace(likeString,parseInt(likeString)+1));
				}else{
					$(This).removeClass('zaned')
					switch(res['message']){
					case "nologin":
						login();
						break;
					
					}
				}
			}
		});
	});
	//回复
	$('.hui').live("click",function(){
		if($(this).hasClass('huied')){
			return;
		}
		var comment_id = $(this).parent().attr('comment_id');
		var reg=/\d+/;
		if(!reg.test(comment_id)){
			return;
		}
		var url="/vcourse/comment/replayList";
		var This = this;
		var likeStrY = $(this).html();
		var likeStr = $(this).text();
		var likeString = likeStr.replace("(",'').replace(")","").replace("回复","");
		$(this).parent().next().show();
		if(parseInt(likeString) > 0){
			$.ajax({
				url:url,
				type:"POST",
				data:{'comment_id':comment_id},
				dataType:"JSON",
				success:function(res){
					if(res.status){
						$(This).parent().parent().append(res.data);
					}
				}
			});
		}
	});
	$(".user_comment_form").find('button').live('click',function(){
		if($(this).hasClass('replaied')){return;}
		var content = $(this).parent().prev().val();
		if(!content){return;}
		var comment_id = $(this).parent().parent().prev().attr('comment_id');
		var comment_uid = $(this).parent().parent().prev().attr('comment_uid');
		var reg=/\d+/;
		if(!reg.test(comment_id)){
			return;
		}
		var likeStrY = $(this).parent().parent().prev().find('.hui').html();
		var likeStr = $(this).parent().parent().prev().find('.hui').text();
		var likeString = likeStr.replace("(",'').replace(")","").replace("回复","");
		var This = this;
		var url="/vcourse/comment/addReplay";
		$.ajax({
			url:url,
			type:"POST",
			data:{"content":content,'comment_id':comment_id,"comment_uid":comment_uid},
			dataType:"JSON",
			success:function(res){
				$(This).removeClass('replaied')
				if(res['status']){
					var parent = $(This).parent().parent();
					$(parent).prev().find('.hui').html(likeStrY.replace(likeString,parseInt(likeString)+1));
					$(parent).after(res.data);
					$(This).parent().prev().val("")
				}else{
					switch(res['message']){
					case "nologin":
						login();
						break;
					default:
						alert(res['message']);
						break;
					}
				}
			}
		});
	})
})

function verification(obj){
	var content = $(obj).val();
	if(!content){
		$(obj).parent().next().text("此项不能为空");
		loginSub = false;
		return;
	}
	var md = $(obj).attr('md');
	switch (md) {
	case "mobile":
		var reg = /1[3|4|5|7|8]\d{9}/;
		if(!reg.test(content)){
			$(obj).parent().next().text("格式错误");
			loginSub = false;
			return;
		}
		break;
		case "password":
		var len =content.length;
		if(len < 6 || len > 20){
			$(obj).parent().next().text("密码长度为6到20位");
			loginSub = false;
			return;
		}
		break;
	}
	loginSub = true;
}

function login(){
	$(".entrance_box .denglu").addClass("current");
		$(".shadow").show();
		$(".entrance").show();
		$(".entrance_box").fadeIn();
}
