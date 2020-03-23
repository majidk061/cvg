<!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex"> 

      <div class="logo mr-auto">
        <img src="<?php echo e(asset('public/images/CVG_logo.png')); ?>">
        <!-- <h1 class="text-light"><a href="index.html">Bocor<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo e(URL::to('/index')); ?>">Home</a></li>
          <li class="drop-down"><a href="">About Us</a>
            <ul>
              <li><a href="<?php echo e(URL::to('our-company')); ?>">Our Company</a></li>
              <li><a href="#">Our Locations</a></li> 
            </ul>
          </li>
          <li><a href="<?php echo e(URL::to('services')); ?>">Services</a></li>
          <li><a href="<?php echo e(URL::to('Franchise-With-CVG')); ?>">Franchise With CVG</a></li>
          <li><a href="<?php echo e(URL::to('testimonials')); ?>">Testimonials</a></li>
          <li><a href="<?php echo e(URL::to('news')); ?>">News</a></li>
          <li><a href="<?php echo e(URL::to('contact-us')); ?>">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->