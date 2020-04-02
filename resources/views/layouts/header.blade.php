<!-- ======= Header =======  -->
 <div class="container-fluid border-bottom">
      <div class="row">
        <div class="col-md-12">

          <div class="navbar-brand">
              <select name="change_language" onchange="changeLanguage(this.value)" id="change_language" style="font-size: 10px;" class="change-language form-control">
              @foreach($languages as $languages_data)                               
                  <option value="{{$languages_data->code}}" data-class="{{$languages_data->code}}" data-style="background-image: url({{asset('').$languages_data->image}});" @if(session('locale')==$languages_data->code) selected @endif>{{$languages_data->name}}</option>
              @endforeach 
              </select>
          </div>
          <div class="social-links header-icon pull-right">
             

                      @if(!empty($result['commonContent']['setting'][50]->value))
                        <a href="{{$result['commonContent']['setting'][50]->value}}"  class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                        @else
                          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        @endif                        
                     
                    @if(!empty($result['commonContent']['setting'][52]->value))
                        <a href="{{$result['commonContent']['setting'][52]->value}}"  class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                    @else
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    @endif 
                    @if(!empty($result['commonContent']['setting'][51]->value))
                        <a href="{{$result['commonContent']['setting'][51]->value}}" class="google" target="_blank"><i class="bx bxl-google"></i></a>
                    @else
                        <a href="#" class="google"><i class="bx bxl-google"></i></a>
                    @endif
                     
                    @if(!empty($result['commonContent']['setting'][53]->value))
                        <a href="{{$result['commonContent']['setting'][53]->value}}"  class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    @else
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    @endif
                    
          </div>
        </div>
        
      </div>
    </div>
  <header id="header">

    <div class="container d-flex"> 

      <div class="logo mr-auto">
        <img src="{{asset('public/images/CVG_logo.png')}}">
        <!-- <h1 class="text-light"><a href="index.html">Bocor<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ URL::to('/index')}}">Home</a></li>
          <li class="drop-down"><a href="">About Us</a>
            <ul>
              <li><a href="{{URL::to('our-company')}}">Our Company</a></li>
              <li><a href="{{URL::to('our-location')}}">Our Locations</a></li> 
            </ul>
          </li>
          <li><a href="{{URL::to('services')}}">Services</a></li>
          <li><a href="{{URL::to('Franchise-With-CVG')}}">Franchise With CVG</a></li>
          <li><a href="{{URL::to('index#testimonial')}}">Testimonials</a></li>
          <li><a href="{{URL::to('news')}}">News</a></li>
          <li><a href="{{URL::to('contact-us')}}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->