<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content={{csrf_token()}}>

    <title>Admin</title>
    <!-- Bootstrap -->
    
      <!-- Favicons -->
      <link href="{{asset('public/assets/img/favicon.png')}}" rel="icon">
      <link href="{{asset('public/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/vendor/aos/aos.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/css/animate.css')}}" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      @yield('css')

</head>

<body>
     
        <!-- Header -->
    @include('layouts.header')
        <!-- content -->
    @yield('content')
        <!-- Footer -->
    @include('layouts.footer')
      
    <!-- ./wrapper -->
    @yield('javascript')

    <!-- jQuery -->

<!-- Vendor JS Files -->
  <script src="{{asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/assets/js/main.js')}}"></script>

<!-- Sweet alert js-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
            @if(Session::get('success'))
                swal("Success!", "{{ Session::get('success') }}", "success").then(function(){
             window.location.reload(window.location.href);
             });
           @endif

            @if(Session::get('error'))
               
                swal("Failed!", "{{ Session::get('error') }}", "error").then(function(){
             window.location.reload(window.location.href);
             });
            @endif
            @if (Session::get('info'))
                swal({
                    title: "",
                    html: "<p style='color:#163a75'>{{ Session::get('info') }}</p>",
                    timer: 4000,
                    showConfirmButton: true,
                    type: "info",
                    confirmButtonColor: "#31ce8b"
                }).then(function(){
             window.location.reload(window.location.href);
             });
            @endif
            @if (Session::get('warning'))
                swal({
                    title: "",
                    html: "<p style='color:#163a75'>{{ Session::get('warning') }}</p>",
                    timer: 4000,
                    showConfirmButton: true,
                    type: "warning",
                    confirmButtonColor: "#163a75"
                }).then(function(){
             window.location.reload(window.location.href);
             });
            @endif
</script>

      
</body>
</html>