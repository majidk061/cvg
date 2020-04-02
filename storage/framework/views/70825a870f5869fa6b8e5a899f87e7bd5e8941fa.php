<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Location')); ?> <small><?php echo e(trans('labels.ListingAllLocation')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Location')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.ListingAllLocation')); ?> </h3>
            <div class="box-tools pull-right">
            	<a href="<?php echo e(URL::to('admin/addlocation')); ?>" type="button" class="btn btn-block btn-primary"><?php echo e(trans('labels.AddLocation')); ?></a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          
            <div class="row">
              <div class="col-xs-12">
              		
				  <?php if(count($errors) > 0): ?>
					  <?php if($errors->any()): ?>
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php echo e($errors->first()); ?>

						</div>
					  <?php endif; ?>
				  <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo e(trans('labels.ID')); ?></th>
                      <th><?php echo e(trans('labels.address')); ?></th>
                      <th><?php echo e(trans('labels.slug')); ?></th>
                      <th><?php echo e(trans('labels.lat')); ?></th>
                      <th><?php echo e(trans('labels.lng')); ?></th>
                      <th><?php echo e(trans('labels.date')); ?></th>
                      <th></th>
                    </tr>
                  </thead>
                   <tbody>
                    
                   <?php if(isset($news) && count($news)>0): ?>
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    	
                        <tr>
                            <td><?php echo e($new->location_id); ?></td>
                            <td><strong><?php echo e($new->full_address); ?></strong></td>
                            <td>
                            	<?php echo e($new->slug); ?>

                            </td>
                             <td>
                              <?php echo e($new->lat); ?>

                            </td>
                            <td>
                              <?php echo e($new->lng); ?>

                            </td>
                            <td>
                             	<strong><?php echo e(trans('labels.AddedDate')); ?>: </strong> <?php echo e($new->created_at); ?><br>
                           		<strong><?php echo e(trans('labels.ModifiedDate')); ?>: </strong><?php echo e($new->updated_at); ?>

                            </td>
                           
                            <td>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Edit')); ?>" href="editlocation/<?php echo e($new->location_id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                
                                <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Delete')); ?>" id="deleteNewsId" news_id="<?php echo e($new->location_id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php else: ?>
                   <tr>
                   		<td colspan="6"><?php echo e(trans('labels.NoRecordFound')); ?>.</td>
                   </tr>
                   <?php endif; ?>
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">
                	<?php echo e($news->links('vendor.pagination.default')); ?>

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
    
    <!-- deleteNewsModal -->
	<div class="modal fade" id="deleteNewsModal" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deleteNewsModalLabel"><?php echo e(trans('labels.DeleteLocation')); ?></h4>
		  </div>
		  <?php echo Form::open(array('url' =>'admin/deletelocation', 'name'=>'deleteNews', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

				  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

				  <?php echo Form::hidden('id','', array('class'=>'form-control', 'id'=>'id')); ?>

		  <div class="modal-body">						
			  <p><?php echo e(trans('labels.DeleteLocationText')); ?></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
			<button type="submit" class="btn btn-primary" id="deleteNews"><?php echo e(trans('labels.Delete')); ?></button>
		  </div>
		  <?php echo Form::close(); ?>

		</div>
	  </div>
	</div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>