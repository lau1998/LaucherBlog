<?php
namespace app\admin\controller;
use app\admin\model\User as UserModel;
use app\admin\common\Base;
use think\Controller;
use think\Request;
use think\Session;
use think\Db; 
class User extends Base
{
    public function user_list()
    {
    	$this->islogin();
        $user=UserModel::where('user_type','egt','2')->select();
        $count=count($user);
        $this-> view ->assign('count',$count);
        $this-> view ->assign('u',$user);
        return $this-> view ->fetch();
    }
    public function user_add()
    {
    	$this->islogin();
        return $this->fetch();
    }
    //添加用户编辑器
    public function user_add_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param();
        $data['user_pass']=md5($data['user_pass']);
        $data['register_time']=time();
        $user = new UserModel($data);
        $isok = $user->save();
        if ($isok) {
           return json(['data'=>'ok']);
        } else {
           return json(['data'=>'no']);
        }
        
    }
    //编辑用户列表
    public function user_edit()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=UserModel::all(['id'=>$id]);
        $this->view ->assign('list',$list);
        return $this-> view ->fetch('user_edit');
    }
     // 软删除用户
    public function user_del_exe()
    {
        $this->islogin();
        $id=$_GET['id'];
        // 软删除
        $user=UserModel::destroy($id);
        if ($user) {
            return json('success');
        } else {
            return json('error');
        }
        
    }
    // 删除的用户列表
    public function user_del()
    {
        $this->islogin();
        $user=UserModel::onlyTrashed()->select();
        $count=count($user);
        $this-> view ->assign('count',$count);
        $this->view->assign('list', $user);
        return $this->view->fetch();
    }
    //永久删除用户功能
    public function user_del_really(){
        $this->islogin();
        $id=$_POST['id'];
        // 真实删除
        $user=UserModel::destroy($id,true);
        if ($user){
           return json('success');
        }
        return json('error');

    }
    //删除用户恢复功能
    public function user_del_recovery()
    {
        $this->islogin();
        $id=$_POST['id'];
        $user = new UserModel();
        $user->restore(['id' => $id]);
        if ($user){
           return json('success');
        }
        return json('error');
    }
    // 用户名是否重复
    public function user_chenk_name(Request $request){
        $userlogin=trim($request->param('userlogin'));
        $status=1;
        $message='登录名 可用';
        if(UserModel::get(['user_login'=>$userlogin])){
            //如果查到该用户
            $status=0;
            $message='登录名重复啦，请重新输入~~';
        }
        return json(['status'=>$status,'message'=>$message]);
    }
    // 邮箱是否重复
    public function user_chenk_email(Request $request){
        $userEmail=trim($request->param('email'));
        $status=1;
        $message='用户邮箱 可用';
        if(UserModel::get(['user_email'=>$userEmail])){
            //如果查到该用户
            $status=0;
            $message='用户邮箱重复啦，请重新输入~~';
        }
        return json(['status'=>$status,'message'=>$message]);
    }
    //修改密码
    public function user_change_pwd()
    {
        $this->islogin();
        $id=$_POST['id'];
        $pwd=md5($_POST['pwd']);
        $user = new UserModel;
        $us=$user->save([
            'user_pass'  => $pwd,
        ],['id' => $id]);
        if ($us) {
            return json('success');
        } else {
           return json('error');
        }
        
    }
    //用户编辑、编辑器
    public function user_edit_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param();
        $user = new UserModel;
        //save方法第二个参数为更新条件
        $user->save($data,['id' => $data['id']]);
        if ($user) {
           return json(['data'=>'ok']);
        } else {
           return json(['data'=>'no']);
        }
        
    }
    //停用 AND 启用功能
    public function user_stop()
    {
        $this->islogin();
        $id=$_POST['id'];
        $user = new UserModel;
        $user = UserModel::get($id);
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
    public function user_record_browse()
    {
    	$this->islogin();
        return $this->fetch();
    }
    public function user_record_download()
    {
    	$this->islogin();
        return $this->fetch();
    }
    public function user_record_share()
    {
    	$this->islogin();
        return $this->fetch();
    }
    public function user_show()
    {
    	$this->islogin();
        return $this->fetch();
    }


}
