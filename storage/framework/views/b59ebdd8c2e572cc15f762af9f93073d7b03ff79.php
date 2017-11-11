<?php $__env->startSection('content'); ?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


<!--For Plugins external css-->
<link rel="stylesheet" href="assets/css/plugins.css" />
<link rel="stylesheet" href="assets/css/magnific-popup.css">

<link rel="stylesheet" href="assets/css/nexa-web-font.css" />
<link rel="stylesheet" href="assets/css/opensans-web-font.css" />

<!--Theme custom css -->
<link rel="stylesheet" href="assets/css/style.css">

<!--Theme Responsive css-->
<link rel="stylesheet" href="assets/css/responsive.css" />

<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<div class="overlay sections">
              <div class="container">

                <div class="row">
                   <div class="home-details text-center">
                          <div class="home-title">
                          <h1>selamat datang di</h1><br>
                            <h1>GOLEK IWAK</h1>
                            <hr>
                             <?php if(Auth::user()->sebagai=='1'): ?>
              <div class="panel-body">  
              anda telah login sebagai agen <br>
              klik  <a href="<?php echo e(url('/dashboardAgen')); ?>" style="color: yellow"> di sini  </a> untuk memulai
                        </div>
                        <?php else: ?>
                        <div class="panel-body">
                            anda telah login sebagai pengusaha<br>
              klik <a href="<?php echo e(url('/dashboardPengusaha')); ?>" style="color: green"> di sini  </a> untuk memulai
                        </div>
                  <?php endif; ?>
                          </div>
 


                        </div>
                    
                        
                 
                  </div>
                </div>
              </div>
               </body>
                </html>
              <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>