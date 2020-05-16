 
<?php $__env->startSection('css'); ?>
<style type="text/css">
  #mymap {
      border:1px solid red;
      width: 100%;
      height: 100%;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- ======= Hero Section =======  -->
 
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
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in"><?=$result['pages'][0]->name?></h2>
          <p data-aos="fade-in"><?=stripslashes($result['pages'][0]->description)?></p>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
              <?php if(count($result['location'])>0): ?>
              <?php $__currentLoopData = $result['location']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a class="col-lg-12 location" href="<?php echo e($location->slug); ?>">
                <div>
                  <i class="bx bx-help-circle"></i>
                  <h4><?php echo e($location->full_address); ?></h4>
                </div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
               
            </div>
          </div>
          <div class="col-md-7">
            <div id="mymap"></div>
          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
     
  </main><!-- End #main -->
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('javascript'); ?>
   
  <script>
    var locations = <?php print_r(json_encode($result['location'])) ?>;
    console.log(locations);
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: Number(locations[0].lat), lng: Number(locations[0].lng)};
      // The map, centered at Uluru
      var map = new google.maps.Map(
      document.getElementById('mymap'), {zoom:4, center: uluru});
      // The marker, positioned at Uluru
      $.each( locations, function( index, value ){
          var uluruee = {lat: Number(value.lat),lng: Number(value.lng)};
          console.log("Number=====>",uluruee)
          var marker = new google.maps.Marker({position: uluruee, map: map})
            marker.addListener('click', function() {
            map.setZoom(8);
            map.setCenter(marker.getPosition());
        });
       });

    }
    </script>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUfqncHaeDyppHEmCDgLmmP-p8doCTzbg&callback=initMap">
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>