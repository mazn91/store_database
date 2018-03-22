<?php $__env->startSection('content'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Add Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



		 <div class="card">

              <div class="card-header">
                <strong>Add an Employee</strong> 
              </div>


              <div class="card-body card-block">

                <form action="" method="post">

                  <div class="form-group">
                  	<label for="fname" class=" form-control-label"><strong>Frist Name</strong></label>
                  	<input type="text" id="fname" name="fname" placeholder="Enter Your First Name.." class="form-control">
                  </div>
                  
                  <div class="form-group">
                  	<label for="lname" class=" form-control-label"><strong>Last Name</strong></label>
                  	<input type="text" id="lname" name="lname" placeholder="Enter Your Last Name.." class="form-control">
                  </div>	

                  <div class="form-group">
                  	<label for="email" class=" form-control-label"><strong>Email</strong></label>
                  	<input type="text" id="email" name="email" placeholder="Enter YourEmail.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="phone" class="form-control-label"><strong>Phone</strong></label>
                  	<input type="number" id="phone" name="phone" placeholder="Enter Phone Number.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="phone" class=" form-control-label"><strong>Gender</strong></label>
	                  	<select name="gender" class="form-control">
						  <option value="male">Male</option>
						  <option value="female">Female</option>
						</select>
                  </div>



                  <div class="form-group">
                  	<label for="password" class=" form-control-label"><strong>Password</strong></label>
                  	<input type="password" id="password" name="password" placeholder="Enter Your Password.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="password" class=" form-control-label"><strong>Password Again</strong></label>
                  	<input type="password" id="password" name="password" placeholder="Enter Your Password Again.." class="form-control">
                  </div>

                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Add User
	                	</button>

	                	<a href="/" class="btn btn-danger btn-sm">
	                		
	                  		<i class="fa fa-ban"></i> Cancel
	                	
	                	</a>

	                	
	              </div>

                </form>
              </div>


	            

        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>