<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128676687-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128676687-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Flist is a way to simplify and automate your experience during the process of the networking and connecting.">
    <meta name="author" content="Roman Sirokov">

    <title>Flist - We Love New Friends!</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <?php include "etc/favicons.php"; ?>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><i>Flist</i></a> -->
        <a class="navbar-logo js-scroll-trigger" href="#page-top"> <img src="css/favicons/android-icon-48x48.png" style="border-radius: 5px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Make your social experience flawless and enjoyable with <b>Flist</b>.</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait gold">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Discover what all the buzz is about!</h2>
            <p>Create your own <b>Flist</b> profile right now!</p>
            <div class="badges">
              <!-- <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a> -->
              <a class="badge-link" href="https://itunes.apple.com/no/app/flist-me/id1371495141?mt=8" target="_blank"><img src="img/app-store-badge.svg" alt=""></a>
            </div>

            <div class="download-other">
              <p>Other platforms <i>(Web, Android)</i> are coming soon! Sign up right now!</p>
              <?php include "etc/signup-form.php"; ?>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Unlimited Features, Unlimited Fun</h2>
          <p class="text-muted">Check out what you can do with our platform!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait gold">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <!-- <img src="img/demo-screen-2.jpg" class="img-fluid" alt=""> -->
                    <video loop autoplay muted height="100%" poster="img/demo-screen-2.jpg" src="img/demo-video-1.mp4" type="video/mp4"></video>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-globe text-primary"></i>
                    <h3>Share Your Contacts</h3>
                    <p class="text-muted">Share whatever social contacts you want with people around you; simply, conveniently and fast!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-magnifier text-primary"></i>
                    <h3>Find Other's Contacts</h3>
                    <p class="text-muted">See what contacts your friends have! Maybe you are both using some social platform and yet don't know about that!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock text-primary"></i>
                    <h3>Privacy</h3>
                    <p class="text-muted">Ensure that only trusted groups of people can see the elements of your profile!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-layers text-primary"></i>
                    <h3>Group Contacts</h3>
                    <p class="text-muted">Group certain links together in the way you want in order to structurize them for convenience and reachability.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="webprofile bg-primary text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 my-auto">
            <h3 class="section-heading">Share your web profile!</h3>
            <p class="text-muted">If you want, you can allow people who aren't users of <b>Flist</b> to see your profile in the web! For example, to display the basic public contacts of yours!</p>
            <p class="link-template"><img src="img/link.png" alt=""> https://flist.me/u/<b>username</b></p>
          </div>
          <div class="col-lg-4 offset-md-2 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait gold">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <!-- <img src="img/demo-screen-2.jpg" class="img-fluid" alt=""> -->
                    <video loop autoplay muted height="100%" poster="" src="img/demo-video-2.mp4" type="video/mp4"></video>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start socializing.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <!--End mc_embed_signup-->

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fas fa-heart"></i>
          new friends!</h2>
          <?php include "etc/signup-form.php"; ?>

          <hr style="margin: 50px auto;">

          <h3>Or feel free to contact us directly <br></h3>
          <h4><a href="mailto:info@flist.me" style="color:inherit;">info@flist.me</a> </h4>

        <!-- <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
        </ul>-->
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2018 Flist. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.apple.com/legal/internet-services/itunes/dev/stdeula/">Terms</a>
          </li>
          <!-- <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li> -->
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
