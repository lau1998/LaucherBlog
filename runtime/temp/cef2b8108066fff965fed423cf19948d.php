<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/webclose\view\index\index.html";i:1536631042;}*/ ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>网站已关闭</title><!-- Behavioral Meta Data -->
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
        <meta content="ThemeWagon" name="author">
        <meta content="The most spectacular coming soon template!" name="description">
        <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords"><!-- Open Graph Meta Data -->
        <meta content="The most spectacular coming soon template!">
        <meta content="ThemeWagon">
        <meta content="ThemeWagon">
        <meta content="website">
        <meta content="index.html"><!-- Twitter Card Meta Data -->
        <meta content="summary" name="twitter:card">
        <meta content="@themewagon" name="twitter:site">
        <meta content="@themewagon" name="twitter:creator">
        <meta content="ThemeWagon" name="twitter:title">
        <meta content="Imminent - The most spectacular coming soon template!" name="twitter:description">
        <link href="/static/jedate/web_clear/favicon.png" rel="shortcut icon" type="image/png">
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- CSS -->
        <link href="/static/jedate/web_clear/css/loader.css" rel="stylesheet" type="text/css">
        <link href="/static/jedate/web_clear/css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/static/jedate/web_clear/css/font-awesome.min.css">
        <link href="/static/jedate/web_clear/css/style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!-- Javascript -->
        <script>
        window.onload=function(){
            $('#countdown').countdown({
                date: "<?php echo $time; ?>",
                render: function(data) {
                  var el = $(this.el);
                  el.empty()
                    //.append("<div>" + this.leadingZeros(data.years, 4) + "<span>years</span></div>")
                    .append("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div>")
                    .append("<div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div>")
                    .append("<div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div>")
                    .append("<div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
                }
            });
            }
        </script>
        <style>
            video#bgvid { 
              position: fixed; right: 0; bottom: 0;
              min-width: 100%; min-height: 100%;
              width: auto; height: auto; z-index: -100;
              background-size: cover; 
            }
        </style>
        <script src="/static/jedate/web_clear/js/jquery.js"></script>
    </head>
    <body>
        <audio id="music1" controls="controls" autoplay="autoplay" preload id="music1" hidden>
            <source src="/static/jedate/web_clear/images/Sunburst.mp3" type="audio/mpeg" />
            <source src="/static/jedate/web_clear/images/Sunburst.ogg" type="audio/ogg" />
        </audio>
        <video poster="/static/jedate/web_clear/images/background.jpg" autoplay muted loop class="vidbacking" id="bgvid">
            <source src="/static/jedate/web_clear/images/bg.mp4" type="video/mp4">
        </video>
        <div class="preloader">
            <div class="loading">
                <h2>
                    Loading...
                </h2>
                <span class="progress"></span>
            </div>
        </div>
        <div class="wrapper">
            <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->

                <li class="layer" data-depth="0.10">
                    <div class="background">
                    </div>
                </li>

                <!-- Hero -->

                <li class="layer" data-depth="0.20">
                    <div class="title">
                        <h2>
                            IMMINENT
                        </h2>
                        <span class="line"></span>
                    </div>
                </li>

                <li class="layer" data-depth="0.25">
                    <div class="sphere">
                        <img alt="sphere" src="/static/jedate/web_clear/images/sphere.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.30">
                    <div class="hero">
                        <h1 id="countdown">
                            The most spectacular coming soon template!
                        </h1>

                        <p class="sub-title">
                            The most spectacular coming soon template!
                        </p>
                    </div>
                </li>
                <!-- Flakes -->

                <li class="layer" data-depth="0.40">
                <!-- 白云效果 -->
                   <!--  <div class="depth-1 flake1">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth1/flakes1.png">
                    </div> -->
                <!-- end -->
                    <div class="depth-1 flake2">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth1/flakes2.png">
                    </div>

                    <div class="depth-1 flake3">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth1/flakes3.png">
                    </div>

                    <div class="depth-1 flake4">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth1/flakes4.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.50">
                <!-- 白云效果 -->
                    <!-- <div class="depth-2 flake1">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth2/flakes1.png">
                    </div> -->
                <!-- end -->
                    <div class="depth-2 flake2">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth2/flakes2.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.60">
                    <div class="depth-3 flake1">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth3/flakes1.png">
                    </div>

                    <div class="depth-3 flake2">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth3/flakes2.png">
                    </div>

                    <div class="depth-3 flake3">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth3/flakes3.png">
                    </div>

                    <div class="depth-3 flake4">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth3/flakes4.png">
                    </div>
                </li>
                <!-- 白云效果 -->
               <!--  <li class="layer" data-depth="0.80">
                    <div class="depth-4">
                        <img alt="flake" src="static/jedate/web_clear/images/flakes/depth4/flakes.png">
                    </div>
                </li>

                <li class="layer" data-depth="1.00">
                    <div class="depth-5">
                        <img alt="flake" src="/static/jedate/web_clear/images/flakes/depth5/flakes.png">
                    </div>
                </li> -->
                <!-- Contact -->
                <!-- end -->
                <li class="layer" data-depth="0.20">
                    <div class="contact">
                        <ul class="icons">
                            <li>
                                <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                            </li>

                            <li>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            </li>

                            <li>
                                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                        More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
                        <a class="mail" href="mailto:info@example.com">info@example.com</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script src="/static/jedate/web_clear/js/plugins.js"></script> 
        <script src="/static/jedate/web_clear/js/jquery.countdown.min.js"></script> 
        <script src="/static/jedate/web_clear/js/main.js"></script>

    </body>
</html>