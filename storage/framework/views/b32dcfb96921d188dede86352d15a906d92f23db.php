
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.website_settings')); ?> <small><?php echo e(trans('labels.website_settings')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.website_settings')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.website_settings')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Setting</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          <?php if( count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-success" role="alert">
                                      <span class="icon fa fa-check" aria-hidden="true"></span>
                                      <span class="sr-only"><?php echo e(trans('labels.Setting')); ?>Error:</span>
                                      <?php echo e($error); ?>

                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        
                            <?php echo Form::open(array('url' =>'admin/updateSetting', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                            <br>
                             
                             
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.sitename logo')); ?></label>
                              <div class="col-sm-10 col-md-4">
                              <select name="<?php echo e($result['settings'][78]->name); ?>" class="form-control">
                              	<option <?php if($result['settings'][78]->value == 'name'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="name"> <?php echo e(trans('labels.Name')); ?></option>
                              	<option <?php if($result['settings'][78]->value == 'logo'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="logo"> <?php echo e(trans('labels.Logo')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.sitename logo Text')); ?></span>
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.website name')); ?></label>
                              <div class="col-sm-10 col-md-4">
                                <input type="text" id="<?php echo e($result['settings'][79]->name); ?>" name="<?php echo e($result['settings'][79]->name); ?>" class="form-control" value="<?=stripslashes($result['settings'][79]->value)?>">
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.website name text')); ?></span>
                              </div>
                            </div>                           
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.facebookLink')); ?></label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text($result['settings'][50]->name,  $result['settings'][50]->value, array('class'=>'form-control', 'id'=>$result['settings'][50]->name)); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.facebookLinkText')); ?></span>
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.googleLink')); ?></label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text($result['settings'][51]->name,  $result['settings'][51]->value, array('class'=>'form-control', 'id'=>$result['settings'][51]->name)); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.googleLinkText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.twitterLink')); ?></label>
                              <div class="col-sm-10 col-md-4">
                              		<?php echo Form::text($result['settings'][52]->name,  $result['settings'][52]->value, array('class'=>'form-control', 'id'=>$result['settings'][52]->name)); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.twitterLinkText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.linkedLink')); ?></label>
                              <div class="col-sm-10 col-md-4">
                              		<?php echo Form::text($result['settings'][53]->name,  $result['settings'][53]->value, array('class'=>'form-control', 'id'=>$result['settings'][53]->name)); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.linkedLinkText')); ?></span>
                              </div>
                            </div>
                            
                            
                           </div>
                           
                              <!-- /.box-body -->
                            <div class="box-footer text-center">
                            	<button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?> </button>
                            	<a href="<?php echo e(URL::to('admin/newscategories')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>