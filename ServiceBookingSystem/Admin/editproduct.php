<?php    
define('TITLE', 'Update Product');
define('PAGE', 'assets');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['pupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $pid = $_REQUEST['pid'];
    $pname = $_REQUEST['pname'];
    $pdop = $_REQUEST['pdop'];
    $pava = $_REQUEST['pava'];
    $ptotal = $_REQUEST['ptotal'];
    $poriginalcost = $_REQUEST['poriginalcost'];
    $psellingcost = $_REQUEST['psellingcost'];
  $sql = "UPDATE assets_tb SET p_name = '$pname', p_dop = '$pdop', p_avil = '$pava', p_total = '$ptotal', p_og_cost = '$poriginalcost', p_sell_price = '$psellingcost' WHERE p_id = '$pid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Product Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM assets_tb WHERE p_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pid">Product ID</label>
      <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['p_id'])) {echo $row['p_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="pname">Name</label>
      <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['p_name'])) {echo $row['p_name']; }?>">
    </div>
    <div class="form-group">
      <label for="pdop">DOP</label>
      <input type="date" class="form-control" id="pdop" name="pdop" value="<?php if(isset($row['p_dop'])) {echo $row['p_dop']; }?>">
    </div>
    <div class="form-group">
      <label for="pava">Available</label>
      <input type="text" class="form-control" id="pava" name="pava" value="<?php if(isset($row['p_avil'])) {echo $row['p_avil']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="ptotal">Total</label>
      <input type="text" class="form-control" id="ptotal" name="ptotal" value="<?php if(isset($row['p_total'])) {echo $row['p_total']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="poriginalcost">Original Cost Each</label>
      <input type="text" class="form-control" id="poriginalcost" name="poriginalcost" value="<?php if(isset($row['p_og_cost'])) {echo $row['p_og_cost']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="psellingcost">Selling Price Each</label>
      <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if(isset($row['p_sell_price'])) {echo $row['p_sell_price']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
      <a href="assets.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
?>