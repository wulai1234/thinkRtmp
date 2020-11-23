<?php
namespace app\live\behavior;
use think\Db;
class Live
{
   	/**
   	 * [get_nav description]   获取导航
   	 * @return [type]          [description]
   	 */
    public function get_main_nav(){
    	//获取主导航
    	$nav = Db::name('cmf_nav','n')
    		->join('cmf_nav_menu nm','n.id = nm.nav_id')
    		->where('n.is_main',1)
    		->select();
    	var_dump($nav);exit;
        return $params;
    }
}