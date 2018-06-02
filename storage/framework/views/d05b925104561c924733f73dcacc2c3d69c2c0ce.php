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
                            <li class="active">Register a Buyer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



		 <div class="card">

              <div class="card-header">
                <strong>Add an Buyer</strong> 
              </div>


              <div class="card-body card-block">

                <form method="post" action="/store/buyers">

                	<?php echo e(csrf_field()); ?>


                  <div class="form-group">
                  	<label for="fname" class=" form-control-label"><strong>Frist Name</strong></label>
                  	<input type="text" id="fname" name="fname" placeholder="Enter Buyer's First Name.." class="form-control">
                  </div>
                  
                  <div class="form-group">
                  	<label for="lname" class=" form-control-label"><strong>Last Name</strong></label>
                  	<input type="text" id="lname" name="lname" placeholder="Enter Buyer's Last Name.." class="form-control">
                  </div>	

                  <div class="form-group">
                  	<label for="email" class=" form-control-label"><strong>Email</strong></label>
                  	<input type="text" id="email" name="email" placeholder="Enter Buyer's Email.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="phone" class="form-control-label"><strong>Phone</strong></label>
                  	<input type="number" id="phone" name="phone" placeholder="Enter Buyer's Phone Number.." class="form-control">
                  </div>

                  
                  <div class="form-group">
                  	<label for="address" class=" form-control-label"><strong>Address</strong></label>
                  	<textarea type="text" id="address" name="address" class="form-control" placeholder="Enter Buyer's Address.."></textarea>
                  </div>
                  
                  <div class="form-group">
                  	<label for="city" class=" form-control-label"><strong>City</strong></label>
                  	<input type="text" id="city" name="city" placeholder="Enter Buyer's City.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="place_name" class=" form-control-label"><strong>Shop Name</strong></label>
                  	<input type="text" id="place_name" name="place_name" placeholder="Enter Buyer's City.." class="form-control">
                  </div>

                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Add Buyer
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