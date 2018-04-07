<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Color</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Available Colors</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Colors</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Update</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <tr>
	                      <th scope="row"><?php echo e(++$key); ?></th>
	                      <td><?php echo e(ucfirst($color->name)); ?></td>
	                      <td><?php echo e($color->description); ?></td>
	                      <td>
	                      	<a href="/update/color/<?php echo e($color->id); ?>">
	                      		<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        </button>
        				    </a>
	                      </td>


	                     
	                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	<?php echo e($colors->links()); ?>

            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>