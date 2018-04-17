<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Items</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Show Items</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Items</strong>

                  <div class="row">

                        <form class="navbar-form" role="search" method="post" action="/find/item">
            
                            <div class="input-group add-on" style="width: 500px; margin-left: 50%" >

                                <?php echo e(csrf_field()); ?>


                              <input class="form-control" placeholder="Item code or item name" name="search" id="search" type="text" autofocus>
                              
                              <div class="input-group-btn">
                                <button class="btn" type="submit" style="border-top-right-radius: 5px; margin-left: 4px; background-color: #22A7F0; color: #fff">Search</button>
                              </div>

                            </div>    

                        </form>
  
                </div>


            </div>

            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Item Code</th>
                      <th scope="col">Item Quantity</th>
                      <th scope="col">Item Minimum Price</th>
                      <th scope="col">Item Miximum Price</th>
                      <th scope="col">Item Category</th>
                      <th scope="col">Color Category</th>
                      <th scope="col">Material Category</th>
                      <th scope="col">Stock Status</th>
                      <th scope="col">Activation Status</th>
                      <th scope="col">Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <tr>
	                      <th scope="row"><?php echo e(++$key); ?></th>

	                      <td>
	                      	<a href="/item/info/<?php echo e($item->id); ?>" style="color: #F72F34">
	                      		<?php echo e($item->name); ?>

	                      	</a>
	                      	

	                      </td>
	                      <td><?php echo e($item->code); ?></td>
	                      <td><?php echo e($item->quantity); ?></td>
	                      <td>$ <?php echo e($item->min_price); ?></td>
	                      <td>$ <?php echo e($item->max_price); ?></td>
	                      <td><?php echo e($item->category->name); ?></td>
	                      <td><?php echo e($item->color()->first()->name); ?></td>
	                      <td><?php echo e($item->material()->first()->name); ?></td>
	                      
	                     

	                      
	                      	<td style="<?php if($item->stock){echo 'color: green';}else{echo 'color: red';}?>">
	                      		<?php if($item->stock): ?>

	                      		In

	                      	<?php else: ?>

	                      		Out

	                      	<?php endif; ?>	
	                      	

	                      </td>



	                      <td>
	                      	<a href="/activation/item/<?php echo e($item->id); ?>" style="<?php if($item->activation){echo 'color: green';}else{echo 'color: red';}?>">
	                      		<?php if($item->activation): ?>

	                      		Activated

	                      	<?php else: ?>

	                      		Deactivated

	                      	<?php endif; ?>	
	                      	</a>
	                      	

	                      </td>

	                      <td>
	                      	<a href="/edit/item/<?php echo e($item->id); ?>">
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
            	<?php echo e($items->links()); ?>

            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>