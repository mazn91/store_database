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
                        <li class="active">All Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Employees</strong>
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
                      <th scope="col">Gender</th>
                      <th scope="col">Job Title</th>
                      <th scope="col">Update</th>
                      <th scope="col">Password</th>
                      <th scope="col">Role</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <tr>
	                      <th scope="row"><?php echo e(++$key); ?></th>
	                      <td><?php echo e(ucfirst($user->fname)); ?></td>
	                      <td><?php echo e(ucfirst($user->lname)); ?></td>
	                      <td><?php echo e($user->email); ?></td>
	                      <td>0<?php echo e($user->phone); ?></td>
	                      <td><?php echo e(ucfirst($user->gender)); ?></td>
	                      <td>
                            <ol>
                              <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php echo e(ucfirst($role->type)); ?>


                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                        </td>

	                      <td>
	                      	<a href="/update/user/<?php echo e($user->id); ?>">
	                      	<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        	</button>
        				        	</a>
	                      </td>

                        <td>

                          <a href="/reset/password/<?php echo e($user->id); ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Reset
                            </button>
                          </a>

                        </td>

                        <td>

                           <a href="">
                            <button type="submit" class="btn btn-warning btn-sm">
                                Change
                            </button>
                          </a>
                          
                        </td>

	                      <td>
	                      	<a href="/activation/user/<?php echo e($user->id); ?>" style="<?php if($user->status){echo 'color: green';}else{echo 'color: red';}?>">
	                      		<?php if($user->status): ?>

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

        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>