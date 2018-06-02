<?php $__env->startSection('content'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Update User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<ul class="list-group" class="profile_details">

  <li class="list-group-item"><strong style=" color: #F72F34">First Name: </strong><span style="float: right">
  	<?php echo e(ucfirst($user->fname)); ?>

  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Last Name: </strong><span style="float: right">
  	<?php echo e(ucfirst($user->lname)); ?>

  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Email: </strong> <span style="float: right">
  	<?php echo e($user->email); ?>

  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Phone: </strong> <span style="float: right">
  	0<?php echo e(ucfirst($user->phone)); ?>

  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Gender: </strong> <span style="float: right">
  	<?php echo e(ucfirst($user->gender)); ?>

  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Status: </strong> <span style="float: right; color: green">
  	<?php if($user->status == 1): ?>
  	 	Activated 
  	<?php else: ?>
  		Deactivated 
  	<?php endif; ?>
  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Job Title: </strong> <span style="float: right">
  		Employee
  </span></li>

  <li class="list-group-item"><strong style=" color: #F72F34">Joined: </strong> <span style="float: right">
  	<?php echo e($user->created_at->todatestring()); ?>

  </span></li>
</ul>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>