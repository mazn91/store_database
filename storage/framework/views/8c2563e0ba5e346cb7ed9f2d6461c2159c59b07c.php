<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Update</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Update Buyer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




	<div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/update/buyer/<?php echo e($buyer->id); ?>">

	    	<?php echo e(csrf_field()); ?>


	      <div class="form-group">
	      	<label for="fname" class=" form-control-label"><strong>Frist Name</strong></label>
	      	<input type="text" id="fname" name="fname" value="<?php echo e($buyer->fname); ?>" class="form-control">
	      </div>
	      
	      <div class="form-group">
	      	<label for="lname" class=" form-control-label"><strong>Last Name</strong></label>
	      	<input type="text" id="lname" name="lname" value="<?php echo e($buyer->lname); ?>" class="form-control">
	      </div>	

	      <div class="form-group">
	      	<label for="email" class=" form-control-label"><strong>Email</strong></label>
	      	<input type="text" id="email" name="email" value="<?php echo e($buyer->email); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="phone" class="form-control-label"><strong>Phone</strong></label>
	      	<input type="number" id="phone" name="phone" value="<?php echo e($buyer->phone); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="address" class=" form-control-label"><strong>Address</strong></label>
	      	<textarea type="text" id="address" name="address"  class="form-control"><?php echo e($buyer->address); ?></textarea>
	      </div>


	      <div class="form-group">
	      	<label for="city" class=" form-control-label"><strong>City</strong></label>
	      	<input type="text" id="city" name="city" value="<?php echo e($buyer->city); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="place_name" class=" form-control-label"><strong>Shop Name</strong></label>
	      	<input type="text" id="place_name" name="place_name" value="<?php echo e($buyer->place_name); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Update Buyer
	        	</button>

	        	<a href="/" class="btn btn-danger btn-sm">
	          		<i class="fa fa-ban"></i>Cancel
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