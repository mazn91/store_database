<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Size</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add a Size For Your Items</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div class="card">

          

              <div class="card-body card-block">

                <form method="post" action="/add/size">

                	<?php echo e(csrf_field()); ?>


                  <div class="form-group">
                  	<label for="name" class=" form-control-label"><strong>Size Name</strong></label>
                  	<input type="text" id="name" name="name" placeholder="Enter Size Name.." class="form-control">
                  </div>
                  

                  <div class="form-group">
                  	<label for="description" class=" form-control-label"><strong>Size Description</strong></label>
                  	<textarea type="text" id="description" name="description" placeholder="Optional, Size Description.." class="form-control"></textarea>
                  </div>
                  


                  
                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Add Size
	                	</button>

	                	<a href="/" class="btn btn-danger btn-sm">
	                  		<i class="fa fa-ban"></i> Cancel
	                	</a>
	                	
	              </div>

		             <div class="form-group">

	        				<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	        		</div>

                </form>

              </div>

        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>