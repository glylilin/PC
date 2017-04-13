<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_THEME' =>'default',
    'TMPL_TEMPLATE_SUFFIX'=>'.html',
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'main',//模板定义
    'TMPL_LAYOUT_ITEM'=>'{__REPLACE__}',//模板中的 替换内容
    //变量的左右定界符
    'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(  
		//'entry/:id\d+' => '/vcourse/index/entry/id/:1', //301跳转
		'/entry\/(\d+)(\/(\d+))?/' => 'vcourse/index/entry?type=:1&id=:3',
		'/view\/(\d+)(\/(\d+))?/' => 'vcourse/index/view?cid=:1&vid=:3',
		
	),
    'APP_HOST'=>'https://app.puamap.com/api/v2/',
    'APP_HOST2'=>'http://huati.pauamap.com/',
	'COMMENT_REPLAY_PAGE_SIZE'=>5,
    'DATA_CACHE_TIME'=>600,
    'DATA_CACHE_COMPRESS'   =>  true,   // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK'      =>  true,   // 数据缓存是否校验缓存
    'HTML_CACHE_ON'         =>  true, // 开启静态缓存
    'HTML_CACHE_TIME'       =>  600,   // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX'      =>  '.shtml', // 设置静态缓存文件后缀
   
    'HTML_CACHE_RULES'      =>  array(  
        '*'=>array('{$_SERVER.REQUEST_URI|md5}'),
    ),
);