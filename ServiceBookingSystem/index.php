<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Home Service Booking System</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary text-white pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Home Service Booking</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav ml-auto pl-5 custom-nav dark-big-links">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>

  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
<header class="jumbotron back-image" style="background-image: url('image/Home.service.png');">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase font-weight-bold">Welcome to Home Service</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn mr-4">Login</a>
      <a href="#registration" class="btn mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <!--Introduction Section-->
  <div class="container my-5">
    <div class="jumbotron">
      <h3 class="text-center mb-4">Welcome to Home Service Booking</h3>
      <p class="lead">
        At Home Service Booking, we are dedicated to providing you with the best home services to make your life easier. Whether you need a plumber, electrician, handyman, or any other home service professional, we've got you covered.
      </p>
      <p>
        Our platform connects you with pre-screened and vetted service providers, ensuring that you get the highest quality service at competitive prices. With just a few clicks, you can schedule an appointment and have a skilled professional at your doorstep in no time.
      </p>
      <p>
        Our mission is to make home services hassle-free and accessible to everyone. We prioritize customer satisfaction and strive to exceed your expectations with every visit. Browse our services and sign up today to experience the convenience of Home Service Booking.
      </p>
    </div>
  </div>
 <!-- Start Services -->
<div class="container text-center py-5" id="Services">
  <h2 class="mb-4">Explore Our Home Services</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <i class="fas fa-tools fa-5x text-primary mb-3"></i>
          <h4 class="card-title">Handyman Services</h4>
          <p class="card-text">From minor repairs to home improvement projects, our skilled handymen are here to assist you.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <i class="fas fa-plumber fa-5x text-success mb-3"></i>
          <h4 class="card-title">Plumbing Services</h4>
          <p class="card-text">Trusted plumbers for all your residential plumbing needs, from leaks to installations.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <i class="fas fa-bolt fa-5x text-danger mb-3"></i>
          <h4 class="card-title">Electrical Services</h4>
          <p class="card-text">Professional electricians to handle your home's electrical repairs and upgrades.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Mumbai Branch:</strong> <br>
        HomeService Pvt Ltd, <br>
       Mumbai,Maharastra  <br>
        Mumbai - 400066 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.homeService.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        HomeService Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.homeService.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

<!-- Start Footer-->
<footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
  <!-- Start Footer Social Links -->
  <div class="d-flex align-items-center">
    <span class="mr-3">Connect with us:</span>
    <div class="social-links">
      <a href="https://www.facebook.com/" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i></a>
      <a href="https://x.com/" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
      <a href="https://www.youtube.com/" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
      <a href="https://www.linkedin.com/" target="_blank" class="social-link"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://www.instagram.com/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <!-- End Footer Social Links -->
</div>

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->


  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>