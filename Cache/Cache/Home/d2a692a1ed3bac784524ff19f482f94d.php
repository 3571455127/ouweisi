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
<div class="index">

        <!-- banner  -->
        <div id="home" class="banner">
            <!-- pc -->
            <div class="pc-banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

<?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-btn">
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>

                </div>
            </div>
            <!-- wap -->
            <div class="wap-banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

<?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- product -->
        <div>
            <a id="product"></a>
            <div class="product">
                <div class="container">
                    <div class="row">
                        <h3>Prduct</h3>
                        <div class="list">
                            <!-- pc -->
                            <div class="pc-product">
            <?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 ); if($r['radis']==1) : ?>
                                <!-- start -->
                                <!-- 左图右文 -->
                                <div class="box clearfix">
                                    <div class="imgs col-lg-6 col-md-6 col-sm-6"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div>
                                    <div class="txt  col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                    </div>
                                </div>
                    <?php else :?>
                                <!-- 左文右图 -->
                                <div class="box clearfix">
                                    <div class="txt  col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                    </div>
                                    <div class="imgs  col-lg-6 col-md-6 col-sm-6"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div>
                                </div>
                                <!-- end -->
                    <?php endif; endforeach; endif;?>

                            </div>

                            <!-- wap -->
                            <div class="wap-product">
<?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="box clearfix">
                                    <div class="imgs col-lg-6 col-md-6 col-sm-6"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div>
                                    <div class="txt  col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                    </div>
                                </div>
                                <!-- end --><?php endforeach; endif;?>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!-- about -->
        <div>
            <a id="about"></a>
            <div class="about">
                <div class="container">
                    <div class="row">
                        <?php getcatvar('page','id = 74','cont');?>
                    </div>
                </div>
            </div>
        </div>

        <!-- certificate -->
        <div class="certificate">
            <div class="container">
                <div class="row">
                    <?php  $_result=M("Case")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  AND status=1  AND catid=77")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div><?php endforeach; endif;?>
                </div>
            </div>
        </div>


        <!-- contact -->
        <div>
            <a id="contact"></a>
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <h3>contact us</h3>
                        <div class="contact-content clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&a=message">
                                    <div class="box clearfix">
                                        <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-12">Name<span> * </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"><input type="text" name="name"
                                                id=""></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-12">Email<span> * </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"><input type="text"
                                                name="email" id=""></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-12">WhatsApp or WeChat<span> *
                                            </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"><input type="text"
                                                name="phone" id=""></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-12"> Message <span> * </span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <textarea id="" cols="30" rows="10" name="message"></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" value="SUBMIT" class="submit-btn">
                                </form>
                            </div>
                            <div class="info col-lg-6 col-md-6 col-sm-6">
                                <h6><?php echo ($name); ?></h6>
                                <ul class="vinculum">
                                    <li><?php echo ($address); ?></li>
                                    <li><a href="mailto:<?php echo ($email); ?>" target="_blank"><?php echo ($email); ?></a></li>
                                    <li><?php echo ($phone); ?></li>
                                    <li><?php echo ($domestic_fax); ?></li>
                                    <li>Lydia Liu</li>
                                    <li>+86 13686529747</li>
                                </ul>
                                <!-- <ul class="contact-share clearfix">
                                    <li class="linkedin"><a href="<?php echo ($ins); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="/Public/www/images/contact-linkedin.png" alt=""></a>
                                    </li>
                                    <li class="facebook"><a href="<?php echo ($facebook); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="/Public/www/images/contact-facebook.png" alt=""></a>
                                    </li>
                                    <li class="google"><a href="<?php echo ($google); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="/Public/www/images/contact-google.png" alt=""></a>
                                    </li>
                                    <li class="youtube"><a href="<?php echo ($youtube); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="/Public/www/images/contact-youtube.png" alt=""></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>



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