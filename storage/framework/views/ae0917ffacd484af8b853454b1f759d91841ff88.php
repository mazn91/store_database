        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">

                    <div class="col-sm-2">
                        <a class="navbar-brand" href="./"><i class="fa fa-home"></i> Lumio.Light</a>
                    </div>
                    

                    <div class="header-left col-sm-10">

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">10</span>
                          </button>

     
                        </div>

                 
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right" >
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                            <strong> 
                                <?php if(Auth::check()): ?>
                                   <?php echo e(ucfirst(Auth::user()->fname)); ?> <?php echo e(ucfirst(Auth::user()->lname)); ?>

                                <?php endif; ?>
                            </strong><i class="fa fa-chevron-circle-down"></i>
                        </a>

                        <div class="user-menu dropdown-menu" style="background: #2B2F36">
                                <a class="nav-link" href="<?php echo e(route('profile')); ?>" style="color: white"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="<?php echo e(route('update_profile')); ?>" style="color: white"><i class="fa fa -cog"></i>Update Profile</a>

                                <a class="nav-link" href="<?php echo e(route('show_password')); ?>" style="color: white"><i class="fa fa -cog"></i>Change Password</a>

                                <a class="nav-link" href="<?php echo e(route('logout')); ?>" style="color: white"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->


