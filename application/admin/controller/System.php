<?php
namespace app\admin\controller;
use app\admin\model\WebInfo;
use app\admin\common\Base;
use think\Request;
use think\Session;
class System extends Base
{
    public function system_base()
    {   
        $this->islogin();
        // 网站info
        $web = $this->getSystem();//将json转为数组形式
        $this-> view -> assign('web', $web);
        return $this-> view -> fetch();
    }
    // 系统设置修改
    public function system_base_exe(Request $request)
    {
        $this->islogin();
        $data=$request->param();
      // dump($data);die;
        //将数组转化为json格式
        $json=json_encode($data);
        $arr = array('option_value' =>$json);
        $web = new WebInfo;
        // save方法第二个参数为更新条件
        $ok=$web->save($arr,['option_name' => 'site_info']);
        if ($ok) {
           return json('success');
        } else {
           return json('error');
        }
        
    }
    /*
     * tp5邮件测试
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */
    public function email($subject='邮件发送测试',$content='恭喜你，邮件测试成功！') {
        $toemail=$_GET['link'];
        $name=Session::get('user_info.user_nickname');
        $this->send_mail($toemail,$name,$subject,$content);
    }
}
