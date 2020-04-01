 
<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       <?php if(count($result['commonContent']['homeBanners'])>0): ?>
            <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($homeBanners->type=='Our Company Banner'): ?>
                  <a title="Banner Image" href="<?php echo e($homeBanners->banners_url); ?>">
                    <img src="<?php echo e(asset('').$homeBanners->banners_image); ?>" class="static-img" style="width: 1381px">
                  </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
     </div>
     
  </section><!-- End Hero -->

   
  <main id="main">
     <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in"><?=$result['pages'][0]->name?></h2>
           
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-12 text-justify">
            <?=stripslashes($result['pages'][0]->description)?> 
          </div>
        </div><!-- End F.A.Q Item-->
 
      </div>

        <div class="row">
          <?php 
          $isTrue = 1;
           ?>
          <?php $__currentLoopData = $result["service"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6 d-flex align-items-stretch" <?php if($isTrue): ?> data-aos="fade-right" <?php else: ?> data-aos="fade-left" <?php endif; ?>>
            <div class="card">
              <div class="card-img">
                <img src="<?php echo e($service->image); ?>"  alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo e($service->service_name); ?></a></h5>
                <p class="card-text"><?php echo $service->service_description; ?>.</p>
                </div>
            </div>
          </div>
          <?php if($isTrue): ?>
          <?php 
          $isTrue = 0;
           ?>
          <?php else: ?>
          <?php 
          $isTrue = 1;
           ?>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>