<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:85:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\index\index.html";i:1534771367;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_meta.html";i:1535605723;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_header.html";i:1536575542;s:91:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\hero_area.html";i:1535958476;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\content.html";i:1536908934;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_footer.html";i:1535981155;s:85:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\templet\_js.html";i:1535965294;}*/ ?>
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
    <!-- ********** Hero Area Start **********  头部幻灯片 **********-->
        <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?>
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(__ROOT__/uploads/banner/<?php echo $img['image']; ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="single-blog-title text-center">
                                <!-- Catagory -->
                               <article >
                                <h4 style="color:#F0FFF0;font-family: 幼圆">
                                    <script type="text/javascript" src="https://unin.vip/api/yiju/api.php?code=js"></script>
                                    <script>yiju()</script>
                                </h4>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->
    <!-- *************** content内容 ************** -->
    <div class="main-content-wrapper section-padding-0">
        <div class="container">
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title ">
                            <h5><i class=" icon-file-alt "></i> &nbsp;最新的文章</h5>
                        </div>
                        <liu id="cheng">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig image-shadow" data-wow-delay="0.2s" >
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <a href="__ROOT__/blog_articles?aid=<?php echo $vo['id']; ?>&author=<?php echo $vo['user_nickname']; ?>" target="_blank">
                                    <img class="img-fluid" src="__ROOT__/uploads/article/fm_img/<?php echo $vo['thumbnail']; ?>"  alt="">
                                    </a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="__ROOT__/blog_articles?aid=<?php echo $vo['id']; ?>&author=<?php echo $vo['user_nickname']; ?>" class="headline" target="_blank">
                                        <h5><?php echo $vo['post_title']; ?></h5>
                                    </a>
                                    <a href="__ROOT__/blog_articles?aid=<?php echo $vo['id']; ?>&author=<?php echo $vo['user_nickname']; ?>" target="_blank">
                                    <p style="  -webkit-line-clamp: 2;
                                                overflow: hidden;
                                                display: -webkit-box;
                                                -webkit-box-orient: vertical;
                                                white-space: normal;">
                              
                                  <?php echo $vo['contents']; ?>   
                                
                                    </p></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author"><?php echo $vo['user_nickname']; ?></a> 发布于 <a href="#" class="post-date"><script>
                                            var ti =  new Date(parseInt(<?php echo $vo['published_time']; ?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
                                            document.write(ti);//传值到html
                                        </script></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </liu>
                        <div style="display: none;">
                        <?php echo $page; ?></div>
                         <!-- Load More btn -->
                        <div class="row">
                            <div class="col-12">
                                <div class="load-more-btn mt-50 text-center" id="more">
                                    <a href="javascript:;" class="btn world-btn " onclick="more(document.getElementById('next').innerHTML)" ><i class="icon-spinner icon-spin"></i>&nbsp;加载更多...</a>
                                </div>
                                <span id="next" style="display:none;" >2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="title ">
                        </div>
                        <!-- Widget Area 阅读最多 -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true" ><i class="fa fa-hand-peace-o"></i>&nbsp;<span data-toggle="tooltip" title="此内容依据浏览量">热点文章</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false"><i class="fa fa-thumbs-o-up"></i>&nbsp;<span data-toggle="tooltip" data-placement="right" title="你点了我就不会让你失望：）">推存文章</span></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                   <div class="col-12">
                                    <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                                        <!-- ========= Single Catagory Slide ========= -->
                                        <div class="single-cata-slide">
                                            <div class="row">
                                                <?php if(is_array($fires) || $fires instanceof \think\Collection || $fires instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($fires) ? array_slice($fires,1,6, true) : $fires->slice(1,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fire): $mod = ($i % 2 );++$i;?>
                                                <div class="col-12 col-md-12">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="__ROOT__/uploads/article/fm_img/<?php echo $fire['thumbnail']; ?>" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5><i class="fa fa-hand-peace-o"></i>&nbsp;<?php echo $fire['post_title']; ?></h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?php echo $fire['user_nickname']; ?></a> 发布于 <a href="#" class="post-date"><script>
                                                                var tim =  new Date(parseInt(<?php echo $fire['published_time']; ?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
                                                                document.write(tim);//传值到html
                                                                </script></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </div>
                                        <!-- ========= Single Catagory Slide ========= -->
                                        <div class="single-cata-slide">
                                            <div class="row">
                                               <?php if(is_array($fires) || $fires instanceof \think\Collection || $fires instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($fires) ? array_slice($fires,7,13, true) : $fires->slice(7,13, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fire2): $mod = ($i % 2 );++$i;?>
                                                <div class="col-12 col-md-12">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="__ROOT__/uploads/article/fm_img/<?php echo $fire2['thumbnail']; ?>" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5><i class="fa fa-hand-peace-o"></i>&nbsp;<?php echo $fire2['post_title']; ?></h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?php echo $fire2['user_nickname']; ?></a> 发布于 <a href="#" class="post-date"><script>
                                                                var time =  new Date(parseInt(<?php echo $fire2['published_time']; ?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
                                                                document.write(time);//传值到html
                                                                </script></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                <div class="row">

                                    <div class="col-12 col-md-12">
                                        <!-- Single Blog Post -->
                                        
                                        <?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rec): $mod = ($i % 2 );++$i;?>
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__ROOT__/uploads/article/fm_img/<?php echo $rec['thumbnail']; ?>" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5><i class="fa fa-thumbs-o-up"></i>&nbsp;<?php echo $rec['post_title']; ?></h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $rec['user_nickname']; ?></a> 发布于 <a href="#" class="post-date"><script>
                                                                var times =  new Date(parseInt(<?php echo $rec['published_time']; ?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
                                                                document.write(times);//传值到html
                                                                </script></a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                       
                                   
                                    </div>
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
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->
                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">Don’t Miss</li>

                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Style hunter</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Vogue</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Health &amp; Fitness</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Travel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">Gadgets</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab" aria-controls="world-tab-7" aria-selected="false">Sports</a>
                                    <a class="nav-link" id="tab8" data-toggle="tab" href="#world-tab-8" role="tab" aria-controls="world-tab-8" aria-selected="false">Politices</a>
                                    <a class="nav-link" id="tab9" data-toggle="tab" href="#world-tab-9" role="tab" aria-controls="world-tab-9" aria-selected="false">Features</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

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

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-6" role="tabpanel" aria-labelledby="tab6">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-7" role="tabpanel" aria-labelledby="tab7">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-8" role="tabpanel" aria-labelledby="tab8">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-9" role="tabpanel" aria-labelledby="tab9">
                                <div class="row">
                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b10.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b11.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b12.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b13.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
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
                    </div>

                    <!-- Catagory Area -->
                    <div class="world-catagory-area mt-50">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="title">What's Trending</li>

                            <li class="nav-item">
                                <a class="nav-link active" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">All</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Style hunter</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab12" data-toggle="tab" href="#world-tab-12" role="tab" aria-controls="world-tab-12" aria-selected="false">Vogue</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab13" data-toggle="tab" href="#world-tab-13" role="tab" aria-controls="world-tab-13" aria-selected="false">Health &amp; Fitness</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab14" data-toggle="tab" href="#world-tab-14" role="tab" aria-controls="world-tab-14" aria-selected="false">Travel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab15" data-toggle="tab" href="#world-tab-15" role="tab" aria-controls="world-tab-15" aria-selected="false">Gadgets</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" id="tab16" data-toggle="tab" href="#world-tab-16" role="tab" aria-controls="world-tab-16" aria-selected="false">Sports</a>
                                    <a class="nav-link" id="tab17" data-toggle="tab" href="#world-tab-17" role="tab" aria-controls="world-tab-17" aria-selected="false">Politices</a>
                                    <a class="nav-link" id="tab18" data-toggle="tab" href="#world-tab-18" role="tab" aria-controls="world-tab-18" aria-selected="false">Features</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2">

                            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12">
                                        <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                                            <!-- ========= Single Catagory Slide ========= -->
                                            <div class="single-cata-slide">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ========= Single Catagory Slide ========= -->
                                            <div class="single-cata-slide">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
                                                                <!-- Post Meta -->
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <!-- Single Blog Post -->
                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                                            </div>
                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                <a href="#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>
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
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-12" role="tabpanel" aria-labelledby="tab12">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-13" role="tabpanel" aria-labelledby="tab13">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-14" role="tabpanel" aria-labelledby="tab14">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-15" role="tabpanel" aria-labelledby="tab15">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-16" role="tabpanel" aria-labelledby="tab16">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-17" role="tabpanel" aria-labelledby="tab17">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="world-tab-18" role="tabpanel" aria-labelledby="tab18">
                                <div class="row">

                                    <div class="col-12 col-md-6">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b3.jpg" alt="">
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

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b14.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b15.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b16.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="__STATIC__/index/img/blog-img/b17.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
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
                    </div>

                </div>
            </div>

            <!-- ========== Sidebar Area ========== -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">About World</h5>
                        <div class="widget-content">
                            <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
                        </div>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Top Stories</h5>
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
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Stay Connected</h5>
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
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Today’s Pick</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post todays-pick">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="__STATIC__/index/img/blog-img/b22.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content px-0 pb-0">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="__STATIC__/index/img/blog-img/b4.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="__STATIC__/index/img/blog-img/b5.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="__STATIC__/index/img/blog-img/b6.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
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
</div>
<script>
//给id为list的元素代理绑定下面所有的a元素"click"事件
   function more(p) {
    var pageNum=($(".pagination li").length)-2;//分页总数
    pp=document.getElementById("next").innerHTML=parseInt(p)+1;
    var index = layer.load(0, {shade: false});
    $.ajax({
        type:'GET',
        url:"<?php echo url('ajax'); ?>",
        data:{page:pp},
        dataType:'json',
        success:function(data){
            layer.close(index);
            for(var i = 0; i < data.length; i++){
                // $('body').after(data);
                var date = new Date(data[i].published_time); 
                var t =  new Date(parseInt(data[i].published_time) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
                 // alert(t);
                var l=' <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig image-shadow" data-wow-delay="0.2s" ><div class="post-thumbnail"><a href="__ROOT__/blog_articles?aid='+data[i].id+'&author='+data[i].user_nickname+'" target="_blank"><img class="img-fluid" src="__ROOT__/uploads/article/fm_img/'+data[i].thumbnail+'" alt=""></a></div><div class="post-content"><a href="__ROOT__/blog_articles?aid='+data[i].id+'&author='+data[i].user_nickname+'" class="headline" target="_blank"><h5>'+data[i].post_title+'</h5></a><a href="__ROOT__/blog_articles?aid='+data[i].id+'&author='+data[i].user_nickname+'" target="_blank"><p style="  -webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;white-space: normal;">'+data[i].contents+'</p></a><div class="post-meta"><p><a href="#" class="post-author" target="_blank">'+data[i].user_nickname+'</a> 发布于 <a href="#" class="post-date">'+t+'</a></p> </div></div></div>';
               //  var o=data[i].contents;
               // alert(data[i].published_time);
               $("liu").append(l);
                if(pp >= pageNum){
                    document.getElementById("more").innerHTML="<strong> 已经到底了！兄弟。看看其他的吧：）</strong>";
                    // layer.msg('已经到底了兄弟!',{icon:1,time:2000});
                }
            }
        }
    });
        //阻止默认事件和冒泡，即禁止跳转
        return false;
    }
</script>
    <!-- *************** content内容 End *************** -->
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