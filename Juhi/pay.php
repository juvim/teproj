<?php
session_start();
if (isset($_POST['dbstore'])) {
  
 // $uid = $_SESSION['uid'];
  $bno = $_POST['Billno'];
  $amount = $_POST['amount'];
  $paydate = date("H:i:s");  
  $conn = mysqli_connect("localhost", "root", "", "obps");
  $sql = "INSERT INTO `paidbill`(billnno, paydate, amount) VALUES ('$bno',now(),'$amount');";
  $res=mysqli_query($conn, $sql);
  if($res){ echo "Payment Successful";}
}



 ?>
