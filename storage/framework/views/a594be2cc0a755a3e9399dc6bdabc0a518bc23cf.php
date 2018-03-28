
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>




            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">



                    <li class="active">
                        <a href="<?php echo e(route('dashboard')); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>

                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-shopping-cart"></i>Sale</a>
                    </li>


                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-minus-circle"></i>Return</a>
                    </li>





                    <h3 class="menu-title">Employee Privileges</h3><!-- /.menu-title -->

                    <?php if(Auth::user()->isAdmin()): ?>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square-o"></i><a href="<?php echo e(route('category')); ?>">Add Category</a></li>
                            <li><i class="fa fa-search"></i><a href="tables-data.html">Show Category</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Items</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square-o"></i><a href="tables-basic.html">Add Items</a></li>
                            <li><i class="fa fa-search"></i><a href="tables-data.html">Show Items</a></li>
                        </ul>
                    </li>



                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Shops</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square-o"></i><a href="forms-basic.html">Add Shops</a></li>
                            <li><i class="menu-icon fa fa-search"></i><a href="forms-advanced.html">Show Shops</a></li>
                        </ul>
                    </li>

                    <?php if(Auth::user()->isAdmin()): ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Employees</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square-o"></i><a href="<?php echo e(route('add_user')); ?>">Add Employees</a></li>
                            <li><i class="menu-icon fa fa-search"></i><a href="<?php echo e(route('show_users')); ?>">Show Employees</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-alt"></i> <a href="forms-basic.html">Daily Reports</a></li>
                            <li><i class="fa fa-list-alt"></i> <a href="forms-advanced.html">Weekly Reports</a></li>
                            <li><i class="fa fa-list-alt"></i> <a href="forms-basic.html">Monthly Reports</a></li>
                            <li><i class="fa fa-list-alt"></i> <a href="forms-advanced.html">Yearly Reports</a></li>
                        </ul>
                    </li>

                
                    <?php if(Auth::user()->isAdmin()): ?>

                    <h3 class="menu-title">Admin Privileges</h3>

                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-check-square"></i>Returned Items</a>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-asterisk"></i>Others</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square-o"></i> <a href="<?php echo e(route('role')); ?>">Add Roles</a></li>
                            <li><i class="fa fa-stack-exchange"></i> <a href="forms-advanced.html">Change Roles</a></li>
                        </ul>
                    </li>


                    <?php endif; ?>

   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->