<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//网站域名
define("SITE_URL", "http://h2x.com:90/");
//CSS和JS的根路径
define("CSS_URL", SITE_URL."Public/css/");
define("JS_URL", SITE_URL."Public/javascript/");
//BOOTSTRAP和JQUERY的根路径
define("BOOTSTRAP_URL",SITE_URL."Public/javascript/libs/bootstrap/");
define("JQUERY_URL",SITE_URL."Public/javascript/jquery/");
//图片的根路径
define("IMG_URL",SITE_URL."Public/image/");


// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./HuiHuiXueXi/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单