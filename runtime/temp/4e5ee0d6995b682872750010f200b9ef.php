<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:91:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\index\single_blog.html";i:1536053373;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_meta.html";i:1535605723;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_header.html";i:1536575542;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_footer.html";i:1535981155;s:85:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_js.html";i:1535965294;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

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
    <header class="header-area">
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                 <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo $nav['href']; ?>" <?php echo $nav['target']; ?>><?php echo $nav['name']; ?><span class="sr-only">(current)</span></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; if($uinfo != ''): ?>
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">个人中心</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if($uinfo['user_type'] <= '1'): ?>
                                    <a class="dropdown-item" href="admin">进入后台</a>
                                    <?php endif; ?>
                                        <a class="dropdown-item" href="index.html">查看个人信息</a>
                                        <a class="dropdown-item" href="<?php echo url('Login/logout'); ?>">登出</a>
                                    </div>
                                </li>
                                <?php else: ?>
                                 <li class="nav-item ">
                                    <a class="nav-link" href="javascript:;" onclick="login()" data-toggle="tooltip" data-placement="bottom" title="登录是一种态度">Login</a>
                                </li>
                                <?php endif; ?>
                                  <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="catagory.html">Catagory</a>
                                        <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                                        <a class="dropdown-item" href="regular-page.html">Regular Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li> -->
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
              content: "<?php echo url('login/index'); ?>"
            });
        }
    </script>
    <!-- ***** Header Area End ***** -->
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(/uploads/article/fm_img/<?php echo $blogs['thumbnail']; ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <div class="post-cta"><?php if(is_array($blogs['class']) || $blogs['class'] instanceof \think\Collection || $blogs['class'] instanceof \think\Paginator): $i = 0; $__LIST__ = $blogs['class'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><a href="#"><?php echo $c; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
                        <h3><?php echo $blogs['post_title']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">
                                <i class="icon-user"></i> <?php echo $blogs['author']; ?></a>&nbsp;&nbsp; <i class="icon-time"></i> <a href="#" class="post-date"><?php echo date("Y-m-d H:i:s",$blogs['published_time']); ?></a>&nbsp;&nbsp;
                                <i class="icon-eye-open">&nbsp;<?php echo $blogs['post_hits']; ?></i>&nbsp;&nbsp;<i class="icon-comments-alt">&nbsp;<?php echo $blogs['comment_count']; ?></i>
                            </p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                           <?php echo $blogs['post_content']; ?>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                            <?php if(is_array($blogs['class']) || $blogs['class'] instanceof \think\Collection || $blogs['class'] instanceof \think\Paginator): $i = 0; $__LIST__ = $blogs['class'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                                <li><a href="#"><i class="icon-tag">&nbsp;</i><?php echo $c; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>    
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author"><?php echo $blogs['author']; ?></a> 发布于 <a href="#" class="post-date"><?php echo date("Y-m-d H:i:s",$blogs['published_time']); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-0">
                       <!-- Widget Area 阅读最多 -->
                        <div class="sidebar-widget-area">
                            <h5 class="title"><i class="fa fa-coffee"></i>&nbsp;阅读最多的文章</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area 标签库 -->
                        <div class="sidebar-widget-area">
                            <h5 class="title"><i class="icon-tags"></i>&nbsp;标签库</h5>
                            <div class="widget-content">
                                <div id="tag-cloud"></div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">保持联系</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 评论 -->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-0">
                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                        <a href="#" class="comment-reply btn world-btn">Reply</a>
                                    </div>
                                    <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                </div>
                                <ol class="children ">
                                    <li class="single_comment_area mt-0">
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                                            </div>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                        <a href="#" class="comment-reply btn world-btn">Reply</a>
                                    </div>
                                    <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                </div>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                 <div class="col-12 col-lg-8">
                    <div class="post-a-comment-area mt-50">
                        <h5>留言板</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label><i class="icon-pencil"></i>&nbsp;输入您的昵称</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label><i class="icon-pencil"></i>&nbsp;输入您的邮箱账号</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label><i class="icon-edit"></i>&nbsp;畅所欲言</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn"><i class=" icon-ok"></i>&nbsp;提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- ============== Related Post ============== -->
            <div class="row mt-50">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="__STATIC__/index/img/blog-img/b1.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="__STATIC__/index/img/blog-img/b2.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="__STATIC__/index/img/blog-img/b7.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>