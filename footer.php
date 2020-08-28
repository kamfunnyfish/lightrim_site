<?php
/**
 * @copyright (C)2016-2020 Hnaoyun Inc.
 * @author liujianqiang
 * @email mrbrocade@163.com
 * @date 2020年08月28日
 *  官网框架文件  底部 前端
 */
include 'config.php';
?>
<!DOCTYPE html>
<html>
 		<!-- Icon 顶部和底部矢量图 css  -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- 顶部导航和轮播翻页效果底部颜色和样式 css -->
        <link href="css/style.css" rel="stylesheet">  
       <!-- Bootstrap  主要css -->
       <link href="css/bootstrap.min.css" rel="stylesheet">   
       <!--底部字体和排版js-->
       <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>

 <footer class="footer_area">
            <div class="footer_widgets_area footer_bg">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img src="img/index/footer-logo.png" alt="" width="190" height="40">
                                <p>上海廉容自动化技术有限公司赣州分公司位于赣州经济技术开发区，是专业从事水力发电厂（站）、远程操控自动化系统及自动化仪器仪表的软硬件研发、制造、销售、安装、服务为一体的技术型企业。</p>
                                <ul>
                                  <!--   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget recent_widget">
                                <div class="f_w_title">
                                    <h3>联系我们</h3>
                                </div>
                                <div class="recent_w_inner">
                                    <div class="media">
                                        <!-- <div class="media-left">
                                            <img src="img/blog/recent-post/recent-1.png" alt="">
                                        </div> -->
                                        <div class="media-body">
                                            <a href="#"><p>QQ:<?php echo WEB_QQ;?></p></a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <!-- <div class="media-left">
                                            <img src="img/blog/recent-post/recent-2.png" alt="">
                                        </div> -->
                                        <div class="media-body">
                                            <a href="#"><p>微信：<?php echo WEB_WECHAT;?></p></a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <!-- <div class="media-left">
                                            <img src="img/blog/recent-post/recent-2.png" alt="">
                                        </div> -->
                                        <div class="media-body">
                                            <a href="#"><p>微信公众号：廉容自动化</p></a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>办公地址</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo WEB_COMPANY_SITE;?></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo WEB_PHONE;?></p>
                                            <!-- <p> </p> -->
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo WEB_EMAIL;?></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="glyphicon glyphicon-globe"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>备案号码：<?php echo WEB_ICP;?></p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>拨打我们的电话</h5>
                                <h4><?php echo WEB_PHONE;?></h4>
                                <h5>或</h5>
                                <a class="get_bg_btn" href="#">咨询客服</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <div class="copy_right_inner">
                    	<div class="pull-left">
                    		<h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo WEB_INFO;?>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                    	</div>
                    	<div class="pull-right">
                    		<ul class="footer_menu">
                    			<li class="active"><a href=""><?php echo WEB_INDEX;?></a></li>
                    			<li><a href="">使用条款</a></li>
                    			<li><a href="">免责声明</a></li>
                    			<li><a href=""><?php echo WEB_CONTACTUS;?></a></li>
                    		</ul>
                    	</div>
                    </div>
                </div>
            </div>
        </footer>
</html>