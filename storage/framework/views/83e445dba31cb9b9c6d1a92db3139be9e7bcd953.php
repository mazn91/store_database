<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Roles</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add a Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


<ul class="list-group" class="profile_details">

  <li class="list-group-item"><strong>Available Roles</strong></li>

  <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  	<li class="list-group-item">
  		<?php echo e($role->type); ?>

  	</li>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>


<br>

<div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="">

	    	<?php echo e(csrf_field()); ?>


	      <div class="form-group">
	      	<label for="role" class=" form-control-label"><strong>Add a role</strong></label>
	      	<input type="text" id="role" name="role" placeholder=" Admin, Employee or etc.." class="form-control">
	      </div>
	      

	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Add
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