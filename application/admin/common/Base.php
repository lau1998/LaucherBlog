<?php
namespace app\admin\common;
use think\Controller;
use app\admin\model\WebInfo;
use think\Request;
use think\Session;
use think\Db;
class Base extends Controller
{
	protected function _initialize()
	{
		parent::_initialize();//继承父类初始化
		define('user',Session::get('user_nickname'));
		// 获取当前请求对象
		$request=Request::instance();
		//获取网站配置信息
		$conf=$this->getSystem();
		// 查询网站当前开关状态
		$this->getStatus($request,$conf);
		 /*导航菜单*/
        // $nav_id=Db::name('nav')->where('status',1)->field('id')->find();
        // $nav_list=Db::name('nav_menu')->where('nav_id',$nav_id['id'])->order("list_order desc")->select();;
        // return $this->assign('nav',$nav_list);
        return $this->nav();
        /*END*/
	}
	// 判断用户是否登录
	protected function islogin()
	{
        $admin=Session::get('user_info');
		if ($admin['user_type'] > 1) {
			$this->error('用户未登录，无权访问', url('/index'));
		}
        if (!$admin) {
            $this->error('用户未登录，无权访问', url('/index'));
        }
	}
	// 防止用户重复登录
	protected function alreadyLogin()
	{
		if (Session::get('user_info')) {
			$this->error('用户已经登录，请勿重复登录',url('Index/index'));
		}
	}
	//获取配置信息
	public function getSystem()
	{
		$webinfo =WebInfo::get(1);
		$site_info = $webinfo->option_value;
        return  $web = json_decode($site_info,true);

	}
	// 判断网站前台的开启状态
	// $request,请求对象 $conflg当前配置信息
	public function getStatus($request,$conf)
	{
		// 当前模板是不是admin
		if ($request -> module() =='index') {
			if ($conf['site_closure'] == '1') {
				$this->redirect("/webclose/index");
				// $this->error('很抱歉!网站已关闭,3秒后自动退出！');
				exit();
			}
		}	
	}
	 /*
     * 发送邮件方法
     * @param string $to：接收者邮箱地址
     * @param string $title：邮件的标题
     * @param string $content：邮件内容
     * @return boolean  true:发送成功 false:发送失败
     */
    function send_mail($tomail, $name,  $subject = '', $body = '', $attachment = null){
        //实例化PHPMailer核心类
        $conf=$this->getSystem();
        vendor('phpmailer.phpmailer.src');
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
        $mail->IsSMTP();                    // 设定使用SMTP服务
        $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
        $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
        $mail->SMTPSecure = $conf['smtp_secure'];          // 使用安全协议
        $mail->Host = $conf['host']; // SMTP 服务器   根据发送者邮箱不同而不同
        $mail->Port = $conf['port'];                  // SMTP服务器的端口号
        $mail->Username = $conf['username'];    // SMTP服务器用户名
        $mail->Password = $conf['password'];     // SMTP服务器密码  这里不是邮箱密码是开启SMTP服务时设置的密码
        $mail->SetFrom($conf['username'], $conf['from_name']);
        $replyEmail = '';                   //留空则为发件人EMAIL
        $replyName = '';                    //回复名称（留空则为发件人名称）
        $mail->AddReplyTo($replyEmail, $replyName);
        $mail->Subject = $subject;
        $mail->IsHTML(true);                //是否解析HTML代码
        $mail->MsgHTML($body);
        $mail->AddAddress($tomail, $name);
        if (is_array($attachment)) { // 添加附件
            foreach ($attachment as $file) {
                is_file($file) && $mail->AddAttachment($file);
            }
        }
        if(!$mail->send()){// 发送邮件  
            // echo "Message could not be sent.";  
            // echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息  
            echo '2';
        }else{  
            echo '1';  //成功
        }
    }
     /*导航菜单*/
    public function nav()
    {
        /*导航菜单*/
        $nav_id=Db::name('nav')->where('status',1)->field('id')->find();
        $nav_list=Db::name('nav_menu')->where('nav_id',$nav_id['id'])->where('status',1)->order("list_order desc")->select();
        $user_info=Session::get('user_info');
        $uinfo=$this->assign('uinfo',$user_info);
        $nav=$this->assign('nav',$nav_list);
        /*导航菜单-END*/
         /*推荐文章*/
        $recommended=Db::name('portal_post')->where('delete_time',null)->where('recommended',1)->select();
        foreach ($recommended as $k => $v) {
            $uid[]=$recommended[$k]['user_id'];//作者ID
            $user[]=db('user')->field('user_nickname')->where("id",$uid[$k])->select();//获取作者名
            $recommend[] = array_merge($recommended[$k],$user[$k][0]); //合并到数组 
        };
        // dump($recommend);
        // 热点文章
        $hot=Db::name('portal_post')->where('delete_time',null)->order("post_hits desc")->limit(12)->select();
        foreach ($hot as $key => $val) {
            $u_id[]=$hot[$key]['user_id'];//作者ID
            $u_ser[]=db('user')->field('user_nickname')->where("id",$u_id[$key])->select();//获取作者名
            $post[] = array_merge($hot[$key],$u_ser[$key][0]); //合并到数组 
        }
        $fire=$this->assign('fires',$post);
        $recommend=$this->assign('recommend',$recommend);
        return array($uinfo,$nav,$fire,$recommend);
    }
    /*END*/
}
