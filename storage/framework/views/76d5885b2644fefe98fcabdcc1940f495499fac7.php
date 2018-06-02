<style type="text/css">
    
    @media  print
    {
    body * { visibility: hidden; }
    #printcontent * { visibility: visible; }
    #printcontent { position: absolute; top: 40px; left: 30px; }
    }
</style>



<?php $__env->startSection('content'); ?>







<div class="container" id="printcontent">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice Order # <?php echo e($current_order->first()->number); ?></h2>  
                <h6>Date <?php echo e($current_order->first()->created_at); ?></h6>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                    <strong>Address:</strong><br>
                        Lumio Showroom<br>
                        at Qaiwan Tower<br>
                        Salim St.<br>
                        Sulaimani
                    </address>
                </div>
               
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Contact:</strong><br>
                        07718392323<br>
                        light.lumio@gmail.com
                    </address>
                </div>
               
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order Summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Code</strong></td>
                                    <td class="text-center"><strong>Name</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Total Price</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                <?php $__currentLoopData = $current_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->item->code); ?></td>
                                    <td class="text-center"><?php echo e($order->item->name); ?></td>
                                    <td class="text-center">$<?php echo e($order->price); ?></td>
                                    <td class="text-center"><?php echo e($order->quantity); ?></td>
                                    <td class="text-center">$<?php echo e($order->total_price); ?></td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                <tr>
                                    <td class="no-line"></td>   
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total</strong></td>
                                    <td class="no-line text-center"><strong>$<?php echo e($current_order->pluck('total_price')->sum()); ?></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>