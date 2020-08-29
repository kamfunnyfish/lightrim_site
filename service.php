<?php
/**
 * @copyright (C)2016-2020 
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网客户案例  前端
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
        <title><?php echo WEB_SERVICE; ?> - <?php echo WEB_INFO; ?></title>

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
        <?php include 'header.php'; ?>


        <!--引入导航-->
        <?php include 'nev.php'; ?>


        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area" style="background: url(img/banner/single-page-banner2.jpg); background-size: cover">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>服务案例</h4>
                    <h4>合作共赢创造未来</h4>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Why Chose Us Area =================-->
       <!--  <section class="chose_video_area">
            <div class="chose_left_text">
                <div class="chose_text_inner">
                    <div class="main_b_title">
                        <h2>Why <br class="title_br"> Choose Us?</h2>
                        <h6>Play Welcome Video</h6>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Creative</a></li>
                        <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Honest And Dependable</a></li>
                        <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Quality Commitment</a></li>
                        <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Always Improving</a></li>
                    </ul>
                </div>
            </div>
            <div class="chose_video_right">
                <div class="chose_video_inner">
                    <img src="img/video-1.jpg" alt="">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5GL9JoH4Sws"><img src="img/icon/video-puse.png" alt=""></a>
                </div>
            </div>
        </section> -->
        <!--================End Why Chose Us Area =================-->
        
        <!--================Others Service Area =================-->
        <section class="other_service_area">
            <div class="container">
                <h4 class="project_title">我们的客户</h4>
                <div class="service2_inner other_service_slider owl-carousel">
                    <div class="item">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="img/icon/s2-icon-1.png" alt="">
                                        <img src="img/icon/s2-icon-hover-1.png" alt="">
                                    </div>
                                    <h4>NEW-CONSTRUCTION</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                                    <a class="view_btn" href="#">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="img/icon/s2-icon-2.png" alt="">
                                        <img src="img/icon/s2-icon-hover-2.png" alt="">
                                    </div>
                                    <h4>LOCATION</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                                    <a class="view_btn" href="#">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="img/icon/s2-icon-3.png" alt="">
                                        <img src="img/icon/s2-icon-hover-3.png" alt="">
                                    </div>
                                    <h4>REMODEL & REIMAGE</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                                    <a class="view_btn" href="#">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Others Service Area =================-->
        
        <!--================Service Single Area =================-->
        <section class="service_single_area">
            <div class="container">
                <div class="service_single_inner">
                    <!-- <div class="project_single_slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li><img src="img/service/江西省寻乌县某水电站1.jpg" alt=""></li>
                                <li><img src="img/service/江西省寻乌县某水电站2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li><img src="img/service/江西省寻乌县某水电站1.jpg" alt=""></li>
                                <li><img src="img/service/江西省寻乌县某水电站2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-7.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-8.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-9.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-5.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-6.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-7.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-8.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-9.jpg" alt=""></li>
                            </ul>
                            <div class="custom-navigation">
                                <a href="#" class="flex-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#" class="flex-next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row s_text_inner">
                        <div class="col-md-6">
                            <div class="left_service_desc">
                                <h4 class="project_title">Service Description</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum, tellus ipsum auctor quam, non faucibus dui nisl et elit. Morbi eu interdum velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit consequatur?</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>We are responsible</a></li>
                                    <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>We take everything under control</a></li>
                                    <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Presented in 26 countries</a></li>
                                </ul>
                            </div>
                        </div> -->
                       <!--  <div class="col-md-6">
                            <div class="our_skill_inner">
                                <h4 class="project_title">Service Description</h4>
                                <div class="single_skill">
                                    <h3>Repairing</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Painting</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">80</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Gardening</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">70</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Repairing</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">80</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service_brochure">
                                <h4 class="project_title">Service Description</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download PDF</a>
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download DOC</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Service Single Area =================-->
        
        <!--================Our Latest Project Area =================-->
        <section class="our_latest_project">
            <div class="container">
                <h3 class="out_title">我的案例</h3>
                <div class="our_latest_slider owl-carousel">
                    <div class="item">
                        <div class="project_item">
                            <img src="img/service/江西省寻乌县某水电站1.jpg" alt="" width="600" height="600">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project_item">
                            <img src="img/service/江西省寻乌县某水电站1.jpg" alt="" width="600" height="600">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project_item">
                            <img src="img/project/project-2/project-3.jpg" alt="" width="600" height="600">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project_item">
                            <img src="img/project/project-2/project-3.jpg" alt="" width="600" height="600">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Latest Project Area =================-->
        
        <!--================Get Quote Area =================-->
        <section class="get_quote_area project_contact">
            <div class="container">
                <div class="pull-left">
                    <h3>选择廉容自动化 </h3>
                    <h4>今天就给我们打电话或者联系我们开始你的项目。</h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn_black" href="#">联系客服</a>
                </div>
            </div>
        </section>
        <!--================End Get Quote Area =================-->
        


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