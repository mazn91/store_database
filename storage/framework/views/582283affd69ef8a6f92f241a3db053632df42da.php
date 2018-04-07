<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Buyers</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">All buyers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Buyers</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Addressr</th>
                      <th scope="col">City</th>
                      <th scope="col">Shop Name</th>
                      <th scope="col">Update</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <tr>
	                      <th scope="row"><?php echo e(++$key); ?></th>
	                      <td><?php echo e(ucfirst($buyer->fname)); ?></td>
	                      <td><?php echo e(ucfirst($buyer->lname)); ?></td>
	                      <td><?php echo e($buyer->email); ?></td>
	                      <td>0<?php echo e($buyer->phone); ?></td>
	                      <td><?php echo e(ucfirst($buyer->address)); ?></td>
	                      <td><?php echo e(ucfirst($buyer->city)); ?></td>
	                      <td><?php echo e(ucfirst($buyer->place_name)); ?></td>

	                      <td>
	                      	<a href="/update/buyer/<?php echo e($buyer->id); ?>">
	                      		<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        </button>
        				     </a>
	                      </td>


	                      <td>
	                      	<a href="/activation/buyer/<?php echo e($buyer->id); ?>" style="<?php if($buyer->status){echo 'color: green';}else{echo 'color: red';}?>">
	                      		<?php if($buyer->status): ?>

	                      		Activated

	                      	<?php else: ?>

	                      		Deactivated

	                      	<?php endif; ?>	
	                      	</a>
	                      	

	                      </td>

	                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                      
                    
  
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	<?php echo e($buyers->links()); ?>

            </div>

        </div>


        	
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>