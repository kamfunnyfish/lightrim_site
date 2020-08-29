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
       
    </head>
    <body>
       
       
        <!--================Header Area =================-->
       
        <!--引入头部文件-->
       <?php include 'header.php'; ?>

        <!--引入导航文件-->
        <?php include 'nev.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area" style="background: url(img/banner/single-page-banner3.jpg); background-size: cover">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>了解最新公司动态及行业资讯</h4>
                    <!-- <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="blog-details.html">Blog detail with right sidebar</a></li>
                    </ul> -->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Details Area =================-->
        <section class="blog_details_area p_100">
            <div class="container">
                <div class="row blog_details_inner">
                    <div class="col-md-8">
                        <div class="blog_details_img">
                            <img src="img/blog/blog-details-1.jpg" alt="">
                            <div class="b_date">
                                <h3>28</h3>
                                <h5>2020.08</h5>
                            </div>
                        </div>
                        <div class="blog_d_text">
                            <h6>发布 <a href="#">Admin</a><span><i class="fa fa-eye" aria-hidden="true"></i>查看人数1225</span></h6>
                            <a href="#"><h3>小水电在反垄断竞争中不断成长壮大和四省调研报告内容提要</h3></a>
                            <p>新中国成立50年来，特别是改革开放20年来，小水电从无到有、从小到大，从单站发电到联网运行，从建设县电网到建设农村水电初级电气化，从小、散、弱到资产重组、结构调整、制度创新和建设以改善生态、保护环境，促进农村经济与社会全面发展，达到和超过小康水平为目标的中国水电农村电气化，发生了翻天覆地的变化。小水电已由建国初期星星点点的农村“夜明珠”，发展到现在发电装机超过3000万千瓦，年发电量达到1000亿千瓦时，担负着全国近1/2地域、1/3县、1/4人口供电任务的以中小水电为主体的水利地方电业。.</p>
                            <p>  小水电源于农村，源于消除贫困，是中西部地区、少数民族地区和东部山区人民的一大创举，始终得到党和国家领导人的高度重视、亲切关怀，是不断冲破束缚生产力发展的生产关系，促进农村社会生产力解放和发展的改革先行者；我国开发小水电，使用清洁廉价可再生绿色能源建设有中国特色农村电气化的经验，得到国际社会的高度评价和广泛赞扬，为推广中国的经验，联合国将国际小水电中心设在中国，成为设在我国迄今唯一的一个联合国机构，因此它又是开放的先锋。它的发展，时刻也没有离开过党和国家“坚持两条腿走路”、“充分调动和发挥多个积极性”等方针政策的指引。回顾小水电的发展历程，出现过多次大的困难，如60年代的“一平二调”，70年代的“大电到小电倒”，80年代的所谓“联营”、“代管”，以及90年代的所谓“全面代管”、“控股股改”，无一不是依靠党和国家方针政策的鼓励、支持和指引，通过反对垄断、克服困难、接受磨练，进一步补充完善并坚持执行行之有效的中小水电电气化建设方针政策，而走出困境，并实现新的突破，迈上一个个新的台阶的！ </p>
                           
                            <!-- <div class="quote_text">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui.</p>
                            </div> -->
                        </div>
                        <!-- <div class="image_text">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/blog-d-s-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem?</p>
                                </div>
                            </div>
                            <ul class="img_list">
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Crisp fresh iconic elegant timeless clean perfume</a></li>
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Neck straight sharp silhouette and dart detail</a></li>
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Machine wash cold slim fit premium stretch selvedge denim comfortable low waist</a></li>
                            </ul>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                            <h5>Tag: </h5>
                            <ul class="img_tages">
                                <li><a href="#">Android,</a></li>
                                <li><a href="#">iPhone,</a></li>
                                <li><a href="#">Design,</a></li>
                                <li><a href="#">MockUp,</a></li>
                                <li><a href="#">Appsy</a></li>
                            </ul>
                        </div> -->
                        <div class="like_post">
                            <h3>你可能也喜欢</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="like_post_item">
                                        <a href="#"><img src="img/blog/like-post-1.jpg" alt=""></a>
                                        <h5>其他的一些新闻。。。。</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="like_post_item">
                                        <a href="#"><img src="img/blog/like-post-1.jpg" alt=""></a>
                                        <h5>其他的一些新闻。。。。</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="comment_list">
                            <h3>3 comments</h3>
                            <div class="comment_list_inner">
                            	<div class="media">
									<div class="media-left">
										<img src="img/comment-user/comment-user-1.jpg" alt="">
									</div>
									<div class="media-body">
										<a href="#"><h4>You may also like</h4></a>
										<h5>MAY 25, 2017 AT 5:36 PM</h5>
									</div>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									<a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
								<div class="media reply">
									<div class="media-left">
										<img src="img/comment-user/comment-user-2.jpg" alt="">
									</div>
									<div class="media-body">
										<a href="#"><h4>You may also like</h4></a>
										<h5>MAY 25, 2017 AT 5:36 PM</h5>
									</div>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									<a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
								<div class="media">
									<div class="media-left">
										<img src="img/comment-user/comment-user-1.jpg" alt="">
									</div>
									<div class="media-body">
										<a href="#"><h4>You may also like</h4></a>
										<h5>MAY 25, 2017 AT 5:36 PM</h5>
									</div>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									<a class="cm_reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
                            </div> 
                        </div>-->
                       <!--  <div class="comment_form_area">
                            <h3>Leave a reply</h3>
                            <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Your Comment"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_btn form-control">Post Comment</button>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar_area">
                            <aside class="right_widget r_post_widget">
                                <div class="r_w_title">
                                    <h3>热门文章</h3>
                                </div>
                                <div class="r_post_inner">
                                    <div class="r_post_item">
                                        <img src="img/blog/trending-post/t-post-1.jpg" alt="">
                                        <a href="#"><p>But I must explain to you how all this mistaken idea</p></a>
                                    </div>
                                    <div class="r_post_item">
                                        <img src="img/blog/trending-post/t-post-2.jpg" alt="">
                                        <a href="#"><p>But I must explain to you how all this mistaken idea</p></a>
                                    </div>
                                    <div class="r_post_item">
                                        <img src="img/blog/trending-post/t-post-3.jpg" alt="">
                                        <a href="#"><p>But I must explain to you how all this mistaken idea</p></a>
                                    </div>
                                </div>
                            </aside>
                           <!--  <aside class="right_widget r_social_widget">
                                <div class="r_w_title">
                                    <h3>we are social</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </aside>
                            <aside class="right_widget r_twitter_widget">
                                <div class="r_w_title">
                                    <h3>twitter feed</h3>
                                </div>
                                <div class="tweets_feed"></div>
                            </aside> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Details Area =================-->
        
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