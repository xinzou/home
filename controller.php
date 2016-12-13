<?php

/**
 * Created by PhpStorm.
 * User: shenzhao
 * Date: 2016/12/13
 * Time: 上午10:00
 */
class controller
{
    public $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    public function run($method)
    {
        if (method_exists($this, $method)) {
            $this->$method();
        }
    }

    public function about()
    {
        $this->smarty->display('index.tpl');
    }

    public function singin()
    {
        require build_result([], '注册成功');
    }

    public function register()
    {
        return build_result([], '登录成功');
    }

    public function error()
    {
        //todo:error page
    }

    public function index()
    {
        $this->smarty->display('index.tpl');
    }
}