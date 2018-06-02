<?php $__env->startSection('content'); ?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Invoice Info</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">This order contains the following items</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>






    <ul class="list-group" class="profile_details">

          <li class="list-group-item"><strong style=" color: #F72F34">Order Number </strong><span style="float: right">
            <?php echo e($find->first()->number); ?>

          </span></li>


          <li class="list-group-item"><strong style=" color: #F72F34">Purchased Date </strong> <span style="float: right">
            <?php echo e($find->first()->created_at); ?>

          </span></li>

          <li class="list-group-item"><strong style=" color: #F72F34">Sold By </strong> <span style="float: right">
            <?php echo e(ucfirst($find->first()->user->fname)); ?> <?php echo e(ucfirst($find->first()->user->lname)); ?>

          </span></li>
    </ul>
        
  

    <div class="row" style="margin-top: 25px; background-color: #fff">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="margin-top: 20px">
                    <h3 class="panel-title"><strong>Order Summary: <span style="color: #F72F34"></span></strong></h3>
                    <a href="/return/all/<?php echo e($find->first()->number); ?>" style="float: right; margin-bottom: 2px">
                        <button class="btn btn-sm btn-danger">Return All</button>
                    </a>
                </div>
                <div class="panel-body" style="margin-top: 25px">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Warranty Expiration</strong></td>
                                    <td class="text-right"><strong>Total Price</strong></td>
                                    <td class="text-right"><strong>Return</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                <?php $__currentLoopData = $find; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $__currentLoopData = $item->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <td><?php echo e($product->name); ?></td>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td class="text-center">$<?php echo e($item->price); ?></td>
                                    <td class="text-center"><?php echo e($item->quantity); ?></td>
                                    <td class="text-center"><?php echo e($item->end_warranty); ?></td>
                                    <td class="text-right">$<?php echo e($item->total_price); ?></td>

                                    <td class="text-right">
                                        <a href="/return/item/<?php echo e($item->id); ?>">
                                            <button class="btn btn-sm btn-warning">Return</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              
                                
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong style="font-size: 15pt">Total</strong></td>
                                    <td class="no-line text-right"><strong style="font-size: 15pt">$<?php echo e($find->pluck('total_price')->sum()); ?></strong></td>
                                    <td class="no-line"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>