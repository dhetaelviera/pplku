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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <div class='preloader'><div class='loaded'>&nbsp;</div></div>

            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#login">Login</a></li>
                <li><a href="#about">Register</a></li>
                <li><a href="#about">About</a></li> 
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Home page style-->
<header id="home" class="home">
  <div class="overlay sections">
    <div class="container">

      <div class="row">
        <div class="wrapper">
          <div class="col-md-6 col-md-offset-3">

            <div>
              <br>
              <center>  <img src="assets/images/ini.png" width="300px" height="300px" alt="Logo Image" />
              </center></div>
              <div class="home-details text-center">
                <div class="home-title">
                  <h1>GOLEK IWAK</h1>
              </div>
              
              <div class="links">
                <?php if(Route::has('login')): ?>
                
                <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Dashboard</a>
                <?php else: ?>
                
                <a href="<?php echo e(url('/login')); ?>">Masuk</a>
                <a href="<?php echo e(url('/register')); ?>">Daftar</a> 
                
                <?php endif; ?>
                
                <?php endif; ?>
            </div>

            <div class="scroll-down">

              <a href="#about"><i class="fa fa-angle-double-down"></i></a>
          </div>

      </div>

  </div>
</div>
</div>
</div>
</div>
</header>

<!-- Sections -->
<section id="about" class="about sections">
    <div class="container">

      <!-- Example row of columns -->
      <div class="row">
        <div class="wrapper">

          <div class="col-md-6">
            <div class="about-photo">
              <img src="assets/images/about.jpg" alt="About Image" />
          </div>
      </div>

      <div class="col-md-6">
        <div class="heading about-content">
          <h3>About Me</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <div class="signature">
            <img src="assets/images/singnature.png" alt="signature" />
        </div>
    </div>
</div> 

</div>
</div>

</section>

<!-- Sections -->
<section id="login" class="about sections">
  <div class="container">

    <!-- LOGIN-->
    <div class="row">
      <div class="wrapper">

        <div class="col-md-6">
          <div class="about-photo">
            <img src="assets/images/ini.png" width="300px" height="300px" alt="About Image" />
        </div>
    </div>

    <div class="col-md-6">
      <div class="heading about-content">
        <h3>Login</h3>
        <p>
            <form action="/masukSistem" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label for="nama"><span ></span> Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="nama">
              </div>
              <div class="form-group">
                  <label for="password"><span></span> Password</label>
                  <input type="password" class="form-control" id="password" placeholder="password">
              </div>
              <div class="w3ls-submit"> 
                  <input type="submit" value="LOGIN">     
              </div> 
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
          </form>
      </p>

  </div>
</div> 

</div>
</div>

</section>

<!--END OF LOGIN-->

<!-- Sections -->
<section id="register" class="about sections">
    <div class="container">

      <!-- REGISTER-->
      <div class="row">
        <div class="wrapper">

          <div class="col-md-6">
            <div class="about-photo">
              <img src="assets/images/ini.png" width="300px" height="300px" alt="About Image" />
          </div>
      </div>

      <div class="col-md-6">
        <div class="heading about-content">
          <h3>Register</h3>
          <p>
            <form role="form" action="/daftar" method="POST">
              <div class="form-group">
                <label for="nama"><span ></span> Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="nama">
            </div>
            <div class="form-group">
                <label for="noTelepon"><span ></span>No. Telepon</label>
                <input type="text" class="form-control" id="noTelepon" placeholder="noTelepon">
            </div>
            <div class="form-group">
                <label for="alamat"><span ></span>Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="alamat">
            </div>
            <div class="form-group">
                <label for="kecamatan"><span ></span>Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" placeholder="kecamatan">
            </div>
            <div class="form-group">
                <label for="kabupaten"><span ></span>Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" placeholder="kabupaten">
            </div>
            <div class="form-group">
                <label for="provinsi"><span ></span>Provinsi</label>
                <input type="text" class="form-control" id="provinsi" placeholder="provinsi">
            </div> 
            <div class="form-group">
                <label for="password"><span></span> Password</label>
                <input type="password" class="form-control" id="password" placeholder="password">
            </div>

            <div class="col-sm-3">
                <input type="radio" class="radio-control" name="level" value="1">Agen</br>
                <input type="radio" class="radio-control" name="level" value="2">Pengusaha
            </div>
            <br>
            <br>
            <br>
            <div class="w3ls-submit"> 
                <input class="register" type="submit" value="REGISTER">  
            </div>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
            <?php echo csrf_field(); ?>

        </form>
    </p>

</div>
</div> 

</div>
</div>

</section>

<!--END OF LOGIN-->


<!--Footer-->
<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright text-center">
          <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>
      </div>
  </div>
</div>
</div>
</footer>


<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>


<script src="assets/js/main.js"></script>
</body>
</html>
