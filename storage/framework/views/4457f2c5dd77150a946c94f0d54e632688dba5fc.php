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
         
        <?php if(session('language_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/languages') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addlanguages') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editlanguages/*') ? 'active' : ''); ?> ">
          <a href="<?php echo e(URL::to('admin/languages')); ?>">
            <i class="fa fa-language" aria-hidden="true"></i> <span> <?php echo e(trans('labels.languages')); ?> </span>
          </a>
        </li>
        <?php endif; ?> 
        
        <?php if(session('manufacturer_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/manufacturers') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addmanufacturer') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editmanufacturer/*') ? 'active' : ''); ?> ">
          <a href="<?php echo e(URL::to('admin/manufacturers')); ?>">
            <i class="fa fa-industry" aria-hidden="true"></i> <span><?php echo e(trans('labels.link_manufacturer')); ?></span>
          </a>
        </li>
        <?php endif; ?>
        <?php if(session('categories_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/categories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addcategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editcategory/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/subcategories') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubcategory') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubcategory/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_Nav_Menu')); ?>  </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/categories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addcategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editcategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/categories')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Menu')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/subcategories') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubcategory') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubcategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/subcategories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(trans('labels.link_Sub_Menu')); ?></a></li>
          </ul>
        </li>
        <?php endif; ?>
         
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
         <?php if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/newscategories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addnewscategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editnewscategory/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/news') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubnews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubnews/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span><?php echo e(trans('labels.Service')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="<?php echo e(Request::is('admin/service') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addservice') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editservice/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/service')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.Service')); ?></a></li>
          </ul>
        </li>
         <?php endif; ?>   

        <?php if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/location') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addlocation') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editlocation/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span><?php echo e(trans('labels.Location')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="<?php echo e(Request::is('admin/location') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addlocation') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editlocation/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/location')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.Location')); ?></a></li>
          </ul>
        </li>
        <?php endif; ?>   
         
        <?php if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/newstestimonial') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addstestimonial') ? 'active' : ''); ?> <?php echo e(Request::is('admin/edittestimonial/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/testimonial') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addtestimonial') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/edittestimonial/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span><?php echo e(trans('labels.Testimonials')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="<?php echo e(Request::is('admin/testimonial') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addtestimonial') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/edittestimonial/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/testimonial')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.Testimonials')); ?></a></li>
          </ul>
        </li>
         <?php endif; ?>  
         
        <?php if(session('website_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1'): ?>
        
        <?php if($web_setting[67]->value=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/sliders') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addsliderimage') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editslide/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/webpages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addwebpage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editwebpage/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/websettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/webthemes') ? 'active' : ''); ?> <?php echo e(Request::is('admin/customstyle') ? 'active' : ''); ?> <?php echo e(Request::is('admin/constantbanners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addconstantbanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editconstantbanner/*') ? 'active' : ''); ?>" >
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_site_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/constantbanners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addconstantbanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editconstantbanner/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/constantbanners')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Constant_Banners')); ?></a></li>
        
        
        
            <li class="<?php echo e(Request::is('admin/sliders') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addsliderimage') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editslide/*') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/sliders')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Sliders')); ?></a></li>
          
            <li class="<?php echo e(Request::is('admin/webpages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addwebpage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editwebpage/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/webpages')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.content_pages')); ?></a></li>
              
            <li class="<?php echo e(Request::is('admin/websettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/websettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
          </ul>
        </li>
        <?php endif; ?>
        
         <?php endif; ?>
        <?php if(session('application_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1'): ?>
        
        <?php if($web_setting[66]->value=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/banners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addbanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editbanner/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/pages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addpage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editpage/*') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/appSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/admobSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/applabel') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addappkey') ? 'active' : ''); ?> <?php echo e(Request::is('admin/applicationapi') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_app_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/banners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addbanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editbanner/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/banners')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Banners')); ?></a></li>
                       
            <li class="<?php echo e(Request::is('admin/pages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addpage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editpage/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/pages')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.content_pages')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/admobSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/admobSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_admob')); ?></a></li>
            
            <li class="android-hide <?php echo e(Request::is('admin/applabel') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addappkey') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/applabel')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.labels')); ?></a></li>
                                  
            <li class="<?php echo e(Request::is('admin/applicationapi') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/applicationapi')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.applicationApi')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/appsettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/appsettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
            
          </ul>
        </li>
        <?php endif; ?>
        
         <?php endif; ?>
        <?php if(session('general_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1'): ?>
        
        <li class="treeview <?php echo e(Request::is('admin/facebooksettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/setting') ? 'active' : ''); ?> <?php echo e(Request::is('admin/googlesettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/pushnotification') ? 'active' : ''); ?> <?php echo e(Request::is('admin/orderstatus') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addorderstatus') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editorderstatus/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/alertsetting') ? 'active' : ''); ?> <?php echo e(Request::is('admin/units') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addunit') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editunit/*') ? 'active' : ''); ?> ">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_general_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
             
            <li class="<?php echo e(Request::is('admin/setting') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/setting')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
        
        
            
          </ul>
        </li>
         <?php endif; ?>
        
               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>