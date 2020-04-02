@extends('layouts.master') 
@section('css')
<style type="text/css">
  #mymap {
      border:1px solid red;
      width: 100%;
      height: 500px;
  }
</style>
@endsection('css')
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
          <p data-aos="fade-in"><?=stripslashes($result['pages'][0]->description)?></p>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
              @if(count($result['location'])>0)
              @foreach($result['location'] as $location)
              <a class="col-lg-12 location" href="{{$location->slug}}">
                <div>
                  <i class="bx bx-help-circle"></i>
                  <h4>{{$location->full_address}}</h4>
                </div>
              </a>
              @endforeach
              @endif
               
            </div>
          </div>
          <div class="col-md-7">
            <div id="mymap"></div>
          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
     
  </main><!-- End #main -->
  @endsection

  @section('javascript')
   
  <script>
    var locations = <?php print_r(json_encode($result['location'])) ?>;
    console.log(locations);
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: 21.170240, lng: 72.831061};
      // The map, centered at Uluru
      var map = new google.maps.Map(
      document.getElementById('mymap'), {zoom: 4, center: uluru});
      // The marker, positioned at Uluru
      $.each( locations, function( index, value ){
          var uluruee = {lat: value.lat,lng: value.lng};
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
  @endsection('javascript')