<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'=>true,//不区分大小写
    'MODULE_ALLOW_LIST'    =>array('Home','vcourse'),
    'DEFAULT_MODULE'       =>'Home',
    'URL_MODULE_MAP'       =>array('vcourse'=>'course'),
    'LOAD_EXT_CONFIG'      => 'db', 
    'TMPL_PARSE_STRING'    => array(
        '__PUBLIC__'       =>__ROOT__.'/Public',
        '__IMAGES__'       =>__ROOT__.'/Public/static/common/images',
        '__CSS__'          =>__ROOT__.'/Public/static/common/css',
        '__JS__'           =>__ROOT__.'/Public/static/common/js',
        //课程配置
        '__OIMAGES__'       =>__ROOT__.'/Public/static/course/images',
        '__OCSS__'          =>__ROOT__.'/Public/static/course/css',
        '__OJS__'           =>__ROOT__.'/Public/static/course/js',
    ),
    'APP_AUTOLOAD_PATH'     =>"@.TagLib",
    'TAGLIB_PRE_LOAD'       =>"Common\TagLib\Custom",
    'LANG_SWITCH_ON'        =>true,
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    //'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔
    //'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
    'DEFAULT_LANG'     => 'zh-cn',
    'DATA_CACHE_ON' => false,
    'DATA_CACHE_TIME' =>'3600',//设置缓存时间
    'DATA_CACHE_COMPRESS'   =>  true,   // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK'      =>  true,   // 数据缓存是否校验缓存
    'DATA_CACHE_PREFIX'     =>  'file_',     // 缓存前缀
    'DATA_CACHE_TYPE'       =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_PATH'       =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
    'DATA_CACHE_KEY'        =>  '',	// 缓存文件KEY (仅对File方式缓存有效)
    'DATA_CACHE_SUBDIR'     =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL'       =>  1,
    'PAGESIZES'             =>15,
    'TOKEN_ON'=>true, // 是否开启令牌验证 
    'TOKEN_NAME'=>'__hash__', // 令牌验证的表单隐藏字段名称 
    'TOKEN_TYPE'=>'md5', //令牌哈希验证规则 默认为MD5
);