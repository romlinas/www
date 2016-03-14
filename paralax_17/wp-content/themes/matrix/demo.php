<?php
get_header();
?>
<!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/slide.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                              <span><?php _e('Welcome to ','matrix'); ?><strong><?php _e('Matrix','matrix'); ?></strong></span>
                              </h2>
                <h3 class="animated3 white">
                                <span><?php _e('The ultimate aim of your business','matrix'); ?></span>
                              </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large"><?php _e('Check Now','matrix'); ?></a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/slide.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4 white">
                                <span><strong><?php _e('Matrix','matrix'); ?></strong> <?php _e('for the highest','matrix'); ?></span>
                            </h2>
                <h3 class="animated5 white">
                              <span><?php _e('The Key of your Success','matrix'); ?></span>
                            </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large"><?php _e('Buy Now','matrix'); ?></a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/slide.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span><?php _e('The way of','matrix'); ?> <strong><?php _e('Success','matrix'); ?></strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span><?php _e('Why you are waiting','matrix'); ?></span>
                            </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#"><?php _e('Get Now','matrix'); ?></a><a class="animated4 slider btn btn-default btn-min-block" href="#"><?php _e('Live Demo','matrix'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Services Section -->
    <div class="section service">
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <div class="service-icon">
              <i class="fa fa-leaf icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('High Quality Theme','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>

            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <div class="service-icon">
              <i class="fa fa-desktop icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Full Responsive','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <div class="service-icon">
              <i class="fa fa-eye icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Retina Display Ready','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
            <div class="service-icon">
              <i class="fa fa-code icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Clean Modern Code','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 4 -->

          <!-- Start Service Icon 5 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="05">
            <div class="service-icon">
              <i class="fa fa-rocket icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Fast & Light Theme','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 5 -->

          <!-- Start Service Icon 6 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="06">
            <div class="service-icon">
              <i class="fa fa-css3 icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Css3 Transitions','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 6 -->

          <!-- Start Service Icon 7 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="07">
            <div class="service-icon">
              <i class="fa fa-download icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Free Updates','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 7 -->

          <!-- Start Service Icon 8 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="08">
            <div class="service-icon">
              <i class="fa fa-umbrella icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php _e('Help & Support','matrix'); ?></h4>
              <p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur','matrix'); ?></p>
            </div>
          </div>
          <!-- End Service Icon 8 -->

        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->
	
	<!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1><?php _e('This is Our Latest','matrix'); ?> <strong><?php _e('Work','matrix'); ?></strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center"><?php _e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore','matrix'); ?>
        <br/><?php _e('veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','matrix'); ?></p>


      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <div class="portfolio-item-content">
            <span class="header"><?php _e('Town winter 2013','matrix'); ?></span>
            <p class="body"><?php _e('web develpment, design','matrix'); ?></p>
          </div>
          <a id="port-img-url-1" class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri();?>/images/portfolio.jpg"><i class="fa fa-search-plus more"></i><img src="<?php echo get_template_directory_uri();?>/images/portfolio.jpg" alt="port" class="port_img"></a>
         <a href="#"><i class="fa fa-link more margin-left"></i></a>
        </li>
        <li>
          <div class="portfolio-item-content">
            <span class="header"><?php _e('Quarterly Musashino','matrix'); ?></span>
            <p class="body"><?php _e('web develpment, design','matrix'); ?></p>
          </div>
          <a id="port-img-url-2" class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri();?>/images/portfolio.jpg"><i class="fa fa-search-plus more"></i><img src="<?php echo get_template_directory_uri();?>/images/portfolio.jpg" alt="port" class="port_img"></a>
         <a href="#"><i class="fa fa-link more margin-left"></i></a>

        </li>
        <li>
          <div class="portfolio-item-content">
            <span class="header"><?php _e('Mainichi April 2014','matrix'); ?></span>
            <p class="body"><?php _e('web develpment, design','matrix'); ?></p>
          </div>
          <a id="port-img-url-3" class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri();?>/images/portfolio.jpg"><i class="fa fa-search-plus more"></i><img src="<?php echo get_template_directory_uri();?>/images/portfolio.jpg" alt="port" class="port_img"></a>
         <a href="#"><i class="fa fa-link more margin-left"></i></a>

        </li>
        <li>
          <div class="portfolio-item-content">
            <span class="header"><?php _e('Shitamachi Rocket','matrix'); ?></span>
            <p class="body"><?php _e('web develpment, design','matrix'); ?></p>
          </div>
          <a id="port-img-url-4" class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri();?>/images/portfolio.jpg"><i class="fa fa-search-plus more"></i><img src="<?php echo get_template_directory_uri();?>/images/portfolio.jpg" alt="port" class="port_img"></a>
         <a href="#"><i class="fa fa-link more margin-left"></i></a>

        </li>
        
      </ul>

      <!-- End Recent Projects Carousel -->


    </div>
    <!-- End Portfolio Section -->
	
	
	<div id="home-blog" class="section service">
    <div class="container">
        <div class="row">
            <!-- Start Big Heading -->
                <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                    <h1 id="blog-heading"><?php _e('Our Blog','matrix'); ?></h1>
                </div>
            <!-- End Big Heading -->
                <p class="text-center"
                   id="blog-desc"><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','matrix'); ?></p>
            <div class="col-md-12">
                <!-- Start Recent Posts Carousel -->
                <div class="latest-posts">
                    <h4 class="classic-title"><span></span></h4>

                    <div id="matrix_blog_section" class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">
						<!-- Posts 1 -->
						<div class="post-row item col-md-4 col-sm-6">
							<div class="left-meta-post">
								<div class="post-date"><span class="day">5</span><span
										class="month"><?php _e('Dec.','matrix')?></span></div>
								<div class="post-type"><i class="fa fa-picture-o"></i></div>
							</div>
							<h3 class="post-title"><a href="#"><?php _e('Link Post','matrix')?></a></h3>

							<div class="blog_img">
								<img
									src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"
									alt="matrix_image">
							</div>
							<div class="post-content">
								<p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'matrix'); ?></p>
							</div>
							<div class=""><a class="main-button" href="#"><?php _e('Read More', 'matrix'); ?> <i
										class="fa fa-angle-right"></i></a></div>
						</div>
						
						<!-- Posts 2 -->
						<div class="post-row item col-md-4 col-sm-6">
							<div class="left-meta-post">
								<div class="post-date"><span class="day">15</span><span
										class="month"><?php _e('Feb.','matrix')?></span></div>
								<div class="post-type"><i class="fa fa-picture-o"></i></div>
							</div>
							<h3 class="post-title"><a href="#"><?php _e('Gallery Post','matrix')?></a></h3>

							<div class="blog_img">
								<img
									src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"
									alt="matrix_image">
							</div>
							<div class="post-content">
								<p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'matrix'); ?></p>
							</div>
							<div class=""><a class="main-button" href="#"><?php _e('Read More', 'matrix'); ?> <i
										class="fa fa-angle-right"></i></a></div>
						</div>
						
						<!-- Posts 3 -->
						<div class="post-row item col-md-4 col-sm-6">
							<div class="left-meta-post">
								<div class="post-date"><span class="day">2</span><span
										class="month"><?php _e('Jan.','matrix')?></span></div>
								<div class="post-type"><i class="fa fa-picture-o"></i></div>
							</div>
							<h3 class="post-title"><a href="#"><?php _e('Link Post','matrix')?></a></h3>

							<div class="blog_img">
								<img
									src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"
									alt="matrix_image">
							</div>
							<div class="post-content">
								<p><?php _e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'matrix'); ?></p>
							</div>
							<div class=""><a class="main-button" href="#"><?php _e('Read More', 'matrix'); ?> <i class="fa fa-angle-right"></i></a></div>
						</div>
                    </div>
                </div>
                <!-- End Recent Posts Carousel -->
            </div>
        </div>
    </div>
	
    <div class="matrix_carousel-navi home-blog-content">
        <div id="port-prev1" class="matrix_carousel-prev"><i class="fa fa-arrow-left"></i></div>
        <div id="port-next1" class="matrix_carousel-next"><i class="fa fa-arrow-right"></i></div>
    </div>
	
</div>

<?php	
get_footer();
?>