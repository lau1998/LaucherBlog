<?php  
/**
 * 博客文章详情页面
 */
namespace app\index\controller;
use app\admin\common\Base;
use think\Paginator;
use think\Controller;
use think\Request;
use think\Session;
use think\view;
use think\Db; 
class BlogArticles extends Base
{
	// 文章内容
    public function single_blog()
    {
        $id=$_GET['aid'];
        $author['author']=$_GET['author'];
        $data = db('portal_post')->where('id',$id)->find();
        $post_hits=($data['post_hits'])+'1';
        // dump($post_hits);die;
        Db::name('portal_post')->update(['post_hits' =>$post_hits ,'id'=>$id]);
        $aa['class']=json_decode($data['post_class'],true);//获取分类
        $arr = array_merge($data,$aa,$author); //合并到数组
        $this->view->assign('blogs',$arr);
    	return view('index/single_blog');
    }
}