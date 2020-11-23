<?php
/**
 *   直播模块 直播间控制器
 */
namespace app\live\controller;

use cmf\controller\AdminBaseController;

class LiveController extends AdminBaseController
{

  
    public function room()
    {
        
        return $this->fetch();
    }

    protected function post()
    {
        
        return $this->fetch();
    }

}
