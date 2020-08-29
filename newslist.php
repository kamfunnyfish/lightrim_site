<?php
/**
 * @copyright (C)2016-2020 
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网新闻中心 前端
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
        <title><?php echo WEB_NEWS; ?> - <?php echo WEB_INFO; ?></title>

       <!-- Icon 顶部和底部矢量图 css  -->
        <link href="css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Bootstrap  主要css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">  <!--主轮播-->
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!--名人名言轮播-->
        
        <!-- 顶部导航和轮播翻页效果 css -->
        <link href="css/style.css" rel="stylesheet"> 

        <!-- 新闻中心列表CSS-->
        <link href="css/newslist.css" rel="stylesheet">
       
    </head>
    <body>
       
       
        <!--================Header Area =================-->
       
        <!--引入头部文件-->
       <?php include 'header.php'; ?>

        <!--引入导航文件-->
        <?php include 'nev.php'; ?>
        <!--================Header Area =================-->
        

          <section class="banner_area" style="background: url(img/banner/single-page-banner2.jpg); background-size: cover">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>新闻中心</h4>
                    
                </div>
            </div>
        </section>


        <!--================Banner Area =================-->
        <section class="service_single_area">
            <div class="container ">

                            <div class="left_service_desc ">
                                
                                <ul>
                                    <li>
                                    <a href="news.php?id=1"><i class="fa fa-home" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                    <li>
                                    <a href="news.php?id=2"><i class="fa fa-wrench" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                    <li>
                                    <a href="news.php?id=3"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                    <li>
                                    <a href="news.php?id=4"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                    <li>
                                    <a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                    <li>
                                    <a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要<span>2020-08-05</span></a>
                                    </li>
                                </ul>
                            </div>
                      
               
            </div>
        </section>


        <!--================新闻列表 结束 =================-->
        
        <!--================Footer Area =================-->

        <!--引入底部版权-->
        <?php include 'footer.php' ?>

       
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script><!--主轮播图JS-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="js/bootstrap.min.js"></script>  未知用途-->
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script> <!--主轮播图JS-->
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script> <!--主轮播图JS-->
        <!--底部字体和排版js-->
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
          <!-- <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>-->
        
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script> <!--名人名言轮播JS-->
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script><!--产品轮播JS-->
        <script src="vendors/isotope/isotope.pkgd.min.js"></script> <!--产品轮播JS-->
         <!-- <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>  -->
        <!-- <script src="vendors/counterup/waypoints.min.js"></script> -->
        <!-- <script src="vendors/counterup/jquery.counterup.min.js"></script> -->
        <!-- <script src="vendors/flex-slider/jquery.flexslider-min.js"></script> -->
        
        <!--gmaps Js-->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
       <!--  <script src="js/gmaps.min.js"></script> -->
        
        <script src="js/theme.js"></script> <!--主轮播图JS-->
    </body>
</html>