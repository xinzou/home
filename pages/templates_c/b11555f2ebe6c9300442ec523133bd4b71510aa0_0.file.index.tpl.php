<?php
/* Smarty version 3.1.30, created on 2016-12-13 10:16:07
  from "/www/home/pages/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f59e751f898_96286499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11555f2ebe6c9300442ec523133bd4b71510aa0' => 
    array (
      0 => '/www/home/pages/templates/index.tpl',
      1 => 1481595332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584f59e751f898_96286499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/asset/css/common.css">
    <link rel="stylesheet" href="/asset/css/index.css">
    <?php echo '<script'; ?>
 src="/asset/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <title>Title</title>
</head>
<body>
<div class="top">
    <div class="top-con">
        <div class="top-con-lf">
            <span><a href="/">马上分期商城</a></span>
        </div>
        <div class="top-con-rt">
            <a href="/about/">关于我们</a>
            <a href="#">联系我们</a>
        </div>
    </div>
</div>
<div class="center">
    <div>
        <img src="/asset/img/Screen.png" alt="">
    </div>
    <div>
        <img src="/asset/img/Screen2.png" alt="">
    </div>
</div>
<div class="login">
    <p>请登录</p>
    <div class="user inf">
        <input type="text " placeholder="请输入手机号">
    </div>
    <div class="pwd inf">
        <input type="text " placeholder="请输入密码">
    </div>
    <div class="btn">
        <a href="#">登录</a>
    </div>
    <div class="rgt">
        <a href="#" class="go-register">注册账号</a>
    </div>
</div>
<div class="register">
    <p>请注册</p>
    <div class="user inf" name="username">
        <input type="text " placeholder="请输入手机号">
    </div>
    <div class="pwd inf" name="password">
        <input type="text " placeholder="请输入密码">
    </div>
    <div class="btn">
        <a href="#">注册</a>
    </div>
    <div class="rgt"><a href="#" class="go-login">登录账号</a></div>
</div>
<div class="login-register">
    <a href="#" id="register">注册</a>/<a href="#" id="login">登录</a>
</div>
<?php echo '<script'; ?>
 src="/asset/js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
