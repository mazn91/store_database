<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Loans</h1>
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
                <strong class="card-title">Buyers in loan</strong>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Shop Name</th>
                      <th scope="col">Unpaid Amount</th>
                      <th scope="col">Confirmation</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  	
                    <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e(++$key); ?></td>
                        
                        <td>
                            <?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($buyer->id == $loan->buyer_id): ?>
                                    <?php echo e($buyer->place_name); ?>

                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        
                        <td>$<?php echo e($loan->total_price); ?></td>

                        <td>
                            <a href="/confirm/loan/<?php echo e($loan->buyer_id); ?>" >
                              <button class="btn btn-sm btn-warning loan" >Pay Loan</button>
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