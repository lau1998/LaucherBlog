<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\User;
use think\Request;
use think\Session;
use think\date;
use think\Db;
class Index extends Base
{
    public function index()
    {   
        $this->islogin();
        $this-> view ->assign('admin',Session::get('user_info.user_login'));
        return $this-> view ->fetch();
    }
    public function welcome()
    {   
        $a=Session::get('user_info.count');
    	$request = Request::instance();
        $date = date('Y-m-d H:i:s',time());
        $list=Db::name('user')->where('user_type','egt','2')->paginate();//用户 
        $list2=Db::name('user')->where('user_type','lt','2')->paginate();//管理员
        $count = count($list);
        $count2 = count($list2);
        $this->assign('a', $a);
        $this->assign('count', $count);
        $this->assign('count2', $count2);
        $this->assign('time',$date);
    	return $this->fetch('welcome');
    }
}
