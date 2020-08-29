<?php
/**
 * @copyright (C)2016-2020 
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网公司简介 前端
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
        <title><?php echo WEB_COMPANYINFO; ?> - <?php echo WEB_INFO; ?></title>

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

            <!--引入头部文件-->
            <?php  include 'header.php'; ?>
         <!--================Header end =================-->


         <!--================nev end =================-->
             <!--引入导航文件-->
            <?php  include 'nev.php'; ?>

        <!--================nev Area =================-->
        
        
        <section class="banner_area" style="background: url(img/banner/single-page-banner2.jpg); background-size: cover">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>公司简介</h4>
                    <h4 class="banner_inner_text">全国首批水电站自动化云控服务提供商</h4>
                 
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Why Chose Us Area =================-->
        <section class="chose_video_area">
            <div class="chose_left_text">
                <div class="chose_text_inner">
                    <div class="main_b_title">
                        <h2>为何 <br class="title_br"> 选择我们?</h2>
                        <h6>欢迎打开我们的视频</h6>
                    </div>
                    <p>上海廉容自动化技术有限公司赣州分公司位于赣州经济技术开发区，是专业从事水力发电厂（站）、远程操控自动化系统及自动化仪器仪表的软硬件研发、制造、销售、安装、服务为一体的技术型企业。
    公司拥有自主研发生产的32位嵌入式励磁控制器、步进电机水轮机调速装置、远程操控自动化系统、水轮机辅助控制系统、微机保护装置、自动化测试仪器仪表及自动化元件等系列产品。具有超前理念、布局合理、功能齐全、稳定可靠、扩展灵活等特点。随着科学技术的不断发展，我们将不断创新、及时更新、完善服务来答谢新老客户对我公司一直以来的大力支持和厚爱。
    公司坚持以市场为导向，以技术为核心的经营战略，建立遍及全国、面向世界的销售网络，为国内外用户提供安全、可靠、稳定的产品和超值的售后服务。 </p>
                   
                </div>
            </div>
            <div class="chose_video_right">
                <div class="chose_video_inner">
                    <!-- <img src="img/video-1.jpg" alt="">
                    <a class="popup-youtube" href="https://v.youku.com/v_show/id_XNDQ4MDk0Njk4NA==.html?spm=a1z3jc.11711052.0.0&isextonly=1"><img src="img/icon/video-puse.png" alt=""></a> -->
                    <iframe height=548 width=800 src='https://player.youku.com/embed/XNDQ4MDk0Njk4NA==' frameborder=0 'allowfullscreen'></iframe>
                </div>
            </div>
        </section>
        <!--================End Why Chose Us Area =================-->
        
        <!--================Others Service Area =================-->
       
        <!--================End Others Service Area =================-->
        
        <!--================Service Single Area =================-->
        <section class="service_single_area">
            <div class="container">
                <div class="service_single_inner">
                    <div class="project_single_slider">
                     <!--    <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-s-2.jpg" alt=""></li>
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
                                <li><img src="img/project/project-single-slider/project-thumb-5.jpg" alt=""></li>
                                <li><img src="img/project/project-single-slider/project-thumb-6.jpg" alt=""></li>
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
                    <div class="row s_text_inner">
                        <div class="col-md-6">
                            <div class="left_service_desc">
                                <h4 class="project_title">公司介绍</h4>
                                <p> 廉容是行业内的领先企业，致力将自动化带去每一个电站构建水电行业的数字世界，我们在水电自动化领域为顾客提供高效、节能、安全可靠的产品、解决方案与服务、持续为客户创造价值。廉容坚持围绕客户需求持续创新、加大对产品的不断研发，做到精益求精，厚积薄发，推动水电行业的发展。

</p><br>
                            </div>


                            <div class="left_service_desc">
                                <h4 class="project_title">我的团队精神</h4>
                                <p> 企业文化：诚信立足，创新致远。<br>
                                    企业使命：承载社会使命，助力经济发展。<br>
                                    企业背景：建设成为掌握核心技术的世界领先水电企业。<br>
                                    基本理念：承载个人理想，追求社会进步，促进社会发展。<br>
                                    经营理念：创新产品技术，创建客户价值。<br>
                                    质量理念：以科技为先导，不断创新，为客户提供高性价比、高可靠性的产品和最满意的服务。<br>

</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>We are responsible</a></li>
                                    <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>We take everything under control</a></li>
                                    <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Presented in 26 countries</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our_skill_inner">
                                <h4 class="project_title">廉容自动化年报:</h4>
                                <div class="single_skill">
                                    <h3>2019销售额3000万</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>2019销售量500台</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">100</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>2020销售额9000万</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">67</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>2019销售量1500台</h3>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">73</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service_brochure">
                                <h4 class="project_title">Service Description</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download PDF</a>
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download DOC</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Service Single Area =================-->
        
        <!--================Our Latest Project Area =================-->
        <!-- <section class="our_latest_project">
            <div class="container">
                <h3 class="out_title">Our Latest projects</h3>
                <div class="our_latest_slider owl-carousel">
                    <div class="item">
                        <div class="project_item">
                            <img src="img/project/project-2/project-1.jpg" alt="">
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
                            <img src="img/project/project-2/project-2.jpg" alt="">
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
                            <img src="img/project/project-2/project-3.jpg" alt="">
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
        </section> -->
        <!--================End Our Latest Project Area =================-->
        
        <!--================Get Quote Area =================-->
        <section class="get_quote_area project_contact">
            <div class="container">
                <div class="pull-left">
                    <h3>选择廉容自动化 </h3>
                    <h4>今天就给我们打电话或者联系我们开始你的项目。 </h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn_black" href="#">联系客服</a>
                </div>
            </div>
        </section>
        <!--================End Get Quote Area =================-->
        



        <!--================Footer Area =================-->

            <!--==引入底部版权文件 ==-->

            <?php  include 'footer.php'; ?>
            
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
        <!--   <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>-->
        
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script> <!--名人名言轮播JS-->
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script><!--产品轮播JS-->
        <script src="vendors/isotope/isotope.pkgd.min.js"></script> <!--产品轮播JS-->
         <!-- <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>  -->
        <script src="vendors/counterup/waypoints.min.js"></script><!--公司简介进度条js-->
        <script src="vendors/counterup/jquery.counterup.min.js"></script> <!--公司简介进度条js-->
       <!-- <script src="vendors/flex-slider/jquery.flexslider-min.js"></script> 
        
        <!--gmaps Js-->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
       <!--  <script src="js/gmaps.min.js"></script> -->
        
        <script src="js/theme.js"></script> <!--主轮播图JS-->
    </body>
</html>