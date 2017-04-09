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
		
	),
    'APP_HOST'=>'https://app.puamap.com/api/v2/',
	'COMMENT_REPLAY_PAGE_SIZE'=>5
 
);