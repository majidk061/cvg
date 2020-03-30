 
<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
 
  <section id="hero">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 flip" src="https://www.build-review.com/wp-content/uploads/2019/06/Travel.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 flip" src="https://p5w7e8h7.stackpathcdn.com/Files/Images/Home/AEC-top.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 flip" src="https://images.shiksha.com/mediadata/images/articles/1569311111php6YNAke.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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