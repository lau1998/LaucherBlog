<?php
namespace app\index\controller;
// use app\admin\model\PortalPost;
use app\admin\common\Base;
use think\Paginator;
use think\Controller;
use think\Request;
use think\Session;
use think\Cookie;
use think\Db; 
use think\view;
class Index extends Base
{
    public function index()
    {
    	$list =Db::name('portal_post')->where('delete_time',null)->order("id desc")->paginate(5);
        $page = $list->render();
        $list = $list->toArray()['data'];
        // dump($list);die;
        foreach ($list as $k => $v) {
            $aid[]=$list[$k]['id'];//文章id
            $uid[]=$list[$k]['user_id'];//作者ID
            $user[]=db('user')->field('user_nickname')->where("id",$uid[$k])->select();//获取作者名
            $aa[]=json_decode($list[$k]['post_class'],true);//获取分类
            $mm['fenlei']=$aa[$k];  
            $content_01 = $list[$k]['post_content'];//从数据库获取富文本content
			$content_02 = htmlspecialchars_decode($content_01);//把一些预定义的 HTML 实体转换为字符
			$content_03 = str_replace("&nbsp;","",$content_02);//将空格替换成空
			$contents = strip_tags($content_03);//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容
			$con['contents'] = mb_substr($contents, 0, 100,"utf-8");//返回字符串中的前100字符串长度的字符
			$arr[] = array_merge($list[$k],$user[$k][0],$mm,$con); //合并到数组 
        };
        /*顶部幻灯片*/
        $slidelist = Db::name('banner')->where('status',1)->field('id')->find();
        $slide=Db::name('banner_item')->where('slide_id',$slidelist['id'])->select();
        $this->assign('slide',$slide);
        /*END*/
        $this->assign('page',$page);
        $this-> view ->assign('list',$arr);
        return view();
    }
    //加载更多
    public function ajax(Request $request)
    {
        $page=input('page');
        // dump($page);die;
        $list =Db::name('portal_post')->where('delete_time',null)->order("id desc")->paginate(5);
        // $list = $list->toArray()['data'];
        // dump($list);die;
        foreach ($list as $k => $v) {
            $aid[]=$list[$k]['id'];//文章id
            $uid[]=$list[$k]['user_id'];//作者ID
            $user[]=db('user')->field('user_nickname')->where("id",$uid[$k])->select();//获取作者名
            $aa[]=json_decode($list[$k]['post_class'],true);//获取分类
            $mm['fenlei']=$aa[$k];  
            $content_01 = $list[$k]['post_content'];//从数据库获取富文本content
            $content_02 = htmlspecialchars_decode($content_01);//把一些预定义的 HTML 实体转换为字符
            $content_03 = str_replace("&nbsp;","",$content_02);//将空格替换成空
            $contents = strip_tags($content_03);//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容
            $con['contents'] = mb_substr($contents, 0, 100,"utf-8");//返回字符串中的前100字符串长度的字符
            $arr[] = array_merge($list[$k],$user[$k][0],$mm,$con); //合并到数组 
        };
        // dump($arr[1]);
        //文章变量
         return   json($arr);
        // dump($arr);
    }
}
