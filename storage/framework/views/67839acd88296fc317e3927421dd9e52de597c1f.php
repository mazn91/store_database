<?php $__env->startSection('content'); ?>

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Sale</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add Items To Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    
    <div class="row">








        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order Summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Samsung Galaxy S5</td>
                                    <td class="text-center">$900</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$900</td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S5 Extra Battery</td>
                                    <td class="text-center">$30.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$30.00</td>
                                </tr>
                                <tr>
                                    <td>Screen protector</td>
                                    <td class="text-center">$7</td>
                                    <td class="text-center">4</td>
                                    <td class="text-right">$28</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Total</strong></td>
                                    <td class="highrow text-right">$958.00</td>
                                </tr>
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>