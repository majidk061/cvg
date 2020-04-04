@extends('layouts.master') 
@section('content')
<!-- ======= Hero Section ======= -->
 
  <section id="hero">
     <div class="row">
       @if(count($result['commonContent']['homeBanners'])>0)
            @foreach(($result['commonContent']['homeBanners']) as $homeBanners)
                @if($homeBanners->type=='Services Banner')
                  <a title="Banner Image" href="{{ $homeBanners->banners_url}}">
                    <img src="{{asset('').$homeBanners->banners_image}}" class="static-img" style="width: 1381px">
                  </a>
                @endif
            @endforeach
        @endif
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
          @php
          $isTrue = 1;
          @endphp
          @foreach($result["service"] as $service)
          <div class="col-md-6 d-flex align-items-stretch" @if($isTrue) data-aos="fade-right" @else data-aos="fade-left" @endif>
            <div class="card">
              <div class="card-img">
                <img src="{{$service->image}}"  alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$service->service_name}}</a></h5>
                <p class="card-text">{!!$service->service_description!!}.</p>
                </div>
            </div>
          </div>
          @if($isTrue)
          @php
          $isTrue = 0;
          @endphp
          @else
          @php
          $isTrue = 1;
          @endphp
          @endif
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
  @endsection


