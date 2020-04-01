@extends('layouts.master') 
@section('content')
<!-- ======= Hero Section =======  -->
 
  <section id="hero">
     <div class="row">
        @if(count($result['commonContent']['homeBanners'])>0)
            @foreach(($result['commonContent']['homeBanners']) as $homeBanners)
                @if($homeBanners->type=='Our Company Banner')
                  <a title="Banner Image" href="{{ $homeBanners->banners_url}}">
                    <img src="{{asset('').$homeBanners->banners_image}}" class="static-img" style="width: 1381px">
                  </a>
                @endif
            @endforeach
        @endif
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
  @endsection