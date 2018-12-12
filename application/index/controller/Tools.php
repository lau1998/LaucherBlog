<?php
namespace app\index\controller;
use app\admin\common\Base;
use think\Controller;
use think\Session;
use think\Request;
use think\Db; 
class Tools extends Base
{
    public function index()
    {
          return $this->fetch();
    }
}
