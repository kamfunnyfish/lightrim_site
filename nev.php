<?php
/**
 * @copyright (C)2016-2020
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月27日
 *  官网导航  前端
 */
include 'config.php';
?>

 <!DOCTYPE html>
<html>

        <!-- Icon 顶部和底部矢量图 css  -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- 顶部导航和轮播翻页效果 css -->
        <link href="css/style.css" rel="stylesheet">  
        <!-- Bootstrap  主要css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        


         

       <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button> -->
                            <a class="navbar-brand" href="index.php"><img src="img/index/lightrim-logo.png" alt="" width="200" height="55"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                             <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown submenu active">
                                    <a href="index.php" class="dropdown-toggle" "><?php echo WEB_INDEX;?></a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="#">Home 01</a></li>
                                        <li><a href="#">Home 02</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown submenu">
                                    <a href="project.php" class="dropdown-toggle" ><?php echo WEB_PROJECT;?></a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="#">Project Full Width</a></li>
                                        <li><a href="project-grid-three-column.html">Project Grid 01</a></li>
                                        <li><a href="project-grid-two-column.html">Project Grid 02</a></li>
                                        <li><a href="project-three-column.html">Project Grid 03</a></li>
                                        <li><a href="project-single.html">Single Project</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="service.php"><?php echo WEB_SERVICE;?></a></li>
                                <li><a href="companyinfo.php"><?php echo WEB_COMPANYINFO;?></a></li>
                                <li><a href="newslist.php"><?php echo WEB_NEWS;?></a></li>
                                <li><a href="contactus.php"><?php echo WEB_CONTACTUS;?></a></li>
                                <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
          

    </div>
</html>