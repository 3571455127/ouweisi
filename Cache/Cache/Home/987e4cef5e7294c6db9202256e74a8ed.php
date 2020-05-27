<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>

    <meta name="description" content="<?php echo ($seo_description); ?>"/>

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

    <meta name="renderer" content="webkit">

    <meta name="viewport"

        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <!-- wap -->

    <meta name="wap-font-scale" content="no" />

    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="format-detection" content="telephone=yes" />

    <meta name="Robots" content="all">

    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">



    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <script src="__PUBLIC__/www/js/jquery.min.js"></script>

    <script src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>

    <script src="__PUBLIC__/www/js/swiper.min.js"></script>

    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

    <script src="__PUBLIC__/www/js/main.js"></script>



</head>



<body data-spy="scroll" data-target="#navbar-example">



    <header>

        <nav class="navbar navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>

                </div>

                <div id="navbar-example">

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-left">

                            <li class="active"><a href="#home">Home</a></li>

                            <li><a href="#product">Product</a></li>

                            <li><a href="#about">about Us</a></li>

                            <li><a href="#contact">Contact us</a></li>

                        </ul>

                        <div class="top-email navbar-right">
                            <!-- <a href="mailto:<?php echo ($email); ?>" target="_blank"><img src="__PUBLIC__/www/images/c-email.png" alt=""><?php echo ($email); ?></a> -->
                            <a href="mailto:<?php echo ($email); ?>" target="_blank"><img src="__PUBLIC__/www/images/b-email.png" alt=""><?php echo ($email); ?></a>
                        </div>
                        <!-- <div class="share navbar-right">

                            <ul class="clearfix">

                                <li class="linkedin"><a href="<?php echo ($ins); ?>" title="" target="_blank" rel="nofollow"><img

                                            src="__PUBLIC__/www/images/linkedin.png" alt=""></a>

                                </li>

                                <li class="facebook"><a href="<?php echo ($facebook); ?>" title="" target="_blank" rel="nofollow"><img

                                            src="__PUBLIC__/www/images/facebook.png" alt=""></a>

                                </li>

                                <li class="google"><a href="<?php echo ($google); ?>" title="" target="_blank" rel="nofollow"><img

                                            src="__PUBLIC__/www/images/google.png" alt=""></a>

                                </li>

                                <li class="youtube"><a href="<?php echo ($youtube); ?>" title="" target="_blank" rel="nofollow"><img

                                            src="__PUBLIC__/www/images/youtube.png" alt=""></a>

                                </li>

                            </ul>



                        </div> -->

                    </div>

                </div>





            </div>

        </nav>

    </header>
<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onClick="javascript :history.go(-1);" />
        </div>
    </div>
</div>

<script src="__PUBLIC__/www/js/jquery.js"></script>
<script>
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else

            javascript: history.back(-1);
    }
</script>

    <!-- footer -->
    <footer>
        <div class="copyright">JIANGMEN MEI FANG BIOTECHNOLOGY CO.,LTD</div>
        <div class="goTop">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>
    </body>

</html>