@extends('layouts.master') 
@section('css')
<style type="text/css">
 
.carousel {
  width: 650px;
  margin: 0 auto;
  padding-bottom: 50px;
}
.carousel .item {
  color: #999;
  font-size: 14px;
    text-align: center;
  overflow: hidden;
    min-height: 340px;
}
.carousel .item a {
  color: #eb7245;
}
.carousel .img-box {
  width: 145px;
  height: 145px;
  margin: 0 auto;
  border-radius: 50%;
}
.carousel .img-box img {
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
}
.carousel .testimonial {  
  padding: 30px 0 10px;
}
.carousel .overview { 
  text-align: center;
  padding-bottom: 5px;
}
.carousel .overview b {
  color: #333;
  font-size: 15px;
  text-transform: uppercase;
  display: block; 
  padding-bottom: 5px;
}
.carousel .star-rating i {
  font-size: 18px;
  color: #f26b36;
}
.carousel .carousel-control {
  width: 30px;
  height: 30px;
  border-radius: 50%;
    background: #999;
    text-shadow: none;
  top: 4px;
}
.carousel-control i {
  font-size: 20px;
  margin-right: 2px;
}
.carousel-control.left {
  left: auto;
  right: 40px;
}
.carousel-control.right i {
  margin-right: -2px;
}
.carousel .carousel-indicators {
  bottom: 15px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 11px;
  height: 11px;
  margin: 1px 5px;
  border-radius: 50%;
}
.carousel-indicators li { 
  background: #e2e2e2;
  border-color: transparent;
}
.carousel-indicators li.active {
  border: none;
  background: #888;   
}
</style>
@endsection('css')
@section('content')
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       <img src="https://wallpaperstock.net/architecture_wallpapers_23828_1920x1080.jpg" class="static-img">
     </div>
     
  </section><!-- End Hero -->

  <div class="container-fluid">
    <div class="container">
       <div class="bradcram bounceInLeft animated">
         <a href="{{ URL::to('/')}}">@lang('website.Home')</a> / Testimonials
       </div>
     </div>
  </div>
  <main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Testimonials</h2>
           
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">    
            <div class="item carousel-item active">
              <div class="img-box"><img src="https://icons.iconarchive.com/icons/artua/dragon-soft/512/User-icon.png" alt=""></div>
              <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
              <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
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
              <div class="img-box"><img src="https://icons.iconarchive.com/icons/artua/dragon-soft/512/User-icon.png" alt=""></div>
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
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
              <div class="img-box"><img src="https://icons.iconarchive.com/icons/artua/dragon-soft/512/User-icon.png" alt=""></div>
              <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
              <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
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
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
  </main><!-- End #main -->
  @endsection