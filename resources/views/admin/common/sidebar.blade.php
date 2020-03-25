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
           
               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>