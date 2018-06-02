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


    


    <div class="col-sm-8 col-md-8 col-lg-8" >


        



        <div class="row" style="margin-top: 10px; background-color: #ffffff">

            <div class="col-lg-12">
                <div class="card">



                    <div class="card-header">
                       <div  style="width: 500px; margin-left: 200px;">

                            <form class="navbar-form" role="search" method="post" action="/search/item">
                
                                <div class="input-group add-on">

                                    <?php echo e(csrf_field()); ?>


                                  <input class="form-control" placeholder="Search" name="search" id="search" type="text" autofocus>
                                  
                                  <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" style="border-top-right-radius: 5px; margin-left: 4px;">Search</button>
                                  </div>

                                </div>

                                

                            </form>
                            
                        </div>
                    </div>





                    <?php if(session('many_items')): ?>
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Code</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Minimum Price</th>
                              <th scope="col">Miximum Price</th>
                              <th scope="col">Item  Category</th>
                              <th scope="col">Color Category</th>
                              <th scope="col">Material Category</th>
                              
                              <th scope="col">Add</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $many_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <td scope="row"><?php echo e(++$key); ?></td>

                                  <td>
                                    <a href="/item/info/<?php echo e($item->id); ?>" style="color: #F72F34">
                                        <?php echo e($item->name); ?>

                                    </a>
                                    

                                  </td>
                                  <td><?php echo e($item->code); ?></td>
                                  <td><?php echo e($item->quantity); ?></td>
                                  <td>$ <?php echo e($item->min_price); ?></td>
                                  <td>$ <?php echo e($item->max_price); ?></td>
                                  <td><?php echo e($item->category->name); ?></td>
                                  <td><?php echo e($item->color()->first()->name); ?></td>
                                  <td><?php echo e($item->material()->first()->name); ?></td>
                                  
                                 

                                  
                                   


                                  <td>
                                    <a href="/add/basket/<?php echo e($item->id); ?>">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                                Add
                                        </button>
                                    </a>
                                  </td>


                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                              
                            
          
                          </tbody>
                        </table>
                    </div>









                    <div style="margin-left: auto; margin-right: auto;">
                        
                    </div>
                    <?php endif; ?>

                    
                </div>
            </div>   


            
        </div>




                    
    </div>




    <div class="col-sm-4 col-md-3 col-lg-4" style="background-color: #fff; margin-top: 10px;">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding: 16px; background-color: #757D75; width: 100%;">
                <h3 class="text-center"><strong style="color: #fff">Order Summary</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed" >
                        <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Item Price</strong></td>
                                <td class="text-center"><strong>Item Quantity</strong></td> 
                                <td class="text-center"><strong>Total</strong></td>
                                <td class="text-right"><strong></strong></td>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $baskets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($basket->item->name); ?></td>

                                <td class="text-center">
                                    $<?php echo e($basket->price); ?>


                                        <?php if($basket->price == $basket->item->max_price): ?>

                                         <a href="/discount/basket/<?php echo e($basket->id); ?>">
                                            <i class="fa fa-arrow-circle-down" style="color: #22A7F0; margin-left: 5px;"></i>
                                        </a>

                                        <?php endif; ?>
                                </td>

                                <td class="text-center">

                                    <form method="post" action="/update/quantity/<?php echo e($basket->id); ?>">

                                            <?php echo e(csrf_field()); ?>


                                          <input type="number" name="quantity" value="<?php echo e($basket->quantity); ?>" style="width: 50px"> 

                                          <button type="submit"><i class="fa fa-check-square" style="color: #26C281;"></i></button>

                                                                                          
                                    </form>
                                    
                                </td>

                               
                                <td class="text-center">
                                    $<?php echo e($basket->total_price); ?>

                                </td>

                                <td class="text-right">
                                    
                                   

                                    <a href="/delete/basket/<?php echo e($basket->id); ?>">
                                        <i class="fa fa-minus-circle" style="color: #C91F37;"></i>
                                    </a>

                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <tr>
                                <td colspan="5"><strong style="font-size: 15pt; float: right;"><span style="margin-right: 15px;">Total</span> $<?php echo e($baskets->pluck('total_price')->sum()); ?>

                                </strong></td>
                            </tr>
                           
                            
                        </tbody>
                    </table>
                </div>

                    <div class="panel-heading" style="padding: 10px; margin-bottom: 3px ;background-color: #26C281">
                        <h3 class="text-center"><strong style="color: #fff">Confirm</strong></h3>
                    </div>

                    <div class="panel-heading" style="padding: 10px; background-color: #C91F37; margin-bottom: 15px ;">
                        <h3 class="text-center">
                            <strong style="color: #fff">
                                <a class="del" href="<?php echo e(route('cancel_order')); ?>" style="color: #fff" >Cancel</a> 
                            </strong>
                        </h3>
                    </div>

                    

            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('sale.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>