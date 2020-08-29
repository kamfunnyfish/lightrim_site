<?php
/**
 * @copyright (C)2016-2020 
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月27日
 *  官网首页 前端
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
        <title><?php  echo WEB_INFO;?></title>

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
      <header class="main_header_area transparent_menu">
          

            <!--注入 头部框架 header.html-->
            <!-- <iframe name="header_frame" marginwidth=0 marginheight=0 width=100% height=50 src="header.html" frameborder=0></iframe> -->
            <?php include 'header.php';?>


            <div class="main_menu_area" ">

            <!--引入导航栏框架-->
            <!-- <iframe  name="nev_frame" target=_top marginwidth=0 marginheight=0 width=100% height=100 src="nev.php" frameborder=0></iframe> -->
            <?php include 'nev.php';?>
           </div>
       </header>   


        <!--================Main Slider Area  轮播图 =================-->
      
         <!--  <iframe  name="slide_frame" marginwidth=0 marginheight=0 width=100% height=1096 src="slide.html" frameborder=0></iframe> -->
        <!--引入主体 main.html-->
        <iframe name="main_frame" marginwidth=0 marginheight=0 src="main.php" width=100% height=4950 frameborder=0></iframe>
        <!--================Subscrib Form Area =================-->
        <section class="subscribe_area">
            <div class="container">
                <div class="pull-left">
                    <h4>今天就订阅我们的电子邮件通讯吧！</h4>
                </div>
                <div class="pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="输入您的邮箱地址...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Subscrib Form Area =================-->
        
        <!--================Footer Area =================-->
        <!--引入底部版权栏 footer.html-->
       <!--  <iframe name="footer_frame" marginwidth=0 marginheight=0 src="footer.html" width=100% height=552 frameborder=0></iframe> -->
        <?php include 'footer.php';?>

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