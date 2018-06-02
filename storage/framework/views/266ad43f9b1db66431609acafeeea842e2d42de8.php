<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">





    <link href="<?php echo e(asset('css/assets/css/normalize.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/css/themify-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/css/flag-icon.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/css/cs-skin-elastic.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/assets/scss/style.css')); ?>" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>

                <div class="login-form">

                    <form method="post" action="/login">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="checkbox">
                           
                            <label class="pull-right">
                                <a href="#">Forgotten Password? Contact Admin!</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

                        <div class="form-group">

                            <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>
                       
                    </form>
                </div>

            </div>
        </div>
    </div>




        <script type="text/javascript" src="<?php echo asset('js/assets/js/vendor/jquery-2.1.4.min.j'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/assets/js/popper.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/assets/js/plugins.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/assets/js/main.js'); ?>"></script>


</body>
</html>
