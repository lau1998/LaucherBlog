<?php
namespace app\webclose\controller;
use app\admin\common\Base;
use think\Db;
class Index extends Base
{
    public function index()
    {   
        $time=$this->getSystem();
        $this->view->assign('time', $time['stop_time']);
        return $this-> view ->fetch();
    }
}
