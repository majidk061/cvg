@extends('layouts.master') 
@section('content')
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       <img src="https://ricinzconstruction.co.za/wp-content/uploads/2018/02/about-us-banner.jpg" class="static-img">
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
                  <p>{{$result['commonContent']['setting'][4]->value}} </p>
                  <p>{{$result['commonContent']['setting'][5]->value}} {{$result['commonContent']['setting'][6]->value}}, {{$result['commonContent']['setting'][7]->value}} {{$result['commonContent']['setting'][8]->value}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$result['commonContent']['setting'][3]->value}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>{{$result['commonContent']['setting'][11]->value}}</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form name="signup" role="form" data-aos="fade-up" class="form-validate " enctype="multipart/form-data" action="{{ URL::to('/processContactUs')}}" method="post">
                      <div class="form-group">
                          <label for="firstName">@lang('website.Full Name')</label>
                          <input type="text" class="form-control field-validate" id="name" name="name">
            <span class="help-block error-content" hidden>@lang('website.Please enter your name')</span>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail4" class="col-form-label">@lang('website.Email')</label>
                          <input type="email" class="form-control email-validate" id="inputEmail4" name="email">
            <span class="help-block error-content" hidden>@lang('website.Please enter your valid email address')</span>
                      </div>
                      <div class="form-group">
                          <label for="subject" class="col-form-label">@lang('website.Message')</label>
                          <textarea type="text" class="form-control field-validate" id="message" rows="5" name="message"></textarea>
            <span class="help-block error-content" hidden>@lang('website.Please enter your message')</span>
                      </div>
                      <div class="button">
                          <button type="submit" class="btn btn-dark">@lang('website.Send')</button>
                      </div>
            </form>
             
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
</main>
  @endsection

