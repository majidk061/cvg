 
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
          <img class="d-block w-100 flip" src="https://readcivil.com/wp-content/uploads/2017/08/Construction.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 flip" src="https://www.zohowebstatic.com/sites/default/files/projects/construction-header.png" alt="Second slide">
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

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->
 

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Construction Management</h2>
           
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-12">
            <p>
              CVG Construction Management is a global construction project and program management firm specializing in achieving project/program scopes on budget, on time, and in a transparent and sustainable manner. CVG makes projects happen.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <p data-aos="fade-in">
              CVG also offers entrepreneurs the opportunity to run their own local firm and to drive impact in their communities.  For more information, please see our “Franchise with CVG” page.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->
      </div>
    </section><!-- End Frequently Asked Questions Section -->
  </main><!-- End #main -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>