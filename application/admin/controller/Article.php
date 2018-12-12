<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\BannerItem;
use app\admin\model\PortalPost;
use app\admin\model\PortalCategory;
use think\Controller;
use think\Request;
use think\Session;
use think\Db; 
use think\File;
class Article extends Base
{
    /*文章*/
    public function article_list()
    {
        $this->islogin();
        $list =db::name('portal_post')->where('delete_time',null)->select();
        $count=count($list);
        foreach ($list as $k => $v) {
            $aid[]=$list[$k]['id'];//文章id
            $uid[]=$list[$k]['user_id'];//作者ID
            $user[]=db('user')->field('user_nickname')->where("id",$uid[$k])->select();//获取作者名
            $aa[]=json_decode($list[$k]['post_class'],true);//获取分类
            $mm['fenlei']=$aa[$k];
            $arr[] = array_merge($list[$k],$user[$k][0],$mm); //合并到数组    
        };
        $this-> view ->assign('count',$count);
        $this-> view ->assign('list',$arr);
        return $this-> view ->fetch();
    }
    // 文章-发布
    public function article_fb()
    {
        $this->islogin();
        if ($_POST['values']==1) {
            $ar=Db::name('portal_post')->update(['post_status' => '0','id'=>$_POST['id']]);;
        } else {
            $ar=Db::name('portal_post')->update(['post_status' => '1','id'=>$_POST['id']]);;
        }
        if ($ar) {
           return json('success');
        } else {
           return json('error');
        }
        
    }
    // 文章-置顶
    public function article_zd()
    {
        $this->islogin();
        if ($_POST['values']==1) {
            $ar=Db::name('portal_post')->update(['is_top' => '0','id'=>$_POST['id']]);;
        } else {
            $ar=Db::name('portal_post')->update(['is_top' => '1','id'=>$_POST['id']]);;
        }
        if ($ar) {
           return json('success');
        } else {
           return json('error');
        }
    }
    // 文章-推存
    public function article_tc()
    {
        $this->islogin();
        if ($_POST['values']==1) {
            $ar=Db::name('portal_post')->update(['recommended' => '0','id'=>$_POST['id']]);;
        } else {
            $ar=Db::name('portal_post')->update(['recommended' => '1','id'=>$_POST['id']]);;
        }
        if ($ar) {
           return json('success');
        } else {
           return json('error');
        }
    }
    // 软删除用户
    public function article_del()
    {
        $this->islogin();
        // 软删除
        $user=PortalPost::destroy($_GET['id']);
        if ($user) {
            return json('success');
        } else {
            return json('error');
        }
        
    }
    public function article_add(Request $request)
    {
        $this->islogin();
        $list=Db::name('portal_category')->select();
        $this->assign('list',$list);
        return $this-> view ->fetch();

    }
    // 文章添加
    public function article_add_exe(Request $request)
    {
        $this->islogin(); 
        if ($this->request->isPost()) {
            // 获取提交数据
            $data=$this->request->param(true);
            // 将分类id转为json格式
            $json=json_encode($data['post_class']);
            $data['post_class']=$json;
            $data['user_id']=Session::get('user_info.id');
            $data['create_time']=time();

            if ($data['post_status']=='1') {
                $data['published_time']=time();
            }
            // 获取文件对象
            $image=request()->file('image');
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
                $info=$image->validate($map)->move(ROOT_PATH."/public/uploads/article/fm_img");
                if (is_null($info)) {
                    $this->error($image->getError());
                };
                $url=str_replace("\\", '/',$info->getSaveName() );
                $data['thumbnail']=$url;
            }
            unset($data['image']);//删除元素image
            $res=Db::name('portal_post')->insert($data);
            if (is_null($res)) {
                // return json('error');
                $this->error('添加文章失败');
            } else {
                $this->success('添加文章成功');
            }
        }
    }
    // 文章编辑表
    public function article_edit(Request $request)
    {
        $this->islogin(); 
        $data=Db::name('portal_post')->where('id',$_GET['id'])->find();
        $list=Db::name('portal_category')->select();
        $this->assign('list',$list);
        $this->view->assign('v',$data);
        dump($data);
        return $this-> view ->fetch();
    }
    // 文章编辑器
    public function article_edit_exe(Request $request)
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
                $info=$image->validate($map)->move(ROOT_PATH.'/public/uploads/fm_img');
                if (is_null($info)) {
                    $this->error($image->getError());
                } 
                $data['image']=$info->getSaveName();
            }else{
                $data['image']=$data['image1'];
            };
            unset($data['image1']);//删除元素id
            $user=Db::name('portal_post')->where('id', $data['id'])->update($data);
            if (is_null($user)) {
                $this->error('修改幻灯片失败');
            } else {
                $this->success('修改幻灯片成功！');
            }
        }
    }
 /***********************************************************************************/   
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
}
