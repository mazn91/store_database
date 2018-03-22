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


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


        <link href="<?php echo e(asset('css/assets/css/normalize.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/themify-icons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/flag-icon.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/cs-skin-elastic.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/scss/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/css/lib/vector-map/jqvmap.min.css')); ?>" rel="stylesheet">


</head>
<body>


        <!-- Left Panel -->


    <!-- Left Panel -->
      <?php echo $__env->make('layouts.nav_bar_left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Header-->

        







        <div class="content mt-3">

            <?php echo $__env->yieldContent('content'); ?>


        </div> <!-- .content -->






    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>




    <script type="text/javascript" src="<?php echo asset('js/assets/js/vendor/jquery-2.1.4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/plugins.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/main.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/lib/chart-js/Chart.bundle.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/dashboard.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/widgets.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/lib/vector-map/jquery.vmap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/lib/vector-map/jquery.vmap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/lib/vector-map/jquery.vmap.sampledata.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/assets/js/lib/vector-map/country/jquery.vmap.world.js'); ?>"></script>





    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
