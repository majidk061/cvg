 
<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       <?php if(count($result['commonContent']['homeBanners'])>0): ?>
            <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($homeBanners->type=='Franchise Banner'): ?>
                  <a title="Banner Image" href="<?php echo e($homeBanners->banners_url); ?>">
                    <img src="<?php echo e(asset('').$homeBanners->banners_image); ?>" class="static-img" style="width: 1381px">
                  </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
     </div>
     
  </section><!-- End Hero -->
 
  <main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
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
    </section><!-- End Frequently Asked Questions Section -->
  </main><!-- End #main -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>