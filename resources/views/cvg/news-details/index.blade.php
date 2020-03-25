@extends('layouts.master') 
@section('css')
<meta charset="utf-8">
    @if(!empty($result['commonContent']['setting'][86]->value))
    <link rel="icon" href="{{asset('').$result['commonContent']['setting'][86]->value}}" type="image/gif">
    @endif
     
    @if(!empty(session("theme")))
        <link href="{!! asset('public/css/'.session("theme").'.css') !!} " media="all" rel="stylesheet" type="text/css"/>
    @else
        <link href="{!! asset('public/css/app.css') !!} " media="all" rel="stylesheet" type="text/css"/>
    @endif
     
    <link href="{!! asset('public/css/jquery-ui.css') !!} " media="all" rel="stylesheet" type="text/css"/>
     
    <link href="{!! asset('public/css/rtl.css') !!} " media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('public/css/responsive.css') !!} " media="all" rel="stylesheet" type="text/css"/>
     
@endsection
@section('content')
<section class="site-content">
	<div class="container">
    	<div class="breadcum-area">
            <div class="breadcum-inner">
                <h3>@lang('website.News Detail')</h3>
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
                    <li class="breadcrumb-item"><a href="{{ URL::to('/news?category='.$result['news'][0]->news_categories_slug)}}"> {{$result['news'][0]->categories_name}}</a></li>
                     <li class="breadcrumb-item active">@lang('website.News Detail')</li>
                </ol>
            </div>
        </div>

        <div class="blog-area">
            <div class="row">
            	<div class="col-12 col-lg-3 spaceright-0">
                    @include('layouts.sidebar_news')
                 </div>
                 <div class="col-12 col-lg-9">
                 	<div class="col-12 spaceright-0">
                    	<div class="row">
                        	<div class="blogs blogs-detail" style="padding-left:0;">        
                                <div class="blog-post">
                                    <article>
                                        <div class="blog-thumb">
                                            @if($result['news'][0]->is_feature==1)
                                                <span class="badge badge-success">@lang('website.Featured')</span>
                                            @endif
                                            <span class="blog-date">
                                                <strong>
                                                    <?php
                                                        $timestamp = strtotime($result['news'][0]->news_date_added);
                                                        echo date('d',$timestamp);
                                                    ?>
                                                </strong>
                                                <?php
                                                    
                                                    echo date('M',$timestamp);
                                                ?>
                                            </span>
                                            <img class="img-fluid" src="{{asset('').$result['news'][0]->news_image}}" alt="{{$result['news'][0]->news_name}}">
                                        </div>
                                        
                                        <div class="blog-block">
                                            <h2 >{{$result['news'][0]->news_name}}</h2>
                
                                            <div class="blog-text">
                                                <?=stripslashes($result['news'][0]->news_description)?>
                                            </div>
                                        </div>
                                    </article>
                                </div>      
                             </div>	
                        </div>
                    </div>
                 </div>
            </div>		
        </div>
	</div>
</section>
@endsection 	



