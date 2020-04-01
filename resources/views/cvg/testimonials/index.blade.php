@extends('layouts.master') 
@section('css')
<style type="text/css">
  
.col-center {
  margin: 0 auto;
  float: none !important;
}
.carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  color: #999;
  font-size: 14px;
    text-align: center;
  overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
  width: 135px;
  height: 135px;
  margin: 0 auto;
  padding: 5px;
  border: 1px solid #ddd;
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
.carousel .carousel-indicators {
  bottom: -40px;
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
@endsection('css')
@section('content')
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       @if(count($result['commonContent']['homeBanners'])>0)
            @foreach(($result['commonContent']['homeBanners']) as $homeBanners)
                @if($homeBanners->type=='Testimonials Banner')
                  <a title="Banner Image" href="{{ $homeBanners->banners_url}}">
                    <img src="{{asset('').$homeBanners->banners_image}}" class="static-img" style="width: 1381px">
                  </a>
                @endif
            @endforeach
        @endif
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