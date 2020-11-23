<?php
/**
 *   直播模块 直播间控制器
 */
namespace app\live\controller;

use cmf\controller\HomeBaseController;
use \think\Hook;

class HomeController extends HomeBaseController
{

  
    public function index()
    {
        $res = Hook::listen('get_main_nav');
        return $this->fetch();
    }

    

}
