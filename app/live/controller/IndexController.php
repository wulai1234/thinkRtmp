<?php
/**
 *   直播模块 直播间控制器
 */
namespace app\live\controller;

use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{

  
    public function index()
    {
        
        return $this->fetch();
    }

    

}
