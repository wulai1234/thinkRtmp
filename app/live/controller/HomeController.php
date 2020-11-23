<?php
/**
 *   直播模块 直播间控制器
 */
namespace app\live\controller;

use cmf\controller\HomeBaseController;

class HomeController extends HomeBaseController
{

  
    public function index()
    {
        
        return $this->fetch();
    }

    

}
