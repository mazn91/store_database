<?php $__env->startSection('content'); ?>

	

    <div class="card">

          

              <div class="card-body card-block">

                   
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading" style="margin-bottom: 20px">
                            <h3 class="panel-title"><strong>Paid Report Result</strong></h3>
                            <h6>Date: From <span style="color: #F73035"><?php echo e($stdate); ?></span> to <span style="color: #F73035"><?php echo e($endate); ?></span></h6>
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-condensed">
                                <thead>
                                                <tr>
                                      <td><strong>Item Name</strong></td>
                                      <td class="text-center"><strong>Total Quantity</strong></td>
                                      <td class="text-center"><strong>Total Price</strong></td>
                                      <?php if(Auth::user()->isAdmin()): ?>
                                      <td class="text-right"><strong>Total Profit</strong></td>
                                      <?php endif; ?>
                                      
                                                </tr>
                                </thead>
                                <tbody>
                                  <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                  <?php $__currentLoopData = $piad_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($order->item_id == $item->id ): ?>
                                              <?php echo e($item->name); ?>

                                          <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td class="text-center"><?php echo e($order->quantity); ?></td>
                                    <td class="text-center">$<?php echo e($order->total_price); ?></td>

                                    <?php if(Auth::user()->isAdmin()): ?>
                                       <td class="text-right">$<?php echo e($order->profit); ?></td>
                                    <?php endif; ?>

                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              
                                  <tr>
                                    <?php if(Auth::user()->isAdmin()): ?>
                                    <td class="thick-line"></td>
                                    <?php endif; ?>  
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total Revenue</strong></td>
                                    <td class="thick-line text-right">$<?php echo e($piad_reports->pluck('total_price')->sum()); ?></td>
                                  </tr>

                                  <?php if(Auth::user()->isAdmin()): ?>
                                  <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total Cost</strong></td>
                                    <td class="no-line text-right">$<?php echo e($paid_cost); ?></td>
                                  </tr>
                                  <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total Profit</strong></td>
                                    <td class="no-line text-right">$<?php echo e($piad_reports->pluck('profit')->sum()); ?></td>
                                  </tr>
                                  <?php endif; ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

              </div>

        </div>



        <div class="card">

          

              <div class="card-body card-block">

                   
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading" style="margin-bottom: 20px">
                            <h3 class="panel-title"><strong>Loan Report Result</strong></h3>
                            <h6>Date: From <span style="color: #F73035"><?php echo e($stdate); ?></span> to <span style="color: #F73035"><?php echo e($endate); ?></span></h6>
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-condensed">
                                <thead>
                                                <tr>
                                      <td><strong>Item Name</strong></td>
                                      <td class="text-center"><strong>Total Quantity</strong></td>
                                      <td class="text-right"><strong>Total Price</strong></td>
                                    
                                      
                                                </tr>
                                </thead>
                                <tbody>
                                  <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                  <?php $__currentLoopData = $loan_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($order->item_id == $item->id ): ?>
                                              <?php echo e($item->name); ?>

                                          <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td class="text-center"><?php echo e($order->quantity); ?></td>
                                    <td class="text-right">$<?php echo e($order->total_price); ?></td>
                            
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              
                                  <tr>
                                    <td class="thick-line"></td>
                                   
                                    <td class="thick-line text-center"><strong>Unpaid Amount</strong></td>
                                    <td class="thick-line text-right">$<?php echo e($loan_reports->pluck('total_price')->sum()); ?></td>
                                  </tr>
                                    
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

              </div>

        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>