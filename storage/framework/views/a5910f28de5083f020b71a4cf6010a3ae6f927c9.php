<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Item</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Udpate The Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/update/item/<?php echo e($item->id); ?>">

	    	<?php echo e(csrf_field()); ?>


	      <div class="form-group">
	      	<label for="name" class=" form-control-label"><strong>Name</strong></label>
	      	<input type="text" id="name" name="name" value="<?php echo e($item->name); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="description" class=" form-control-label"><strong>Description</strong></label>
	      	<textarea id="description" name="description" class="form-control"><?php echo e($item->description); ?></textarea>
	      </div>


	      <div class="form-group">
	      	<label for="code" class=" form-control-label"><strong>Code</strong></label>
	      	<input type="text" id="code" name="code" value="<?php echo e($item->code); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="quantity" class=" form-control-label"><strong>Quantity</strong></label>
	      	<input type="text" id="name" name="quantity" value="<?php echo e($item->quantity); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="size_id" class=" form-control-label"><strong>Size Measurement</strong></label>
	      	

	      		<select class="form-control" id="size_id" name="size_id">

	      			<?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	      				<option value="<?php echo e($size->id); ?>" <?php if($item->size_id == $size->id){echo "selected";}?>>
	      					<?php echo e($size->name); ?>

	      				</option>

	      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	      		</select>


	      </div>

	      <div class="form-group">
	      	<label for="size" class=" form-control-label"><strong>Size</strong></label>
	      	<input type="size" id="size" name="size" value="<?php echo e($item->size); ?>" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="color_id" class=" form-control-label"><strong>Color Category</strong></label>

	      		<select class="form-control" id="color_id" name="color_id">

	      			<?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	      				<option value="<?php echo e($color->id); ?>" <?php if($item->color_id == $color->id){echo "selected";}?>>
	      					<?php echo e($color->name); ?>

	      				</option>

	      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	      		</select>
	      	
	      </div>


	      <div class="form-group">
	      	<label for="color" class=" form-control-label"><strong>Color</strong></label>
	      	<input type="text" id="color" name="color" value="<?php echo e($item->color); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="material_id" class=" form-control-label"><strong>Material Category</strong></label>
	      	
	      		<select class="form-control" id="material_id" name="material_id">

	      			<?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	      				<option value="<?php echo e($material->id); ?>" <?php if($item->material_id == $material->id){echo "selected";}?>>
	      					<?php echo e($material->name); ?>

	      				</option>

	      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	      		</select>


	      </div>


	      <div class="form-group">
	      	<label for="material" class=" form-control-label"><strong>Material</strong></label>
	      	<input type="text" id="material" name="material" value="<?php echo e($item->material); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="consumption" class=" form-control-label"><strong>Consumption</strong></label>
	      	<input type="number" id="consumption" name="consumption" value="<?php echo e($item->consumption); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="cost" class=" form-control-label"><strong>Cost</strong></label>
	      	<input type="number" step="any" id="cost" name="cost" value="<?php echo e($item->cost); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="min_price" class=" form-control-label"><strong>Minimum Price</strong></label>
	      	<input type="number" step="any" id="min_price" name="min_price" value="<?php echo e($item->min_price); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="max_price" class=" form-control-label"><strong>Maximum Price</strong></label>
	      	<input type="number" step="any" id="max_price" name="max_price" value="<?php echo e($item->max_price); ?>" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="category_id" class=" form-control-label"><strong>Item Category</strong></label>
	      		
	      		<select class="form-control" id="category_id" name="category_id">

	      			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	      				<option value="<?php echo e($category->id); ?>" <?php if($item->category_id == $category->id){echo "selected";}?>>
	      					<?php echo e($category->name); ?>

	      				</option>

	      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	      		</select>
	      		
	      </div>

	     




	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Update Item
	        	</button>

	        	<a href="/show/items" class="btn btn-danger btn-sm">
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