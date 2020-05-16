<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size:12px"><b><?php echo e(trans('labels.admin')); ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo e(trans('labels.admin')); ?></b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"><?php echo e(trans('labels.toggle_navigation')); ?></span>
      </a>
		<div id="countdown" style="
    width: 350px;
    margin-top: 13px !important;
    position: absolute;
    font-size: 16px;
    color: #ffffff;
    display: inline-block;
    margin-left: -175px;
    left: 50%;
"></div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset('').auth()->guard('admin')->user()->image); ?>" class="user-image" alt="<?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> Image">
              <span class="hidden-xs"><?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('').auth()->guard('admin')->user()->image); ?>" class="img-circle" alt="<?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> Image">

                <p>
                  <?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> 
                  <small><?php echo e(trans('labels.administrator')); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
              <?php if(session('profile_view')==1 or auth()->guard('admin')->user()->adminType=='1'): ?>
                <div class="pull-left">
                  <a href="<?php echo e(URL::to('admin/profile')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('labels.profile_link')); ?></a>
                </div>                
              <?php endif; ?>
                <div class="pull-right">
                  <a href="<?php echo e(URL::to('admin/logout')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('labels.sign_out')); ?></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>

    </nav>
  </header>