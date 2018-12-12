<?php
namespace app\admin\controller;
use app\admin\common\Base;
use think\Controller;
use think\Db; 
use think\Request;
use think\Session;
use app\admin\model\User;
class Admin extends Base
{
    public function admin_list()
    {
    	$this->islogin();
        $userName=Session::get('user_info.user_login');
        if ($userName=='admin') {
            $list=User::all(['user_type'=> 1]);
        } else {
            $list=User::all(['user_login'=>$userName]);
        }
        $count = count($list);
        $this-> view ->assign('count',$count);
        $this-> view ->assign('list',$list);
        $this-> view ->assign('isadmin',$userName);
        return $this-> view ->fetch();
    }
    //编辑用户列表
    public function admin_edit()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=User::all(['id'=>$id]);
        $this->view ->assign('list',$list);
        return $this-> view ->fetch('admin_edit');
    }
    // 添加用户列表
    public function admin_add()
    {
        $this->islogin();
        // 判断是添加
        return $this-> view ->fetch('admin_add');
    }
    // 软删除用户
    public function admin_del_exe()
    {
        $this->islogin();
        $id=$_GET['id'];
        // 软删除
        $user=User::destroy($id);
        if ($user) {
            return json('success');
        } else {
            return json('error');
        }
        
    }
    // 用户名是否重复
    public function admin_chenk_name(Request $request){
        $userName=trim($request->param('adminName'));
        $status=1;
        $message='管理员名 可用';
        if(User::get(['user_nickname'=>$userName])){
            //如果查到该用户
            $status=0;
            $message='管理员重复啦，请重新输入~~';
        }
        return json(['status'=>$status,'message'=>$message]);
    }
    // 邮箱是否重复
    public function admin_chenk_email(Request $request){
        $userEmail=trim($request->param('email'));
        $status=1;
        $message='管理员邮箱 可用';
        if(User::get(['user_email'=>$userEmail])){
            //如果查到该用户
            $status=0;
            $message='管理员邮箱重复啦，请重新输入~~';
        }
        return json(['status'=>$status,'message'=>$message]);
        
    }
    //用户编辑、编辑器
    public function admin_edit_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param();
        if($data['user_pass']==NULL){
            $arr=User::get($data['id']);
            $data['user_pass']=$arr['user_pass'];
        }else{
            $data['user_pass']=md5($data['user_pass']);
        }
        $user = new User;
        // save方法第二个参数为更新条件
        $user->save($data,['id' => $data['id']]);
        if ($user) {
           return json(['data'=>'ok']);
        } else {
           return json(['data'=>'no']);
        }
        
    }
    //添加用户编辑器
    public function admin_add_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param();
        $data['user_pass']=md5($data['user_pass']);
        $data['register_time']=time();
        dump($data);
        $user = new User($data);
        $isok = $user->save();
        if ($isok) {
           return json(['data'=>'ok']);
        } else {
           return json(['data'=>'no']);
        }
        
    }
    //停用 AND 启用功能
    public function admin_stop()
    {
        $this->islogin();
        $id=$_POST['id'];
        $user = new User;
        $user = User::get($id);
        if ($user->user_state=='1') {
            $user->save([
            'user_state'  => '2',
            ],['id' => $id]);
            return json("success");
        } elseif ($user->user_state=='2') {
            $user->save([
            'user_state'  => '1',
            ],['id' => $id]);
            return json("success666");
        }else {
            return json();
        }    
    }
    // 删除功能
    public function admin_del()
    {
        $this->islogin();

    }
    public function admin_role()
    {
        $this->islogin();
        return $this-> view ->fetch();
    }
    public function admin_role_add()
    {
        $this->islogin();
        return $this-> view ->fetch();
    }
    public function admin_permission()
    {
        $this->islogin();
        return $this-> view ->fetch();
    }
    public function admin_permission_add()
    {
        $this->islogin();
        return $this-> view ->fetch();
    }
}
