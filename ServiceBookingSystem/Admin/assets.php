<?php
define('TITLE', 'Assests');
define('PAGE', 'assets');
include('includes/header.php');
include('../dbConnection.php'); 
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">Product/Parts Details</p>
  <?php
    $sql = "SELECT * FROM assets_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
  echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        <th scope="col">DOP</th>
        <th scope="col">Available</th>
        <th scope="col">Total</th>
        <th scope="col">Original Cost Each</th>
        <th scope="col">Selling Price Each</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
      echo '<tr>
        <th scope="row">'.$row["p_id"].'</th>
        <td>'.$row["p_name"].'</td>
        <td>'.$row["p_dop"].'</td>
        <td>'.$row["p_avil"].'</td>
        <td>'.$row["p_total"].'</td>
        <td>'.$row["p_og_cost"].'</td>
        <td>'.$row["p_sell_price"].'</td>
        <td>
          <form action="editproduct.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["p_id"] .'><button type="submit" class="btn btn-info" name="view" value="View"><i class="fas fa-pen"></i></button></form>  
          <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["p_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
          <form action="sellproduct.php" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["p_id"] .'><button type="submit" class="btn btn-success" name="issue" value="Issue"><i class="fas fa-handshake"></i></button></form>
        </td>
      </tr>';
    }
    echo '</tbody>
  </table>';
  } else {
    echo "0 Result";
  }
  if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM assets_tb WHERE p_id = {$_REQUEST['id']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
    }
  ?>
</div>
</div>
<div class="d-flex justify-content-end">
  <a class="btn btn-secondary box" href="addproduct.php">
    <i class="fas fa-plus fa-2x"></i>
  </a>
</div></div>

<?php
include('includes/footer.php'); 
?>