<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/tools\view\jshtml\index.html";i:1536589929;s:84:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/tools\view\public\nav.html";i:1536575922;s:106:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/tools\view\..\..\index\view\templet\_footer.html";i:1535981155;s:102:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/tools\view\..\..\index\view\templet\_js.html";i:1535965294;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>JS/HTML格式化</title>

    <!-- Favicon  -->
    <link rel="icon" href="__STATIC__/index/img//core-img/favicon.ico">
    <link rel="stylesheet" href="__STATIC__/index/lib/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="__STATIC__/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="__STATIC__/index/src/jquery.toast.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<!--     <link rel="stylesheet" href="__STATIC__/login//css/css.css" media="all"> -->
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/style.css" />
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** 顶部导航栏 ***** -->
    <header class="header-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html"><img src="__STATIC__/index/img/core-img/logo.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                 <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item <?php if($nav['name'] == '工具箱'): ?> active <?php endif; ?>">
                                        <a class="nav-link" href="<?php echo $nav['href']; ?>" <?php echo $nav['target']; ?>><?php echo $nav['name']; ?><span class="sr-only">(current)</span></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; if($uinfo != ''): ?>
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">个人中心</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if($uinfo['user_type'] <= '1'): ?>
                                    <a class="dropdown-item" href="/admin">进入后台</a>
                                    <?php endif; ?>
                                        <a class="dropdown-item" href="index.html">查看个人信息</a>
                                        <a class="dropdown-item" href="<?php echo url('index/Login/logout'); ?>">登出</a>
                                    </div>
                                </li>
                                <?php else: ?>
                                 <li class="nav-item ">
                                    <a class="nav-link" href="javascript:;" onclick="login()" data-toggle="tooltip" data-placement="bottom" title="登录是一种态度">Login</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <script>
        function login(){
         layer.open({
              type: 2,
              title :'登录是一种态度',
              anim: 6,  
              scrollbar: false,//禁止滚动条
              skin: 'layui-layer-rim', //加上边框
              area: ['400px', '550px'], //宽高
              content: "<?php echo url('index/login/index'); ?>"
            });
        }
    </script>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start 头部幻灯片 ********** -->
    <div class="hero-area bg-img " style="background-image: url(__STATIC__/index/img/blog-img/b1.jpg);height: 200px" ></div>
    <!-- ********** Hero Area End ********** -->
    <!-- ********** 内容 *********** -->
    <section class="contact-area section-padding-50">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-12">
                    <h5>JS/HTML格式化：</h5>
                   <textarea id="content" onfocus="this.select()" class="form-control" name="RawJson" rows="15" spellcheck="false" placeholder="请输入Javascript , JSON , CSS 或者 HTML 代码"></textarea>
                   <br/>
                   <div class="text-right">
                    <button id="sels" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    制表符缩进<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;" onclick="sj(1)">1个空格缩进</a></li>
                        <li><a href="javascript:;" onclick="sj(2)">2个空格缩进</a></li>
                        <li><a href="javascript:;" onclick="sj(4)">4个空格缩进</a></li>
                        <li><a href="javascript:;" onclick="sj(8)">8个空格缩进</a></li>
                    </ul>
                    <button type="button" class="btn btn-primary" onclick="return do_js_beautify();" id="beautify">格式化</button>
                    <button type="button" class="btn btn-primary" onclick="pack_js(0);">普通压缩</button>
                    <button type="button" class="btn btn-primary" onclick="pack_js(1);">加密压缩</button>
                    <button type="button" class="btn btn-primary" onclick="change();">JS/HTML互转</button>
                    <button type="button" class="btn btn-danger" onclick="Empty();">清空结果</button>
                    </div>
                </div>
                <input type="hidden" id="tabsize" value="1" />
            </div>
        </div>
    </section>
    <br/><br/><br/><br/>
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="__STATIC__/index/img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="javascript:;" target="_blank">LAUCHER-FASSS</a>
<br><span><a href="http://www.miitbeian.gov.cn/" target="view_window">渝ICP备18002743号-1</a> |    </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>订阅本站</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="输入你的邮箱账号">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="__STATIC__/index/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- 3D标签 -->
    <script type="text/javascript" src="__STATIC__/index/js/jquery.svg3dtagcloud.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var entries = [ 
                { label: 'html/css', url: '#', target: '_bla' },
                { label: '网站资源', url: '#', target: '_bla' },
                { label: '经验分享', url: '#', target: '_bla' },
                { label: '社会实践', url: 'http://baidu.com', target: '_blan' },
                { label: 'Dropdown Menu', url: '#', target: '_bl' },
                { label: 'CodePen', url: 'http://codepen.io/', target: '_bla' },
                { label: 'three.js', url: 'http://threejs.org/', target: '_blank' },
                { label: 'Form Validation', url: '#', target: '_blan' },
                { label: 'JS Compress', url: 'http://jscompress.com/', target: '_bla' },
                { label: 'TinyPNG', url: 'https://tinypng.com/', target: '_blank' },
                { label: 'Can I Use', url: 'http://caniuse.com/', target: '_blan' },
                { label: 'URL shortener', url: 'https://goo.gl/', target: '_blan' },
                { label: 'Grid Layout', url: '#', target: '_blan' },
                { label: 'Twitter', url: 'https://twitter.com/', target: '_blank' },
                { label: 'deviantART', url: 'http://nkunited.deviantart.com/', target: '_bla' },
                { label: 'Gulp', url: 'http://gulpjs.com/', target: '_bl' },
                // { label: 'Browsersync', url: 'https://www.browsersync.io/', target: '_bl' },
                // { label: 'GitHub', url: 'https://github.com/', target: '_bla' },
                // { label: 'Shadertoy', url: 'https://www.shadertoy.com/', target: '_blank' },
                // { label: 'Tree View', url: '#', target: '_bl' },
                // { label: 'jsPerf', url: 'http://jsperf.com/', target: '_blan' },
                // { label: 'Foundation', url: 'http://foundation.zurb.com/', target: '_bla' },
                // { label: 'CreateJS', url: 'http://createjs.com/', target: '_blan' },
                // { label: 'Velocity.js', url: 'http://julian.com/research/velocity/', target: '_blank' },
                // { label: 'TweenLite', url: 'https://greensock.com/docs/#/HTML5/GSAP/TweenLite/', target: '_blank' },
                // { label: 'jQuery', url: 'https://jquery.com/', target: '_bla' },
                // { label: 'Notification', url: '#', target: '_bla' },
                // { label: 'Parallax', url: '#', target: '_bla' }
            ];
            var settings = {
                entries: entries,
                width: 320,
                height: 250,
                radius: '80%',
                radiusMin: 75,
                bgDraw: false,
                bgColor: '#494A5F',
                opacityOver: 1.00,
                opacityOut: 0.05,
                opacitySpeed: 6,
                fov: 800,
                speed: 0.5,
                fontFamily: 'Oswald, Arial, sans-serif',
                fontSize: '17',
                fontColor: '#FF00FF',
                fontWeight: 'normal',//bold
                fontStyle: 'normal',//italic 
                fontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                fontToUpperCase: true

            };
            //var svg3DTagCloud = new SVG3DTagCloud( document.getElementById( 'holder'  ), settings );
            $( '#tag-cloud' ).svg3DTagCloud( settings );
        });
    </script>
    
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
   
    <!-- Popper js -->
    <script type="text/javascript" src="__STATIC__/index/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="__STATIC__/index/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script type="text/javascript" src="__STATIC__/index/js/plugins.js"></script>
    <!-- Active js -->
    <script type="text/javascript" src="__STATIC__/index/js/active.js"></script>
    <script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="__STATIC__/index/src/jquery.toast.js"></script>
    
  <!--   <script type="text/javascript" src="__STATIC__/index/js/jquery/jquery-2.2.4.min.js" ></script>
    <script type="text/javascript" src="__STATIC__/index/js/popper.min.js" ></script>
    <script type="text/javascript" src="__STATIC__/index/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="__STATIC__/index/js/plugins.js" ></script>
    -->

    <script src="__STATIC__/tools/jshtml/base.js"></script>
    <script src="__STATIC__/tools/jshtml/jsformat.js"></script>
    <script src="__STATIC__/tools/jshtml/htmlformat.js"></script>
    <script type="text/javascript">
    if(window.localStorage && localStorage.getItem("content2format")){
        document.getElementById('content').value = localStorage.getItem("content2format");
        localStorage.setItem("content2format","");
    }
    

    function sj(s){
        $("#tabsize").val(s);
        $("#sels").text(s+"个空格缩进");
    }

    function do_js_beautify() {
        document.getElementById('beautify').disabled = true;
        js_source = document.getElementById('content').value.replace(/^\s+/, '');
        tabsize = document.getElementById('tabsize').value;
        tabchar = ' ';
        if (tabsize == 1) {
            tabchar = '\t';
        }
        if (js_source && js_source.charAt(0) === '<') {
            document.getElementById('content').value = style_html(js_source, tabsize, tabchar, 80);
        } else {
            document.getElementById('content').value = js_beautify(js_source, tabsize, tabchar);
        }
        document.getElementById('beautify').disabled = false;
        return false;
    }
    function pack_js(base64) {
        var input = document.getElementById('content').value.replace(/^\s+|\s+$/g,"");
        if(input == ''){
            alert('请输入需要压缩的内容!');
            return;
        }
        
        var packer = new Packer;
        if (base64) {
            var output = packer.pack(input, 1, 0);
        } else {
            var output = packer.pack(input, 0, 0);
        }
        document.getElementById('content').value = output;
    }
    function Empty() {
        document.getElementById('content').value = '';
        document.getElementById('content').select();
    }
    
     function rechange(){
 document.getElementById('content').value=document.getElementById('content').value.replace(/document.writeln\("/g,"").replace(/"\);/g,"").replace(/\\\"/g,"\"").replace(/\\\'/g,"\'").replace(/\\\//g,"\/").replace(/\\\\/g,"\\")
 }
 function changeIt(){
 document.getElementById('content').value="document.writeln(\""+document.getElementById('content').value.replace(/\\/g,"\\\\").replace(/\\/g,"\\/").replace(/\'/g,"\\\'").replace(/\"/g,"\\\"").split('\n').join("\");\ndocument.writeln(\"")+"\");"
 }
    
    var ischange = false;
    function change(){
        if(!ischange){
            changeIt();
            
        }else{
            rechange();
        }
        ischange = !ischange;
    }
    
    function GetFocus() {
            document.getElementById('content').focus();
    }
</script>
</body>

</html>