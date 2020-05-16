 
<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       <?php if(count($result['commonContent']['homeBanners'])>0): ?>
            <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($homeBanners->type=='Contact US Banner'): ?>
                  <a title="Banner Image" href="<?php echo e($homeBanners->banners_url); ?>">
                    <img src="<?php echo e(asset('').$homeBanners->banners_image); ?>" class="static-img" style="width: 1381px">
                  </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
     </div>
     
  </section><!-- End Hero -->

  
  <main id="main">
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title bounceInLeft animated">
          <h2 data-aos="fade-in"><?=$result['pages'][0]->name?></h2>
          <p data-aos="fade-in"><?=stripslashes($result['pages'][0]->description)?></p>
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
</main>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>