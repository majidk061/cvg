<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('').auth()->guard('admin')->user()->image}}" class="img-circle" alt="{{ auth()->guard('admin')->user()->first_name }} {{ auth()->guard('admin')->user()->last_name }} Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->first_name }} {{ auth()->guard('admin')->user()->last_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('labels.online') }}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">{{ trans('labels.navigation') }}</li>
         
        @if(session('language_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/languages') ? 'active' : '' }} {{ Request::is('admin/addlanguages') ? 'active' : '' }} {{ Request::is('admin/editlanguages/*') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/languages')}}">
            <i class="fa fa-language" aria-hidden="true"></i> <span> {{ trans('labels.languages') }} </span>
          </a>
        </li>
        @endif 
        
        @if(session('manufacturer_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/manufacturers') ? 'active' : '' }} {{ Request::is('admin/addmanufacturer') ? 'active' : '' }} {{ Request::is('admin/editmanufacturer/*') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/manufacturers')}}">
            <i class="fa fa-industry" aria-hidden="true"></i> <span>{{ trans('labels.link_manufacturer') }}</span>
          </a>
        </li>
        @endif
        @if(session('categories_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/categories') ? 'active' : '' }} {{ Request::is('admin/addcategory') ? 'active' : '' }} {{ Request::is('admin/editcategory/*') ? 'active' : '' }} {{ Request::is('admin/subcategories') ? 'active' : '' }}  {{ Request::is('admin/addsubcategory') ? 'active' : '' }}  {{ Request::is('admin/editsubcategory/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
<span>{{ trans('labels.link_Nav_Menu') }}  </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }} {{ Request::is('admin/addcategory') ? 'active' : '' }} {{ Request::is('admin/editcategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/categories')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_Menu') }}</a></li>
            <li class="{{ Request::is('admin/subcategories') ? 'active' : '' }}  {{ Request::is('admin/addsubcategory') ? 'active' : '' }}  {{ Request::is('admin/editsubcategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/subcategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_Sub_Menu') }}</a></li>
          </ul>
        </li>
        @endif
         
        @if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/newscategories') ? 'active' : '' }} {{ Request::is('admin/addnewscategory') ? 'active' : '' }} {{ Request::is('admin/editnewscategory/*') ? 'active' : '' }} {{ Request::is('admin/news') ? 'active' : '' }}  {{ Request::is('admin/addsubnews') ? 'active' : '' }}  {{ Request::is('admin/editsubnews/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>{{ trans('labels.link_news') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/newscategories') ? 'active' : '' }} {{ Request::is('admin/addnewscategory') ? 'active' : '' }} {{ Request::is('admin/editnewscategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/newscategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_news_categories') }}</a></li>
            <li class="{{ Request::is('admin/news') ? 'active' : '' }}  {{ Request::is('admin/addsubnews') ? 'active' : '' }}  {{ Request::is('admin/editsubnews/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/news')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_sub_news') }}</a></li>
          </ul>
        </li>
         @endif
         @if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/newscategories') ? 'active' : '' }} {{ Request::is('admin/addnewscategory') ? 'active' : '' }} {{ Request::is('admin/editnewscategory/*') ? 'active' : '' }} {{ Request::is('admin/news') ? 'active' : '' }}  {{ Request::is('admin/addsubnews') ? 'active' : '' }}  {{ Request::is('admin/editsubnews/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>{{ trans('labels.Service') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ Request::is('admin/service') ? 'active' : '' }}  {{ Request::is('admin/addservice') ? 'active' : '' }}  {{ Request::is('admin/editservice/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/service')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Service') }}</a></li>
          </ul>
        </li>
         @endif   

        @if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/location') ? 'active' : '' }} {{ Request::is('admin/addlocation') ? 'active' : '' }} {{ Request::is('admin/editlocation/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>{{ trans('labels.Location') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ Request::is('admin/location') ? 'active' : '' }}  {{ Request::is('admin/addlocation') ? 'active' : '' }}  {{ Request::is('admin/editlocation/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/location')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Location') }}</a></li>
          </ul>
        </li>
        @endif   
         
        @if(session('news_view')==1  or auth()->guard('admin')->user()->adminType=='1')
        <li class="treeview {{ Request::is('admin/newstestimonial') ? 'active' : '' }} {{ Request::is('admin/addstestimonial') ? 'active' : '' }} {{ Request::is('admin/edittestimonial/*') ? 'active' : '' }} {{ Request::is('admin/testimonial') ? 'active' : '' }}  {{ Request::is('admin/addtestimonial') ? 'active' : '' }}  {{ Request::is('admin/edittestimonial/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>{{ trans('labels.Testimonials') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ Request::is('admin/testimonial') ? 'active' : '' }}  {{ Request::is('admin/addtestimonial') ? 'active' : '' }}  {{ Request::is('admin/edittestimonial/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/testimonial')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Testimonials') }}</a></li>
          </ul>
        </li>
         @endif  
         
        @if(session('website_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1')
        
        @if($web_setting[67]->value=='1')
        <li class="treeview {{ Request::is('admin/sliders') ? 'active' : '' }} {{ Request::is('admin/addsliderimage') ? 'active' : '' }} {{ Request::is('admin/editslide/*') ? 'active' : '' }} {{ Request::is('admin/webpages') ? 'active' : '' }}  {{ Request::is('admin/addwebpage') ? 'active' : '' }}  {{ Request::is('admin/editwebpage/*') ? 'active' : '' }} {{ Request::is('admin/websettings') ? 'active' : '' }} {{ Request::is('admin/webthemes') ? 'active' : '' }} {{ Request::is('admin/customstyle') ? 'active' : '' }} {{ Request::is('admin/constantbanners') ? 'active' : '' }} {{ Request::is('admin/addconstantbanner') ? 'active' : '' }} {{ Request::is('admin/editconstantbanner/*') ? 'active' : '' }}" >
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> {{ trans('labels.link_site_settings') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/constantbanners') ? 'active' : '' }} {{ Request::is('admin/addconstantbanner') ? 'active' : '' }} {{ Request::is('admin/editconstantbanner/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/constantbanners')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_Constant_Banners') }}</a></li>
        
        
        
            <li class="{{ Request::is('admin/sliders') ? 'active' : '' }} {{ Request::is('admin/addsliderimage') ? 'active' : '' }} {{ Request::is('admin/editslide/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/sliders')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_Sliders') }}</a></li>
          
            <li class="{{ Request::is('admin/webpages') ? 'active' : '' }}  {{ Request::is('admin/addwebpage') ? 'active' : '' }}  {{ Request::is('admin/editwebpage/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/webpages')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.content_pages') }}</a></li>
              
            <li class="{{ Request::is('admin/websettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/websettings')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_setting') }}</a></li>
          </ul>
        </li>
        @endif
        
         @endif
        @if(session('application_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1')
        
        @if($web_setting[66]->value=='1')
        <li class="treeview {{ Request::is('admin/banners') ? 'active' : '' }} {{ Request::is('admin/addbanner') ? 'active' : '' }} {{ Request::is('admin/editbanner/*') ? 'active' : '' }} {{ Request::is('admin/pages') ? 'active' : '' }}  {{ Request::is('admin/addpage') ? 'active' : '' }}  {{ Request::is('admin/editpage/*') ? 'active' : '' }}  {{ Request::is('admin/appSettings') ? 'active' : '' }} {{ Request::is('admin/admobSettings') ? 'active' : '' }} {{ Request::is('admin/applabel') ? 'active' : '' }} {{ Request::is('admin/addappkey') ? 'active' : '' }} {{ Request::is('admin/applicationapi') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> {{ trans('labels.link_app_settings') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/banners') ? 'active' : '' }} {{ Request::is('admin/addbanner') ? 'active' : '' }} {{ Request::is('admin/editbanner/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/banners')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_Banners') }}</a></li>
                       
            <li class="{{ Request::is('admin/pages') ? 'active' : '' }}  {{ Request::is('admin/addpage') ? 'active' : '' }}  {{ Request::is('admin/editpage/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/pages')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.content_pages') }}</a></li>
            
            <li class="{{ Request::is('admin/admobSettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/admobSettings')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_admob') }}</a></li>
            
            <li class="android-hide {{ Request::is('admin/applabel') ? 'active' : '' }} {{ Request::is('admin/addappkey') ? 'active' : '' }}"><a href="{{ URL::to('admin/applabel')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.labels') }}</a></li>
                                  
            <li class="{{ Request::is('admin/applicationapi') ? 'active' : '' }}"><a href="{{ URL::to('admin/applicationapi')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.applicationApi') }}</a></li>
            
            <li class="{{ Request::is('admin/appsettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/appsettings')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_setting') }}</a></li>
            
          </ul>
        </li>
        @endif
        
         @endif
        @if(session('general_setting_view')==1 or auth()->guard('admin')->user()->adminType=='1')
        
        <li class="treeview {{ Request::is('admin/facebooksettings') ? 'active' : '' }} {{ Request::is('admin/setting') ? 'active' : '' }} {{ Request::is('admin/googlesettings') ? 'active' : '' }} {{ Request::is('admin/pushnotification') ? 'active' : '' }} {{ Request::is('admin/orderstatus') ? 'active' : '' }} {{ Request::is('admin/addorderstatus') ? 'active' : '' }} {{ Request::is('admin/editorderstatus/*') ? 'active' : '' }} {{ Request::is('admin/alertsetting') ? 'active' : '' }} {{ Request::is('admin/units') ? 'active' : '' }} {{ Request::is('admin/addunit') ? 'active' : '' }} {{ Request::is('admin/editunit/*') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> {{ trans('labels.link_general_settings') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
             
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a href="{{ URL::to('admin/setting')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_setting') }}</a></li>
        
        
            
          </ul>
        </li>
         @endif
        
               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>