<?php $__env->startSection('content'); ?>

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><strong><?php echo e(ucfirst($item->name)); ?></strong></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Info</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



	<ul class="list-group" class="profile_details">

	  <li class="list-group-item"><strong style=" color: #F72F34">Name: </strong><span style="float: right">
	  	<?php echo e($item->name); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Description: </strong><span style="float: right">
	  	<?php echo e($item->description); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Code: </strong><span style="float: right">
	  	<?php echo e($item->code); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Quantity: </strong><span style="float: right">
	  	<?php echo e($item->quantity); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Consumption: </strong><span style="float: right">
	  	<?php echo e($item->consumption); ?> Watt
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Cost: </strong><span style="float: right">
	  	$ <?php echo e($item->cost); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Minimum Price: </strong><span style="float: right">
	  	$ <?php echo e($item->min_price); ?>

	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Category: </strong><span style="float: right">
	  	 <?php echo e($item->Category->name); ?>

	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Size: </strong><span style="float: right">
	  	  <?php echo e($item->size); ?>  <?php echo e($item->size()->first()->name); ?>

	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Color: </strong><span style="float: right">
	  	 <?php echo e($item->color()->first()->name); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Color Description: </strong><span style="float: right">
	  	 <?php echo e($item->color); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Material: </strong><span style="float: right">
	  	 <?php echo e($item->material()->first()->name); ?>

	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Material Description: </strong><span style="float: right">
	  	 <?php echo e($item->material); ?>

	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Warranty: </strong><span style="float: right">
	  	 <?php echo e($item->warranty); ?> Years
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Activation: </strong><span style="float: right; 

	  		<?php if($item->activation ==1): ?> color: green <?php else: ?>  color:red  <?php endif; ?>"
	  	>
	  	<?php if($item->activation ==1 ): ?>

	  		Activated

	  	<?php else: ?>

	  		Deactivated

	  	<?php endif; ?>
	  	 
	  </span></li>



	  <li class="list-group-item"><strong style=" color: #F72F34">Item Status: </strong><span style="float: right; 

	  		<?php if($item->stock ==1): ?> color: green <?php else: ?>  color:red  <?php endif; ?>"
	  	>
	  	<?php if($item->stock ==1 ): ?>

	  		In Stock

	  	<?php else: ?>

	  		Out of Stock

	  	<?php endif; ?>
	  	 
	  </span></li>






	</ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>