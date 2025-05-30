<?php

session_start();
define('TITLE', 'Success');
include('includes/header.php'); 
include('../dbConnection.php');
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}
$sql = "SELECT * FROM submit_request WHERE req_id = {$_SESSION['myid']}"; 
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['req_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['req_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['req_email']."</td>
  </tr>
   <tr>
    <th>Request Info</th>
    <td>".$row['req_info']."</td>
   </tr>
   <tr>
    <th>Request Description</th>
    <td>".$row['req_desc']."</td>
   </tr>

   <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div>
 ";
}else{
    echo "Faild";
}
?>