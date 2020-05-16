 
<?php $__env->startSection('css'); ?>
<meta charset="utf-8">
    <?php if(!empty($result['commonContent']['setting'][86]->value)): ?>
    <link rel="icon" href="<?php echo e(asset('').$result['commonContent']['setting'][86]->value); ?>" type="image/gif">
    <?php endif; ?>
     
    <?php if(!empty(session("theme"))): ?>
        <link href="<?php echo asset('public/css/'.session("theme").'.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
    <?php else: ?>
        <link href="<?php echo asset('public/css/app.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
    <?php endif; ?>
     
    <link href="<?php echo asset('public/css/jquery-ui.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
     
    <link href="<?php echo asset('public/css/rtl.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo asset('public/css/responsive.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
     
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="site-content">
	<div class="container">
    	 

        <div class="blog-area">
            <div class="row">
            	<div class="col-12 col-lg-3 spaceright-0">
                    <?php echo $__env->make('layouts.sidebar_news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 </div>
                 <div class="col-12 col-lg-9">
                 	<div class="col-12 spaceright-0">
                    	<div class="row">
                        	<div class="blogs blogs-detail" style="padding-left:0;">        
                                <div class="blog-post">
                                    <article>
                                        <div class="blog-thumb">
                                            <?php if($result['news'][0]->is_feature==1): ?>
                                                <span class="badge badge-success"><?php echo app('translator')->getFromJson('website.Featured'); ?></span>
                                            <?php endif; ?>
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
                                            <img class="img-fluid" src="<?php echo e(asset('').$result['news'][0]->news_image); ?>" alt="<?php echo e($result['news'][0]->news_name); ?>">
                                        </div>
                                        
                                        <div class="blog-block">
                                            <h2 ><?php echo e($result['news'][0]->news_name); ?></h2>
                
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
<?php $__env->stopSection(); ?> 	




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>