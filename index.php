<?php
/**
 * Created by PhpStorm.
 * User: shenzhao
 * Date: 2016/12/13
 * Time: 上午9:55
 */
date_default_timezone_set("PRC");
require './smarty/libs/Smarty.class.php';
require './controller.php';
require './func.php';
global $smarty;
$smarty = new Smarty();
$smarty->force_compile = true;
$smarty->caching = false;//是否使用缓存
$smarty->template_dir = "./pages/templates";//设置模板目录
$smarty->compile_dir = "./pages/templates_c";//设置编译目录
$smarty->cache_dir = "./pages/smarty_cache";//缓存文件夹
//修改左右边界符号
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$uri = $_SERVER['REQUEST_URI'];
$uri_arr = array_filter(explode('/', trim($uri, '/')));
$method = empty($uri_arr) ? 'index' : array_pop($uri_arr);
$controller = new controller();
$controller->run($method);


