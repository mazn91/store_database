<?php $__env->startSection('content'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-12 mb-4">
            <div class="card-group">
                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa  fa-home"></i>
                        </div>

                        <div class="h4 mb-0">
                            <span class="count"><?php echo e($buyers); ?></span>
                        </div>

                        <small class="text-muted text-uppercase font-weight-bold">Total Shops</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-barcode"></i>
                        </div>
                        <div class="h4 mb-0">
                            <span class="count"><?php echo e($items); ?></span>
                        </div>
                        <small class="text-muted text-uppercase font-weight-bold">Total Items</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px; background-color: #7A942E"></div>
                    </div>
                </div>
                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <div class="h4 mb-0">
                            <span class="count"><?php echo e($orders); ?></span>
                        </div>
                        <small class="text-muted text-uppercase font-weight-bold">Total Orders</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>



                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-dollar (alias)"></i>
                        </div>
                        <div class="h4 mb-0">
                            <span class="count"><?php echo e($total_revenue); ?></span>
                        </div>
                        <small class="text-muted text-uppercase font-weight-bold">Total Revenue</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>

                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa  fa-plus"></i>
                        </div>
                        <div class="h4 mb-0">$<?php echo e($total_profit); ?></div>
                        <small class="text-muted text-uppercase font-weight-bold">Total Profit</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-md-6 no-padding ">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa  fa-ban"></i>
                        </div>
                        <div class="h4 mb-0">
                            $<span class="count"><?php echo e($total_loan); ?></span>
                        </div>
                        <small class="text-muted text-uppercase font-weight-bold">Total Loan</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-6" style="width: 40%; height: 5px; background-color: #763568"></div>
                    </div>
                </div>
            </div>
        </div>

                   





<?php $__env->stopSection(); ?>





                    
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>