<?php
/**
 *   直播模块 直播间控制器
 */
namespace app\live\controller;

use cmf\controller\AdminBaseController;

class LiveController extends AdminBaseController
{
    public function entrance(){
        $param = $this->request->param();
        switch ($param['url_type']) {
            case 'list':
                $this->room();
                break;
            case 'add':
                $this->post();
                break;
            default:
                # code...
                break;
        }
    }
  
    protected function room()
    {
        
        return $this->fetch();
    }

    protected function post()
    {
        
        return $this->fetch();
    }

}
