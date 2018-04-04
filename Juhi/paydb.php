<?php
session_start();
if (isset($_POST['dbstore'])) {
  
 // $uid = $_SESSION['uid'];
  $cardnumber = $_POST['Card_no'];
  $holdername = $_POST['Card_holdername'];
  $expiration = date("H:i:s");  
  $conn = mysqli_connect("localhost", "root", "", "obps");
  $sql = "INSERT INTO `card_det`(Card_no, Exp_date, Card_holdername) VALUES ('$cardnumber',now(),'$holdername');";
  $res=mysqli_query($conn, $sql);
  if($res){ echo "Payment Successful";}
}
header("Location:./invoice.php");


 ?>
