<?php
if (isset($_POST['next'])) 
{
		$host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "obps";
        $conn = mysqli_connect($host, $user, $pass, $dbname);


    $Billno = mysqli_real_escape_string($conn, $_POST['Billno']);
    $duedate = mysqli_real_escape_string($conn, $_POST['duedate']);
    $sql = "SELECT * FROM bill_det WHERE Bill_no = '$Billno' and Bill_date='$duedate";
    $result = mysqli_query($conn, $sql);
    $resultno = mysqli_num_rows($result);
    if($resultno < 1){
      header("Location: ./bill.php?login=error");
    }
    else{
    	 header("Location: click.php");
    }
 }
?>