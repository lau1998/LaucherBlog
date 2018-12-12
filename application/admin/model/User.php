<?php
namespace app\admin\model;
use think\Model;
use traits\model\SoftDelete;
class User extends Model
{
	protected $name = 'user';
	protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
	use SoftDelete;
    protected $deleteTime = 'delete_time';
}
