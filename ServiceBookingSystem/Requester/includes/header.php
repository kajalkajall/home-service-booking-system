<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!defined('PAGE')) {
    define('PAGE', '');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-secondary text-white pl-5 fixed-top">
 <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">Home Service Booking</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        <b>Profile</b> <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        <b>Submit Request</b>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        <b>Check Service Status</b>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
       <b> Change Password</b>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
       <b> Logout</b>
       </a>
      </li>
     </ul>
    </div>
   </nav>
   <style>
    .sidebar .nav-link {
        color: black !important;
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
    }
    .sidebar .nav-link:hover {
        background-color: lightgray !important;
        border-left-color: grey;
    }
    .sidebar .nav-link.active {
        background-color: #7D8184 !important;
        border-left-color: white;
    }
</style>