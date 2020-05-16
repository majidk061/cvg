 
<?php $__env->startSection('css'); ?>
<style type="text/css">
  .carousel-height{
  height: 486px;
} 
 .testi-section{
  background: url('<?php echo e(asset('public/assets/img/Sustainable development.webp')); ?>');
  background-size: cover;
 } 
 .testi-heading{
  color: white;
  font-size: 43px;
  font-weight: bold;
 }
 span.t-name {
    color: white;
    font-size: 15px;
    font-weight: bold;
    background-color: gray;
    padding: 1px 16px;
}
.col-center {
  margin: 0 auto;
  float: none !important;
}
 
.carousel .item {
  color: #f26927;
  font-size: 14px;
    text-align: center;
  overflow: hidden;
    min-height: 190px;
}


.carousel .testimonial {
 padding: 2px 0 0px;
color: white;
font-size: 16px;
font-weight: 600;
line-height: 1.3;
}
.carousel .overview { 
  font-style: italic;
}
.carousel .overview b {
  text-transform: uppercase;
  color: #7AA641;
}
.carousel .carousel-control {
  width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
  background: none;
}
.carousel-control i {
    font-size: 68px;
  line-height: 42px;
    position: absolute;
    display: inline-block;
  color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
 
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 1px 3px;
  border-radius: 50%;
}
.carousel-indicators li { 
  background: #999;
  border-color: transparent;
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {  
  background: #555;   
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
</style>
<link href="<?php echo e(asset('public/new/assets/vendor/nivo-slider/css/nivo-slider.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/new/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/new/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo e(asset('public/new/assets/css/style.css')); ?> " rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php 
        $i = 1;
         ?>
        <?php $__currentLoopData = $result["slides"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($slides->image); ?>" alt="" title="#slider-direction-<?php echo e($i); ?>" />
         <?php 
        $i = $i+1;
         ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <!-- direction 1 -->
      <?php 
      $i = 1;
       ?>
      <?php $__currentLoopData = $result["slides"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div id="slider-direction-<?php echo e($i); ?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                 
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2" style="color: #fff;"><?php echo e($slides->title); ?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      $i = $i+1;
       ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
    </div>
  </div><!-- End Slider -->

  </section><!-- End Hero -->
   
  <main id="main">
     
    
    <!-- ======= About Section ======= -->
     
    <section id="features" class="features section-bg">
      <div class="container">

        <!--<div class="section-title">-->
        <!--  <h2 data-aos="fade-in"><?/*=$result['pages'][0]->name*/?></h2>-->
        <!--</div>-->
        <div class="row content">
          <div class="col-md-5 order-2 order-md-1" data-aos="fade-right">
            <img src="<?php echo e(asset('public/assets/img/Project Managers.webp')); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-1 order-md-2 text-justify" data-aos="fade-left">
            <?=stripslashes($result['pages'][0]->description)?> 
          </div>
          
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
   <!--  <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in"><?=$result['pages'][0]->name?></h2>
           
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-12 text-justify">
            <?=stripslashes($result['pages'][0]->description)?> 
          </div>
        </div><!-- End F.A.Q Item-->
 
      <!-- </div>
    </section> -->  

    <!-- ======= Skills Section ======= -->
     
    <!-- End Skills Section -->

     <!-- ======= Portfolio Section ======= -->
    <section id="srvices" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in"><?=$result['service_pages'][0]->name?></h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
          <?php $__currentLoopData = $result["service"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo e($service->image); ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo e($service->image); ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="<?php echo e(URL::to('services')); ?>" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4><?php echo e($service->service_name); ?></h4>
              </div> 
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="<?php echo e(URL::to('services')); ?>" class="btn btn-service">View More</a>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <a href="#">
            <img src="<?php echo e(asset('public/assets/img/Children-Impacting life.webp')); ?>" alt="">
          </a>
        </div>
        <div class="work-right-text text-center">
          <h2><?=$result['frenchise_pages'][0]->name?></h2>
           <h6 style="color:#fff;"><?php echo str_limit($result['frenchise_pages'][0]->description,100,'...'); ?></h6>
          <a href="<?php echo e(URL::to('/Franchise-With-CVG')); ?>" class="ready-btn scrollto">View Details</a>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in"><?=$result['our_company_pages'][0]->name?></h2>
        </div>
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo e(asset('public/assets/img/our-company.jpg')); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 text-justify" data-aos="fade-right">
            <?php echo str_limit($result['our_company_pages'][0]->description,1000,'...'); ?>


          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- End Frequently Asked Questions Section -->
    <!-- <section id="faq" class="faq section-bg testi-section">
      <div class="container">
        <h2 data-aos="fade-in" class="text-center testi-heading">Testimonials</h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
        
          <div class="carousel-inner">    
            <div class="item carousel-item active">
               
              <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
              <p class="overview"><span class="t-name">Sarah Davil</span></p>
              <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
              </div>
            </div>
            <div class="item carousel-item">
               
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              <p class="overview"><span class="t-name">Sarah Davil</span></p>
              <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
              </div>
            </div>
            <div class="item carousel-item">
               
              <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
              <p class="overview"><span class="t-name">Sarah Davil</span></p>
              <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
            </div>    
          </div>
           
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </section> -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonial">
    <div  class="testimonials-area">
      <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Start testimonials Start -->
              <div class="testimonial-content text-center">
                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                <!-- start testimonial carousel -->
                <div class="owl-carousel testimonial-carousel">
                  <?php $__currentLoopData = $result["testimonial"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-testi">
                      <div class="testi-text">
                       <?php echo $testimonial->project_description; ?>

                        <h6><?php echo e($testimonial->project_name); ?></h6>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
              <!-- End testimonials end -->
            </div>
            <!-- End Right Feature -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->
    </section> 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title bounceInLeft animated">
          <h2 data-aos="fade-in"><?=$result['contact_pages'][0]->name?></h2>
          <p data-aos="fade-in"><?=stripslashes($result['contact_pages'][0]->description)?></p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p><?php echo e($result['commonContent']['setting'][4]->value); ?> </p>
                  <p><?php echo e($result['commonContent']['setting'][5]->value); ?> <?php echo e($result['commonContent']['setting'][6]->value); ?>, <?php echo e($result['commonContent']['setting'][7]->value); ?> <?php echo e($result['commonContent']['setting'][8]->value); ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php echo e($result['commonContent']['setting'][3]->value); ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php echo e($result['commonContent']['setting'][11]->value); ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form name="signup" role="form" data-aos="fade-up" class="form-validate " enctype="multipart/form-data" action="<?php echo e(URL::to('/processContactUs')); ?>" method="post">
                      <div class="form-group">
                          <label for="firstName"><?php echo app('translator')->getFromJson('website.Full Name'); ?></label>
                          <input type="text" class="form-control field-validate" id="name" name="name">
            <span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your name'); ?></span>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail4" class="col-form-label"><?php echo app('translator')->getFromJson('website.Email'); ?></label>
                          <input type="email" class="form-control email-validate" id="inputEmail4" name="email">
            <span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your valid email address'); ?></span>
                      </div>
                      <div class="form-group">
                          <label for="subject" class="col-form-label"><?php echo app('translator')->getFromJson('website.Message'); ?></label>
                          <textarea type="text" class="form-control field-validate" id="message" rows="5" name="message"></textarea>
            <span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your message'); ?></span>
                      </div>
                      <div class="button">
                          <button type="submit" class="btn btn-dark"><?php echo app('translator')->getFromJson('website.Send'); ?></button>
                      </div>
            </form>
             
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('javascript'); ?>
  <script type="text/javascript">
   var width = screen.width;
    if(width>768){
      document.getElementById('ensign-nivoslider').style.height ="500px";
    }
 </script>
  <script src="<?php echo e(asset('public/new/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/appear/jquery.appear.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/knob/jquery.knob.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/parallax/parallax.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/wow/wow.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/nivo-slider/js/jquery.nivo.slider.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/new/assets/vendor/venobox/venobox.min.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('public/new/assets/js/main.js')); ?>"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>