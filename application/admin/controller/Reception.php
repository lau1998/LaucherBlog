<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\BannerItem;
use think\Request;
use think\Session;
use think\Db; 
class Reception extends Base
{
     /*幻灯片组*/
    public function banner_list()
    {   
        $this->islogin();
        $list = Db::name('banner')->select();
        $this-> view ->assign('li',$list);
        return $this-> view ->fetch();
    }
    // 幻灯片组排序
    public function banner_list_order()
    {
        $user = new BannerItem;
        $status=1;
        $message="更新失败！";
        $isok=$user->update(['id' => $_GET['id'], 'list_order' => $_GET['list_order']]);
        if ($isok) {
            $status=1;
            $message="更新成功！";
        } 
        return json(['status'=>$status,'message'=>$message]);
    }
      //幻灯片组停用
    public function banner_stop()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('banner')->where('id',$id)->update(['status' => '0']);
        if ($list) {
             return json('success');
        } else {
            return json('error');
        }
    }
    // 幻灯片组启用
    public function banner_start()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $list=Db::name('banner')->where('id', $id)->update(['status' => '1']);
         if ($list) {
             return json('success');
        } else {
            return json('error');
        }
    }
    // 幻灯片组删除
    public function banner_list_del(Request $request)
    {   
        $this->islogin();
        $data=$request->param(); 

        $user = new BannerItem();
        // 查询数据集
        $list=$user->where('slide_id', $data['id'])->select();
        if ($list) {
            return json('no');
        } else {
            $isok=Db::name('banner')->delete($data['id']);
            if ($isok) {
                return json('success');
            } else {
                return json('error');
            }
        }
    }
    public function banner_edit(Request $request)
    {   
        $this->islogin();
        $id=$_GET['id'];
        if ($id=="") {
            return $this-> view ->fetch('banner_add');
        }
        $list = Db::name('banner')->where('id',$id)->find();
        $this-> view ->assign('l',$list);
        return $this-> view ->fetch();
    }
    public function banner_edit_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param(); 
        $isok=Db::name('banner')
            ->where('id', $data['id'])
            ->update($data);
        if ($isok) {
            return json('success');
        } else {
            return json('error');
        } 
    }
    public function banner_add(Request $request)
    {
        $this->islogin();
        $data=$request->param();    
        $isok=Db::name('banner')->insert($data);
        if ($isok) {
           return json('success');
        } else {
           return json('error');
        }
    }
    public function banner_info(Request $request)
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('banner_item')->where('slide_id',$id)->select();
        $this-> view ->assign('v',$list);
        $this-> view ->assign('id',$id);
        return $this-> view ->fetch();
    }
    //幻灯片停用
    public function banner_info_stop()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('banner_item')->where('id',$id)->update(['status' => '0']);
        if ($list) {
             return json('success');
        } else {
            return json('error');
        }
        

    }
    // 幻灯片启用
    public function banner_info_start()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $list=Db::name('banner_item')->where('id', $id)->update(['status' => '1']);
         if ($list) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 幻灯片删除
    public function banner_info_del()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $del=Db::name('banner_item')->delete($id);
         if ($del) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 幻灯片添加
    public function banner_info_add(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param(true);  
            // 获取文件对象
            $image=$this->request->file('image');
            // 判断是否获取到了文件
            if (empty($image)) {
                $this->error($image->getError());
            }
            // 上传文件
            $map=[
                'ext'=>'jpg,png',
                'size'=>3000000
            ];
            $info=$image->validate($map)->move(ROOT_PATH.'public/uploads/banner');
            if (is_null($info)) {
                $this->error($image->getError());
            } 
            $data['image']=$info->getSaveName();
            $data['slide_id']=$data['id'];
            $data['list_order']='10000';
            unset($data['id']);//删除元素id
            $res=BannerItem::create($data);
            if (is_null($res)) {
                $this->error('添加幻灯片失败');
            } else {
                $this->success('添加幻灯片成功！');
            }
        }
    }
    // 修改幻灯片列表
    public function banner_info_edit()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list = BannerItem::get($id);
        $this-> view ->assign('vs',$list);
        return $this-> view ->fetch();
    }
    // 修改幻灯片
    public function banner_info_edit_exe(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param(true);  
            // 获取文件对象
            $image=$this->request->file('image');
            // 判断是否获取到了文件
            if (empty($image)) {
                $this->error($image->getError());
            }
            // 上传文件
            $map=[
                'ext'=>'jpg,png',
                'size'=>3000000
            ];
            $info=$image->validate($map)->move(ROOT_PATH.'public/uploads/banner');
            if (is_null($info)) {
                $this->error($image->getError());
            } 
            $data['image']=$info->getSaveName();
            $user = new BannerItem;
            // save方法第二个参数为更新条件
            $user->save($data,['id' => $data['id']]);
            if (is_null($user)) {
                $this->error('修改幻灯片失败');
            } else {
                $this->success('修改幻灯片成功！');
            }
        }
    }
    /*幻灯片END*/

    /*友链*/
    public function friend_list()
    {
        $this->islogin();
        $list=Db::name('link')->select();
        $this-> view ->assign('v',$list);
        return $this-> view ->fetch();
    }
    //友链停用
    public function friend_stop()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('link')->where('id',$id)->update(['status' => '0']);
        if ($list) {
             return json('success');
        } else {
            return json('error');
        }
        

    }
    // 友链启用
    public function friend_start()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $list=Db::name('link')->where('id', $id)->update(['status' => '1']);
         if ($list) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 友链删除
    public function friend_del()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $del=Db::name('link')->delete($id);
         if ($del) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 友链添加
    public function friend_add(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param(true);  
            // 获取文件对象
            $image=$this->request->file('image');
            if ($image) {
                // 判断是否获取到了文件
                // if (empty($image)) {
                //     $this->error($image->getError());
                // }
                // 上传文件
                $map=[
                    'ext'=>'jpg,png',
                    'size'=>3000000
                ];
                $info=$image->validate($map)->move(ROOT_PATH.'public/uploads/linklogo');
                if (is_null($info)) {
                    $this->error($image->getError());
                } 
                $data['image']=$info->getSaveName();
            }
            $data['list_order']='10000';
            unset($data['id']);//删除元素id
            $res=Db::name('link')->insert($data);
            if (is_null($res)) {
                $this->error('添加幻灯片失败');
            } else {
                $this->success('添加幻灯片成功！');
            }
        }
    }
    // 友链编辑表
    public function friend_edit(Request $request)
    {
        $this->islogin(); 
        $list=Db::name('link')->where('id',$_GET['id'])->find();
        $this->view->assign('v',$list);
        return $this-> view ->fetch();
    }
    // 友链编辑器
    public function friend_edit_exe(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param(true);  
            // 获取文件对象
            $image=$this->request->file('image');
            // 判断是否获取到了文件
            if ($image) {
            // 上传文件
                $map=[
                    'ext'=>'jpg,png',
                    'size'=>3000000
                ];
                $info=$image->validate($map)->move(ROOT_PATH.'public/uploads/linklogo');
                if (is_null($info)) {
                    $this->error($image->getError());
                } 
                $data['image']=$info->getSaveName();
            }else{
                $data['image']=$data['image1'];
            };
            unset($data['image1']);//删除元素id
            $user=Db::name('link')->where('id', $data['id'])->update($data);
            if (is_null($user)) {
                $this->error('修改幻灯片失败');
            } else {
                $this->success('修改幻灯片成功！');
            }
        }
    }
    // 友链排序
    public function friend_list_order()
    {
        $status=1;
        $message="更新失败！";
        $isok=Db::name('link')->where('id', $_GET['id'])->update(['list_order' => $_GET['list_order']]);
        if ($isok) {
            $status=1;
            $message="更新成功！";
        } 
        return json(['status'=>$status,'message'=>$message]);
    }
    // 文章管理
    public function article_list()
    {
        $this->islogin();
        // $list = Db::name('banner')->where('status',1)->select();
        // $this-> view ->assign('li',$list);
        return $this-> view ->fetch();
    }
    // 分类管理
    public function class_list()
    {
        $this->islogin();
        $list=Db::name('portal_category')->select();
        $count=count($list);
        // dump($list);die;
        $this->assign('list',$list);
        $this->assign('count',$count);
        return $this-> view ->fetch();
    }
    // 分类-add-edit
    public function class_edit(Request $request)
    {   
        $this->islogin();
        $id=$_GET['id'];
        if ($id=="") {
            return $this-> view ->fetch('class_add');
        }
        $list = Db::name('portal_category')->where('id',$id)->find();
        $this-> view ->assign('l',$list);
        return $this-> view ->fetch();
    }
    // 分类add-edit-exe
    public function class_add(Request $request)
    {   
        $this->islogin();
        $data=$request->param();    
        $isok=Db::name('portal_category')->insert($data);
        if ($isok) {
           return json('success');
        } else {
           return json('error');
        }
    }
    public function class_edit_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param(); 
        $isok=Db::name('portal_category')
            ->where('id', $data['id'])
            ->update($data);
        if ($isok) {
            return json('success');
        } else {
            return json('error');
        } 
    }


    /*导航管理*/
    public function nav_list()
    {   
        $this->islogin();
        $list = Db::name('nav')->select();
        $this-> view ->assign('li',$list);
        return $this-> view ->fetch();
    }
    // 导航组排序
    public function nav_list_order()
    {
        $status=1;
        $message="更新失败！";
        $isok=Db::name('nav_menu')->update(['id' => $_GET['id'], 'list_order' => $_GET['list_order']]);
        if ($isok) {
            $status=1;
            $message="更新成功！";
        } 
        return json(['status'=>$status,'message'=>$message]);
    }
      //导航组停用
    public function nav_stop()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('nav')->where('id',$id)->update(['status' => '0']);
        if ($list) {
             return json('success');
        } else {
            return json('error');
        }
    }
    // 导航组启用
    public function nav_start()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $list=Db::name('nav')->where('id', $id)->update(['status' => '1']);
         if ($list) {
             return json('success');
        } else {
            return json('error');
        }
    }
    // 导航组删除
    public function nav_list_del(Request $request)
    {   
        $this->islogin();
        $data=$request->param(); 

        $user = new BannerItem();
        // 查询数据集
        $list=$user->where('slide_id', $data['id'])->select();
        if ($list) {
            return json('no');
        } else {
            $isok=Db::name('nav')->delete($data['id']);
            if ($isok) {
                return json('success');
            } else {
                return json('error');
            }
        }
    }
    public function nav_edit(Request $request)
    {   
        $this->islogin();
        $id=$_GET['id'];
        if ($id=="") {
            return $this-> view ->fetch('nav_add');
        }
        $list = Db::name('nav')->where('id',$id)->find();
        $this-> view ->assign('l',$list);
        return $this-> view ->fetch();
    }
    public function nav_edit_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param(); 
        $isok=Db::name('nav')
            ->where('id', $data['id'])
            ->update($data);
        if ($isok) {
            return json('success');
        } else {
            return json('error');
        } 
    }
    public function nav_add(Request $request)
    {
        $this->islogin();
        $data=$request->param();    
        $isok=Db::name('nav')->insert($data);
        if ($isok) {
           return json('success');
        } else {
           return json('error');
        }
    }
    public function nav_info(Request $request)
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('nav_menu')->where('nav_id',$id)->order("list_order desc")->select();
        $nav=Db::name('nav_menu')->select();
        $this-> view ->assign('v',$list);
        $this-> view ->assign('list',$nav);
        $this-> view ->assign('id',$id);
        return $this-> view ->fetch();
    }
    //导航停用
    public function nav_info_stop()
    {
        $this->islogin();
        $id=$_GET['id'];
        $list=Db::name('nav_menu')->where('id',$id)->update(['status' => '0']);
        if ($list) {
             return json('success');
        } else {
            return json('error');
        }
        

    }
    // 导航启用
    public function nav_info_start()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $list=Db::name('nav_menu')->where('id', $id)->update(['status' => '1']);
         if ($list) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 导航删除
    public function nav_info_del()
    {
        $this->islogin(); 
        $id=$_GET['id'];
        $del=Db::name('nav_menu')->delete($id);
         if ($del) {
             return json('success');
        } else {
            return json('error');
        }

    }
    // 导航添加
    public function nav_info_add(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param();  
            $res=Db::name('nav_menu')->insert($data);
            if (is_null($res)) {
                return json('error');
            } else {
                return json('success');
            }
        }
    }
    // 修改导航列表
    public function nav_info_edit()
    {
        $this->islogin();
        $list = db('nav_menu')->where('id',$_GET['id'])->find();
        $nav=Db::name('nav_menu')->select();
         $this-> view ->assign('id',$_GET['id']);
        $this-> view ->assign('list',$nav);
        $this-> view ->assign('vs',$list);
        return $this-> view ->fetch();
    }
    // 修改导航
    public function nav_info_edit_exe(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param();  
            $user=db('nav_menu') ->where('id', 1)->update($data);
            // save方法第二个参数为更新条件
            if (is_null($user)) {
               return json('error');
            } else {
                return json('success');
            }
        }
    }
    /*导航END*/
}
