<!-- ======= Header ======= -->
 <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 d-flex">

          <div class="navbar-brand">
              <select name="change_language" onchange="changeLanguage(this.value)" id="change_language" style="font-size: 10px;" class="change-language form-control">
              <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                               
                  <option value="<?php echo e($languages_data->code); ?>" data-class="<?php echo e($languages_data->code); ?>" data-style="background-image: url(<?php echo e(asset('').$languages_data->image); ?>);" <?php if(session('locale')==$languages_data->code): ?> selected <?php endif; ?>><?php echo e($languages_data->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </select>
          </div>
          <div class="social-links header-icon pull-right">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
        
      </div>
    </div>
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