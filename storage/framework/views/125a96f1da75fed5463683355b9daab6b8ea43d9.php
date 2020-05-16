<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.EditService')); ?> <small><?php echo e(trans('labels.EditService')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/news')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.ListingAllService')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.EditService')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.EditNews')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Edit News</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          <?php if( count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-success" role="alert">
                                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                      <span class="sr-only"><?php echo e(trans('labels.Error')); ?>:</span>
                                      <?php echo e($error); ?>

                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        
                            <?php echo Form::open(array('url' =>'admin/updatelocation', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                            	   
                                <?php echo Form::hidden('id',  $result['description']->location_id, array('class'=>'form-control', 'id'=>'id')); ?>

                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TitleAddress')); ?> </label>
                                      <div class="col-sm-10 col-md-4">
                                          <input type="text" name="address" value="<?php echo e($result['description']->full_address); ?>" class="form-control field-validate">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.TitleAddress')); ?></span>
                                     
                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                      </div>
                                </div>
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TitleSlug')); ?> </label>
                                      <div class="col-sm-10 col-md-4">
                                          <input type="text" name="slug" value="<?php echo e($result['description']->slug); ?>" class="form-control field-validate">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.TitleSlug')); ?></span>
                                     
                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                      </div>
                                </div>
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TitleLat')); ?> </label>
                                      <div class="col-sm-10 col-md-4">
                                          <input type="text" name="lat" value="<?php echo e($result['description']->lat); ?>" class="form-control field-validate">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.TitleLat')); ?></span>
                                     
                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                      </div>
                                </div>
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TitleLng')); ?> </label>
                                      <div class="col-sm-10 col-md-4">
                                          <input type="text" name="lng" value="<?php echo e($result['description']->lng); ?>" class="form-control field-validate">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.TitleLng')); ?></span>
                                     
                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                      </div>
                                </div>
                                 
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                <a href="<?php echo e(URL::to('admin/location')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
                              </div>
                              
                              <!-- /.box-footer -->
                            <?php echo Form::close(); ?>

                        </div>
                  </div>
              </div>
            </div>
            
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<script src="<?php echo asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<script type="text/javascript">
		$(function () {
			
			//for multiple languages
			<?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor<?php echo e($languages->languages_id); ?>');
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			//bootstrap WYSIHTML5 - text editor
			$(".textarea").wysihtml5();
			
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>