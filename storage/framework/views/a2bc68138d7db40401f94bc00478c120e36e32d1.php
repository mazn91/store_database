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
                        <li class="active">Update User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




	<div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/update/profile/<?php echo e($user->id); ?>">

	    	<?php echo e(csrf_field()); ?>


	      <div class="form-group">
	      	<label for="fname" class=" form-control-label"><strong>Frist Name</strong></label>
	      	<input type="text" id="fname" name="fname" value="<?php echo e($user->fname); ?>" class="form-control">
	      </div>
	      
	      <div class="form-group">
	      	<label for="lname" class=" form-control-label"><strong>Last Name</strong></label>
	      	<input type="text" id="lname" name="lname" value="<?php echo e($user->lname); ?>" class="form-control">
	      </div>	

	      <div class="form-group">
	      	<label for="email" class=" form-control-label"><strong>Email</strong></label>
	      	<input type="text" id="email" name="email" value="<?php echo e($user->email); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="phone" class="form-control-label"><strong>Phone</strong></label>
	      	<input type="number" id="phone" name="phone" value="<?php echo e($user->phone); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="phone" class=" form-control-label"><strong>Gender</strong></label>
	          	<select name="gender" class="form-control">
				  <option value="male" 
				  	<?php if($user->gender == 'male'): ?>
				  		selected="selected"
				  	<?php endif; ?>

				  >Male</option>
				  <option value="female"

				  	<?php if($user->gender == 'female'): ?>
				  		selected="selected"
				  	<?php endif; ?>
				  >Female</option>
				</select>
	      </div>


	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Update
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


	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Role</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Change Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>







<div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/change/role/<?php echo e($user->id); ?>">

	    	<?php echo e(csrf_field()); ?>


		    	<div class="form-group">
		      		<label for="phone" class=" form-control-label"><strong>Role</strong></label>

		      		<select name="role" class="form-control">
						  <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						  		<option value="<?php echo e($role->id); ?>" 
						  			<?php if($role->type == $user_role): ?>
								  		selected="selected"
								  	<?php endif; ?>>

						  		<?php echo e($role->type); ?>


						  		</option>

						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>


				<div class="form-group">
		        	<button type="submit" class="btn btn-primary btn-sm">
		          		<i class="fa fa-dot-circle-o"></i>Change
		        	</button>

		        	<a href="/" class="btn btn-danger btn-sm">
		          		<i class="fa fa-ban"></i>Cancel
		        	</a>			
	     		 </div>


	    </form>
	</div>    
</div>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>