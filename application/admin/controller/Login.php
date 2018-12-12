<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\User;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Request;
use think\Db; 
class Login extends Base
{
    public function index()
    {
          $this->alreadyLogin();
          return $this->fetch();
    }
    public function login()
    {
          $pwd=md5(input('pwd'));
          $map=[
            'user_login'=>input('name'),
            'user_pass'=>$pwd,
            'user_type'=>['lt','2']
          ];
          $user=User::get($map);
          if($user){
            // 保存登录者信息
            //判断是否被禁用
            if ($user->user_state=='2') {
                return json("stop");
                die;
            }
            if ($user->delete_time!=null) {
                return json("del");
                die;
            }
            // Session::set('user_login',$user->user_login);
            Cookie::set('user_login',$user->user_login);
            Session::set('user_info',$user->getData());//allinfo
            //用户登录次数
            $count=Session::get('user_info.count');
            $userListTime=time();//最后登录时间
            $user->save([
                'count'  => ++$count,
                'last_login_time' => $userListTime
            ],['id' =>  Session::get('user_info.id')]);
            return json("success"); 

          }else{
            return json("on");
          }
    
    }
    //管理员登出
    public function logout()
    {
      Session::delete("user_info");
      // Session::delete("user_info");
      $this->redirect("Login/index");
    }
    // 记住登录名和密码
    public function online()
    {
      
    }

}
