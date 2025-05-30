<?php
include('../dbConnection.php');
session_start();
if (!isset($_SESSION['is_login'])) {
  if (isset($_REQUEST['rEmail'])) {
    $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
    $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
    $sql = "SELECT email, password FROM login_request WHERE email='" . $rEmail . "' AND password='" . $rPassword . "' limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      $_SESSION['is_login'] = true;
      $_SESSION['rEmail'] = $rEmail;
      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='RequesterProfile.php'; </script>";
      exit;
    } else {
      $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
    }
  }
} else {
  echo "<script> location.href='RequesterProfile.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <style>
    /* Reset and Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Container Styles */
    .container {
      max-width: 400px;
      width: 100%;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Header Styles */
    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .header h1 {
      font-size: 24px;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .header p {
      font-size: 16px;
      color: #7f8c8d;
    }

    .header i {
      font-size: 32px;
      color: rgb(0, 0, 0);
      margin-right: 10px;
    }

    /* Form Styles */
    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #95a5a6;
      font-size: 18px;
    }

    .form-control {
      width: 100%;
      padding: 12px 15px 12px 40px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
      background-color: #f5f5f5;
      transition: border-color 0.3s, background-color 0.3s;
    }

    .form-control:focus {
      outline: none;
      border-color: rgb(0, 0, 0);
      background-color: #fff;
    }

    small.form-text {
      color: #7f8c8d;
      font-size: 14px;
      margin-top: 5px;
    }

    /* Button Styles */
    .btn-custom-grey {
      background-color: rgb(88, 88, 88);
      color: white;
      border: none;
      border-radius: 8px;
    }

    .btn-custom-grey:hover {
      background-color: #7a7a7a;
      color: white;
    }

    .btn {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      font-weight: 500;
      border-radius: 4px;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-primary {
      background-color: rgb(0, 0, 0);
      border-color: rgb(0, 0, 0);
      color: #fff;
    }

    .btn-primary:hover {
      background-color: rgb(0, 0, 0);
      border-color: #2980b9;
    }

    /* .btn-outline-danger {
  background-color: transparent;
  border-color: #e74c3c;
  color: #e74c3c;
} */
    /* 
.btn-outline-danger:hover {
  background-color: #e74c3c;
  color: #fff;
} */

    /* Back to Home Button */
    .btn-black {
  background-color: #000000;
  color: white;
  border: none;
  border-radius: 8px;
}

.btn-black:hover {
  background-color: #222222;
  color: white;
}

    
  </style>
  <title>Login</title>
</head>

<body>
  <main class="container-fluid">
    <header class="text-center my-5">
      <h1 class="display-4">
      <i class="fas fa-wrench text-dark mr-3"></i>
  <i class="fas fa-home text-dark mr-3"></i>
  <i class="fas fa-handshake text-dark"></i><br>        Online Home Service Management System
      </h1>
      <!-- <p class="lead">
        <i class="fas fa-user-secret text-danger"></i>
        Requester Area (Demo)
      </p> -->
    </header>

    <section class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-4">
        <form id="loginForm" action="" method="POST" aria-label="Login Form" novalidate>
          <div class="form-group">
            <label for="emailInput" class="sr-only">Email address</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input
                type="email"
                id="emailInput"
                name="rEmail"
                class="form-control"
                placeholder="Enter your email"
                required
                autocomplete="email">
            </div>
            <small class="form-text text-muted">
              We'll never share your email with anyone else.
            </small>
          </div>

          <div class="form-group">
            <label for="passwordInput" class="sr-only">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-lock"></i>
                </span>
              </div>
              <input
                type="password"
                id="passwordInput"
                name="rPassword"
                class="form-control"
                placeholder="Enter your password"
                required
                autocomplete="current-password">
            </div>
          </div>

          <?php if (isset($errorMsg)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo htmlspecialchars($errorMsg); ?>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <button
              type="submit"
              class="btn btn-custom-grey btn-block shadow-sm font-weight-bold">
              <i class="fas fa-sign-in-alt mr-2"></i>Login
            </button>

            <?php if (isset($msg)) {
              echo $msg;
            } ?>
          </div>
        </form>

        <a
          href="../index.php"
          class="btn btn-black shadow-sm font-weight-bold">
          <i class="fas fa-home mr-2"></i>Back to Home
        </a>

      </div>
    </section>
  </main>

  <!-- Optional: Add client-side form validation -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      const emailInput = document.getElementById('emailInput');
      const passwordInput = document.getElementById('passwordInput');

      if (!emailInput.value || !passwordInput.value) {
        event.preventDefault();
        alert('Please fill in both email and password.');
      }
    });
  </script>

  <!-- Bootstrap and Font Awesome JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>