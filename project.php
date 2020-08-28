<?php
/**
 * @copyright (C)2016-2020 Hnaoyun Inc.
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网产品中心前端
 */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>产品中心 - 上海廉容自动化技术有限公司赣州分公司</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/materialdesignicons.min.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       
        <!--================Header Area =================-->
        <!--引入头部-->
        <?php include 'header.php'; ?>

        <!--引入导航-->
        <?php include 'nev.php'; ?>
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
                                <li class="dropdown submenu active">
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
                                <li><a href="blog-details.html">blog</a></li>
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



        <!-- <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget recent_widget">
                                <div class="f_w_title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/blog/recent-post/recent-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under con-struction</p></a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/blog/recent-post/recent-2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under con-struction</p></a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>1234 Cafficic, California, USA</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>(012) 3456789 </p>
                                            <p>(012) 3456789 </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>info@domain.com</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>Give Us A Call</h5>
                                <h4>(012) 3456789</h4>
                                <h5>or</h5>
                                <a class="get_bg_btn" href="#">GET A QUOTE</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</h4>
                </div>
            </div>
        </footer> -->
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/flex-slider/jquery.flexslider-min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>