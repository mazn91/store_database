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
                        <li class="active">Add an Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


		<div class="card">

              <div class="card-body card-block">

                <form method="post" action="/add/items">

                	<?php echo e(csrf_field()); ?>


                  <div class="form-group">
                  	<label for="name" class=" form-control-label"><strong>Item Name</strong></label>
                  	<input type="text" id="name" name="name" placeholder="Enter Item Name.." class="form-control">
                  </div>
                  

                  <div class="form-group">
                  	<label for="description" class=" form-control-label"><strong>Item Description</strong></label>
                  	<textarea type="text" id="description" name="description" placeholder="Enter Item Description.." class="form-control"></textarea>
                  </div>
                  
                  <div class="form-group">
                  	<label for="code" class=" form-control-label"><strong>Item Code</strong></label>
                  	<input type="code" id="code" name="code" placeholder="Enter Item Code.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="quantity" class=" form-control-label"><strong>Item Quantity</strong></label>
                  	<input type="number" id="quantity" name="quantity" placeholder="Enter Item Quantity.." class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="size_" class=" form-control-label"><strong>Size Category</strong></label>
                    <select type="number" id="size_" name="size_category" class="form-control">

                      <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($size->id); ?>"><?php echo e($size->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="size" class=" form-control-label"><strong>Item Size</strong></label>
                  	<input type="text" id="size" name="size" placeholder="Enter Item Size.." class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="color_category" class=" form-control-label"><strong>Color Category</strong></label>
                    <select type="number" id="color_category" name="color_category" class="form-control">

                      <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($color->id); ?>"><?php echo e($color->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="color" class=" form-control-label"><strong>Item Color</strong></label>
                  	<input type="text" id="color" name="color" placeholder="Enter Item Color.." class="form-control">
                  </div>



                  <div class="form-group">
                    <label for="material_category" class=" form-control-label"><strong>Material Category</strong></label>
                    <select type="number" id="material_category" name="material_category" class="form-control">

                      <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($material->id); ?>"><?php echo e($material->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="material" class=" form-control-label"><strong>Item Material</strong></label>
                  	<input type="text" id="material" name="material" placeholder="Enter Item Material.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="consumption" class=" form-control-label"><strong>Item Consumption</strong></label>
                  	<input type="number" step="any" id="consumption" name="consumption" placeholder="Enter Item Consumption in Watt.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="cost" class=" form-control-label"><strong>Item Cost</strong></label>
                  	<input type="number" step="any" id="cost" name="cost" placeholder="Enter Item Cost in Dollars.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="min_price" class=" form-control-label"><strong>Item Minimum Price</strong></label>
                  	<input type="number" step="any" id="min_price" name="min_price" placeholder="Enter Item Minimum Price in Dollars.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="max_price" class=" form-control-label"><strong>Item Maximum Price</strong></label>
                  	<input type="number" step="any" id="max_price" name="max_price" placeholder="Enter Item Maximum Price in Dollars.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="category" class=" form-control-label"><strong>Item's Category</strong></label>
                  	<select type="number" id="category" name="category" class="form-control">

                  		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  			<option value="<?php echo e($category->id); ?>"><?php echo e(ucfirst($category->name)); ?></option>
                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  		
                  	</select>
                  </div>

                  <div class="form-group">
                    <label for="warranty" class=" form-control-label"><strong>Warranty</strong></label>
                    <input type="number" step="any" id="warranty" name="warranty" placeholder="Enter Years of Warranty.." class="form-control">
                  </div>
                  
                  
                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Add Item
	                	</button>

	                	<a href="/" class="btn btn-danger btn-sm">
	                  		<i class="fa fa-ban"></i> Cancel
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