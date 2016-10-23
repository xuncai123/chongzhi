<?php
return array(
	//'配置项'=>'配置值'
		/* 数据库设置 */
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		'DB_HOST'               =>  '127.0.0.1', // 服务器地址
		'DB_NAME'               =>  'cz',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  'root',          // 密码
		'DB_PORT'               =>  '',        // 端口
		
		'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
		//默认访问
		'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
		'DEFAULT_CONTROLLER'    =>  'Login', // 默认控制器名称
		'DEFAULT_ACTION'        =>  'index', // 默认操作名称
);