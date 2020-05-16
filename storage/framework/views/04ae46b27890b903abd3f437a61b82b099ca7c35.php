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
    <meta name="csrf-token" content=<?php echo e(csrf_token()); ?>>

    <title>CVG</title>
    <!-- Bootstrap -->
    
      <!-- Favicons -->
      <link href="<?php echo e(asset('resources/assets/images/site_images/1585476839.CVG_logo.png')); ?>" rel="icon">
      <link href="<?php echo e(asset('public/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="<?php echo e(asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('public/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('public/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('public/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('public/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('public/assets/css/animate.css')); ?>" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="<?php echo e(asset('public/assets/css/style.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <?php echo $__env->yieldContent('css'); ?>

</head>

<body>
     
        <!-- Header -->
    <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- content -->
    <?php echo $__env->yieldContent('content'); ?>
        <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
    <!-- ./wrapper -->
   

    <!-- jQuery -->

<!-- Vendor JS Files -->
  <script src="<?php echo e(asset('public/assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/aos/aos.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>

<!-- Sweet alert js-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
            <?php if(Session::get('success')): ?>
                swal("Success!", "<?php echo e(Session::get('success')); ?>", "success").then(function(){
             window.location.reload(window.location.href);
             });
           <?php endif; ?>

            <?php if(Session::get('error')): ?>
               
                swal("Failed!", "<?php echo e(Session::get('error')); ?>", "error").then(function(){
             window.location.reload(window.location.href);
             });
            <?php endif; ?>
            <?php if(Session::get('info')): ?>
                swal({
                    title: "",
                    html: "<p style='color:#163a75'><?php echo e(Session::get('info')); ?></p>",
                    timer: 4000,
                    showConfirmButton: true,
                    type: "info",
                    confirmButtonColor: "#31ce8b"
                }).then(function(){
             window.location.reload(window.location.href);
             });
            <?php endif; ?>
            <?php if(Session::get('warning')): ?>
                swal({
                    title: "",
                    html: "<p style='color:#163a75'><?php echo e(Session::get('warning')); ?></p>",
                    timer: 4000,
                    showConfirmButton: true,
                    type: "warning",
                    confirmButtonColor: "#163a75"
                }).then(function(){
             window.location.reload(window.location.href);
             });
            <?php endif; ?>
</script>
  

<script type="text/javascript">
  function changeLanguage(locale){
    $.ajax({     
      url: '<?php echo e(URL::to("/language")); ?>',     
      type: "POST",     
      data: '&locale='+locale,
      success: function (res) { 
        window.location.reload(true);   
      },      
    }); 
    
  };
</script>  
  <?php echo $__env->yieldContent('javascript'); ?>     
</body>
</html>