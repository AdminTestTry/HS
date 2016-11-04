<?php
return array(
	//'配置项'=>'配置值'
	//
	'SHOW_PAGE_TRACE'		=>	true,	 //打开trace
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'),//不允许访问的模块
    'MODULE_ALLOW_LIST'     =>  array('Admin','Home'),//不允许访问的模块
    'URLL_MODEL'			=>	2,	//设置url访问模式
    'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'hs',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'pwd',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'hs_',    // 数据库表前缀
    'DB_PARAMS'             =>  array(), // 数据库连接参数    
    'DB_DEBUG'              =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

    'TMPL_PARSE_STRING'		=>	array(
    	//css、js、images的绝对路径
    	'__HOMECSS__'	=>	'/Public/Home/assets/css',
    	'__HOMEJS__'	=>	'/Public/Home/assets/js',
    	'__HOMEIMG__'	=>	'/Public/Home/assets/images',
    	'__HOMEI__'	=>	'/Public/Home/assets/i',
    	'__HOMEFONTS__'	=>	'/Public/Home/assets/fonts',
    ),

);