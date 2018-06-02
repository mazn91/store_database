<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Orders</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">find an order with order number</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="row" style="margin-top: 25px;">
                               

            <form class="navbar-form" role="search" method="post" action="/find/order">

                <div class="input-group add-on" style="width: 500px; margin-left: 50%" >

                    <?php echo e(csrf_field()); ?>


                  <input class="form-control" placeholder="Order Number Only" name="search" id="search" type="text" autofocus>
                  
                  <div class="input-group-btn">
                    <button class="btn" type="submit" style="border-top-right-radius: 5px; margin-left: 4px; background-color: #22A7F0; color: #fff">Search</button>
                  </div>

                </div>

                

            </form>


        
    </div>

	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>