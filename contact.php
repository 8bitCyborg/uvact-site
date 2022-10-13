<?php
  DEFINE("siteKey", '6LcEHpAUAAAAAIez8KcAlnNz9TTAE4zyaPXkrkmp');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Uvact - Contact us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img class="uvact-logo" src="images/uvact.png" alt="uvact Logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2> Contact us </h2>
            <h6 class="h6">Request Custom Quote or Devopment Resource ( DevOps, Software Engineer, QA)</h6>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 18100 Von Karman Avenue Suite 850, Irvine CA 92612.</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://+1424 353 7040">+1 424 353 7040</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@uvact.com">info@uvact.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form method="POST" action="">
              <?php
                  if(isset($_POST['submit'])){
                      $name = $_REQUEST['name'];
                      $email = "From:" . $_REQUEST['email'];
                      $subject = $_REQUEST['subject'];
                      $message = $_REQUEST['message'];

                      if(mail('info@uvact.com',$subject,$message,$email)){
                          echo "<p><strong>Your mail has been sent. We will respond to you shortly.</strong></p>";
                      }else{
                          echo '<strong>Your email was not sent. Please mail us directly at <a href=mailto:"info@uvact.com">info@uvact.com</a></strong>';
                      }
                  }
              ?>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="<?php echo constant('siteKey') ?>" data-callback="enableSubmitBtn"></div>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="submit" id="submitBtn" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><img class="uvact-logo" src="images/uvact-white.png"/></h2>
              <p>Uvact makes getting the right development resources for your project a breeze.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="https://twitter.com/uvact1"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/uvact"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.linkedin.com/company/uvact-technologies"><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">California: 18100 Von Karman Avenue Suite 850, Irvine CA 92612. </a></li>
                <li><a href="#" class="py-2 d-block">Tel: +1 424 353 7040</a></li>
                <li><a href="#" class="py-2 d-block">Lagos: #A 53, Road 1, (Beside GTBank), Ikota Complex Ajah, Lagos. </a></li>
                <li><a href="#" class="py-2 d-block">Tel: +234 905 435 0441</a></li>
                <li><a href="#" class="py-2 d-block">info@uvact.com</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Uvact All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    document.getElementById("submitBtn").style.visibility = "hidden";
    function enableSubmitBtn(){
      document.getElementById("submitBtn").style.visibility = "visible";
    }
  </script>

  </body>
</html>
