<?php
namespace app\tools\controller;
use app\admin\common\Base;
use think\Request;
use think\Db;
class Index extends Base
{
    public function index()
    {   
        return $this-> view ->fetch();
    }
    public function jshtml()
    {   
        return $this-> view ->fetch('jshtml/index');
    }
    public function xml()
    {   
        return $this-> view ->fetch('xml/index');
    }
    public function colour()
    {   
        return $this-> view ->fetch('colour/index');
    }
    public function url()
    {   
        return $this-> view ->fetch('url/index');
    }
    public function url_exe(Request $request)
    {   
    	$data=$request->param();
    	$array = explode("\n",$data['urldata']);/*把字符串每一行转换为数组*/
    	if ($data['type']=="xl") {
	    	foreach ($array as $k => $v) {
	    		// 判断是否有http:
	    		if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $array[$k])) {
	    			$str[] ="http://api.t.sina.com.cn/short_url/shorten.json?source=3271760578&url_long=http://".$array[$k];
	    		}else{
	    			$str[] ="http://api.t.sina.com.cn/short_url/shorten.json?source=3271760578&url_long=".$array[$k];
	    		}
	    		$url[] = str_replace(array("\r\n", "\r", "\n"), "", $str[$k]);//删除字符串中的空格和换行符
	    	};
   		}
   		if ($data['type']=="bd") {
   			foreach ($array as $ke => $va) {
   				//判断是否有http:
	    		if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $array[$ke])) {
	    			dump('无');
	    			$bdurl[]="http://".$array[$ke];
	    		}else{
	    			$bdurl[]=$array[$ke];
	    			dump('有');
	    		}
   			}
   				// 判断是否有http:
	    		// if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $array[$k])) {
	    			
	    		// }else{
	    			
	    		// }
	    		// $url[] = str_replace(array("\r\n", "\r", "\n"), "", $str[$k]);//删除字符串中的空格和换行符
       			// dump($array);die;
       	}
       	if ($data['type']=="tx") {
       			dump('tx');
       	}
    	// 1. 初始化
		$ch = curl_init();
    	foreach ($url as $key => $value) {
					// 2. 设置选项，包括URL
					curl_setopt($ch,CURLOPT_URL,$url[$key]);
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				 	curl_setopt($ch,CURLOPT_HEADER,0);
				 	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
				 	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
				 	// 3. 执行并获取HTML文档内容
				 	$output[] = curl_exec($ch); 
				 	$arr = (array) json_decode($output[$key],true); 
				 	$json[]=($arr[0]['url_short']);

    	}
    	// 4. 释放curl句柄
		curl_close($ch);
       	return ($json);
    }
//  md5加密
    public function md5()
    {   
        return $this-> view ->fetch('md5/index');
    }
    public function md5_exe(Request $request)
    {   
        $data=$request->param();
        $md['32m']=md5($data['md5']);//32小
        $md['32b']=strtoupper($md['32m']);//32大
        $md['16m']=substr(md5($data['md5']),8,16); // 16位小MD5加密 
        $md['16b']=strtoupper($md['16m']);//16大
        return ($md);
    }
}
