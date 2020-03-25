<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('').auth()->guard('admin')->user()->image); ?>" class="img-circle" alt="<?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('labels.online')); ?></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><?php echo e(trans('labels.navigation')); ?></li>
         
         
        <?php if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/newscategories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addnewscategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editnewscategory/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/news') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubnews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubnews/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_news')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="<?php echo e(Request::is('admin/newscategories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addnewscategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editnewscategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/newscategories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(trans('labels.link_news_categories')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/news') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubnews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubnews/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/news')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_sub_news')); ?></a></li>
          </ul>
        </li>
         <?php endif; ?>
           
               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>