<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Returned Items</h1>
                </div>
            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Returned </strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Qunatity</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $returns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$return): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <tr>
	                      <td><?php echo e($return->order->number); ?></td>
	                      <td><?php echo e($return->item->name); ?></td>
                          <td><?php echo e($return->quantity); ?></td>
	                      <td><?php echo e($return->description); ?></td>
                          <td><?php echo e($return->created_at->toDateString()); ?></td>
	                      <td>
	                      	<?php if($return->confirmation == 0): ?>
                                <span style="color: #F72F34">Pending</span>
                            <?php endif; ?>

                            <?php if($return->confirmation == 1): ?>
                                <span style="color: green">Confirmed</span>
                            <?php endif; ?>


	                      </td>


	                     
	                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	<?php echo e($returns->links()); ?>

            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>