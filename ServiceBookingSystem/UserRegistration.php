<?php
  include('dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT email FROM login_request WHERE email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO login_request(name, email, password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>
<div class="container pt-5" id="registration">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="shadow-lg p-4" method="POST" onsubmit="return validatePassword()">
        <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="name" class="pl-2 font-weight-bold">Name</label>
          <input type="text" class="form-control" placeholder="Name" name="rName" required>
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="email" class="pl-2 font-weight-bold">Email</label>
          <input type="email" class="form-control" placeholder="Email" name="rEmail" required>
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="pass" class="pl-2 font-weight-bold">New Password</label>
          <input type="password" class="form-control" placeholder="Password" name="rPassword" id="rPassword" required>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="pass" class="pl-2 font-weight-bold">Repeat your password</label>
          <input type="password" class="form-control" name="repsw" id="repsw" placeholder="Repeat your password" onkeyup="checkPasswordMatch()" required>
          <small id="passwordMessage" class="form-text"></small>
        </div>
        <button type="submit" class="btn btn-secondary mt-3 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</em>
        <?php if (isset($regmsg)) { echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>

<script>
  function checkPasswordMatch() {
    let password = document.getElementById("rPassword").value;
    let confirmPassword = document.getElementById("repsw").value;
    let message = document.getElementById("passwordMessage");

    if (password !== confirmPassword) {
      message.style.color = "red";
      message.innerHTML = "Passwords do not match!";
    } else {
      message.style.color = "green";
      message.innerHTML = "Passwords match!";
    }
  }

  function validatePassword() {
    let password = document.getElementById("rPassword").value;
    let confirmPassword = document.getElementById("repsw").value;

    if (password !== confirmPassword) {
      alert("Passwords do not match!");
      return false;
    }
    return true;
  }
</script>
