<?php
namespace app\index\controller;
use app\admin\common\Base;
use app\admin\model\User;
use think\Cookie;
use think\Controller;
use think\Session;
use think\Request;
use think\Db; 
class Login extends Base
{
    public function index()
    {
          return $this->fetch();
    }
    public function login(Request $request)
    {
          $data=$request->param();
          $result = filter_var($data['login_name'], FILTER_VALIDATE_EMAIL);
          // $captcha = new Captcha();
          // return $captcha->entry(2);
          if (!captcha_check($data['yzm'])) {
              return json('yzmerror');die;
          }    
          if( $result !== false ){
                // echo '是email';
                $map=[
                  'user_email'=>$data['login_name'],
                  'user_pass'=>md5($data['user_pass']),
                  'user_status'=>1
                ];
                $u=new User();
                $user=$u->where($map)->find();
                if ($user) {
                  Cookie::set('username',$user->user_login);
                  Session::set('user_info',$user->getData());//allinfo
                  $count=Session::get('user_info.count');//用户登录次数
                  $userListTime=time();//最后登录时间
                  return json('success');
                } else {
                  Cookie::set('username',$user->user_login);
                  return json('error');
                }  
              
          } 
          else {
             // echo '不是email';
             $map=[
                  'user_login'=>$data['login_name'],
                  'user_pass'=>md5($data['user_pass']),
                  'user_status'=>1
              ];
                $u=new User();
                $user=$u->where($map)->find();
                if ($user) {
                  Cookie::set('username',$user->user_login);
                  Session::set('user_info',$user->getData());//allinfo
                  $count=Session::get('user_info.count');//用户登录次数
                  $userListTime=time();//最后登录时间
                  return json('success');
                } else {
                  return json('error');
                }  
          }
    }
    //验证码
    public function yzm()
    {
      $captcha = new Captcha();
      return $captcha->entry(1);
    }
    //管理员登出
    public function logout()
    {
      Session::delete("user_info");
      // Session::delete("user_info");
      $this->redirect("/");
    }
    // 记住登录名和密码
    public function online()
    {
      
    }

}
