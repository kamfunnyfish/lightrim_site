<?php
/**
 * @copyright (C)2016-2020 Hnaoyun Inc.
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网联系我们 前端
 */
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo WEB_CATANCTUS; ?> - <?php echo WEB_INFO; ?></title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/materialdesignicons.min.css" rel="stylesheet">
        
       <!-- Icon 顶部和底部矢量图 css  -->
        <link href="css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Bootstrap  主要css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">  <!--主轮播-->
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!--名人名言轮播-->
        
        <!-- 顶部导航和轮播翻页效果 css -->
        <link href="css/style.css" rel="stylesheet"> 
       
    </head>
    <body>
       
       
        <!--================Header Area =================-->
         <!--引入头部-->
        <?php  include 'header.php'; ?>

         <!--引入导航-->
        <?php  include 'nev.php'; ?>
        <!-- <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>(012) - 3456789</a>
                        <a href="#"><i class="fa fa-map-marker"></i>1234 Cafficic, California</a>
                        <a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                       
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                        </div>

                       
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="project-full-width.html">Project Full Width</a></li>
                                        <li><a href="project-grid-three-column.html">Project Grid 01</a></li>
                                        <li><a href="project-grid-two-column.html">Project Grid 02</a></li>
                                        <li><a href="project-three-column.html">Project Grid 03</a></li>
                                        <li><a href="project-single.html">Single Project</a></li>
                                    </ul>
                                </li>
                                <li><a href="service-single.html">Services</a></li>
                                <li><a href="#">about us</a></li>
                                <li class="active"><a href="blog-details.html">blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header> -->
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area" style="background: url(img/banner/single-page-banner3.jpg); background-size: cover">
            <div class="container">
                <div class="banner_inner_text">
                   <h4>联系我们</h4>
                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Details Area =================-->
        <section class="blog_details_area p_100">
            <div class="container">
                <div class="row blog_details_inner">
                    <div class="col-md-8">
                        
                         <div class="comment_list">
                            <h3>3  个留言</h3>
                            <div class="comment_list_inner">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/comment-user/comment-user-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>马云</h4></a>
                                        <h5>2020.08.28  5:36 PM</h5>
                                    </div>
                                    <p>嗯 还不错 加油.</p>
                                  <!--   <a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> -->
                                </div>
                                <div class="media reply">
                                    <div class="media-left">
                                        <img src="img/comment-user/comment-user-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>admin管理员</h4></a>
                                        <h5>2020.08.28  5:36 PM</h5>
                                    </div>
                                    <p>感谢你的评论！我们将继续努力.</p>
                                   <!--  <a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> -->
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/comment-user/comment-user-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>admin管理员</h4></a>
                                        <h5>2020.08.28  5:36 PM</h5>
                                    </div>
                                    <p>廉容官网V1.0.1发布上线了.</p>
                                    <!-- <a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> -->
                                </div>
                            </div>

                        </div>
                        <div class="comment_form_area">
                            <h3>留言</h3>
                            <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="您的姓名">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="您的邮箱">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="您的留言"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn btn-success btn-block">发布留言</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar_area">
                            <aside class="f_widget address_widget" >
                                <div class="f_w_title">
                                    <h3 style="color: black">办公地址</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker" style="color: black"></i>
                                        </div>
                                        <div class="media-body" >
                                            <h4>赣州市章贡区经济技术开发区迎宾大道宝福路38号赣州瑞嘉达电子有限公司三楼</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone" style="color: black"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>400-1616728</h4> 
                                            <!-- <p> </p> -->
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope" style="color: black"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>1366718626@qq.com</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="glyphicon glyphicon-globe " style="color: black"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>备案号码：沪ICP备16040000号​</h4>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Details Area =================-->
        
        <!--================Footer Area =================-->

         <!--引入底部版权-->
        <?php include 'footer.php'; ?>
        
        
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script><!--主轮播图JS--> 
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script> <!--主轮播图JS-->
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script> <!--主轮播图JS-->
        <!--底部字体和排版js-->
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>      
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script> <!--名人名言轮播JS-->
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script><!--产品轮播JS-->
        <script src="vendors/isotope/isotope.pkgd.min.js"></script> <!--产品轮播JS-->
    
        <script src="js/theme.js"></script> <!--主轮播图JS-->
    </body>
</html>