<?php
/**
 * @copyright (C)2016-2020 
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网产品中心前端
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
        <title><?php echo WEB_PROJECT; ?> - <?php echo WEB_INFO; ?></title>

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
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>产品中心</h4>
                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Our Project2 Area =================-->
        <section class="our_project2_area project_grid_two">
           <div class="container">
               <div class="main_c_b_title">
                    <h2>我们<br class="title_br">的产品</h2>
                    <h6>服务创造价值、存在造就未来</h6>
                </div>
                <ul class="our_project_filter">
                    <li class="active" data-filter="*"><a href="#">全部</a></li>
                    <li data-filter=".building"><a href="#">系列产品</a></li>
                    <li data-filter=".interior"><a href="#">云控系统</a></li>
                    <li data-filter=".design"><a href="#">自动化控制柜</a></li>
                  <!--   <li data-filter=".isolation"><a href="#">Isolation</a></li>
                    <li data-filter=".plumbing"><a href="#">Plumbing</a></li>
                    <li data-filter=".tiling"><a href="#">Tiling</a></li> -->
                </ul>
                <div class="row our_project_details">
                    <div class="col-md-6 building isolation interior">
                        <div class="project_item">
                            <img src="img/project_new/廉容自动化电站云监控平台.png" alt="" width="650" height="550">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>廉容自动化电站云控系统</h4></a>
                                        <p>通过互联网（有线网络/4G网络）进行集中远程监管，实现电站运行的智能自主发电、智能告警、设备大数据趋势预测等，实现电站的无人值班，从而形成电力生产的规模化运营，降低运营成本，进一步提升电站发电量，增强设备管理能力，延长设备使用寿命，大大提高电站的盈利水平。</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 building isolation tiling design">
                        <div class="project_item">
                            <img src="img/project_new/水力发电远程自动化控制柜.jpg" alt="" width="650" height="550">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>水力发电远程自动化控制柜</h4></a>
                                        <p>技术平台
1.程序主控制采用德国西门子工业可编程控制器（PLC控制器），安全可靠。
2.励磁控制器采用32位嵌入式ARM微处理器，运算速度快，调节精度高，低功耗特性使得励磁控制安全稳定。
3.调速器采用涡轮式步进电机机构，具有调节速度灵活可调，调节精度高。
4.工业平板一体电脑做人机界面，全数字化仪表，清晰直观，全5线电阻触摸屏操作简单。
5.远程数据同步可度可调，只要连接互联网，随时随地轻松了解电站运行情况，也可从容远程对电站机组进行调节控制。
</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 isolation tiling interior design plumbing">
                        <div class="project_item">
                            <img src="img/project/project-grid-two/project-g-two-3.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau-dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 building isolation tiling plumbing">
                        <div class="project_item">
                            <img src="img/project/project-grid-two/project-g-two-4.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau-dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 isolation tiling interior plumbing">
                        <div class="project_item">
                            <img src="img/project/project-grid-two/project-g-two-5.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau-dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="img/project/project-grid-two/project-g-two-6.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Jahanara Vila</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau-dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        <a class="view_btn" href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </section>
        <!--================End Our Project2 Area =================-->
        
        <!--================Get Quote Area =================-->
        <section class="get_quote_area yellow_get_quote">
            <div class="container">
                <div class="pull-left">
                    <h4>还在为你的水电站项目寻找服务和负担得起的设计师?</h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn_black" href="#">获取产品经理免费服务</a>
                </div>
            </div>
        </section>
        <!--================End Get Quote Area =================-->
        
        <!--================Footer Area =================-->
        <!--引入版权所有-->

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