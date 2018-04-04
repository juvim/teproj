
<html>
 <body>
 	<form action="payment.php" method="POST">
 BILL no. <input type="number" name="billno">
 Bill date<input type="date" name="billdate">
 Amount<input type="number" name="amount" >
 	<input type="submit">
 </form>
 </body>
 </html>
 <?php

    $username="root";
    $password="";
     $host="localhost";
    $dbname="customer";
    $billdate= $_POST['billdate'];
    $billno= $_POST['billno'];
    $conn=mysql_connect($host,$username,$password);
    
    mysql_select_db("customer");
    // $billdate= mysqli_real_escape_string($conn,$_POST["billdate"]);
    // $billno= mysqli_real_escape_string($conn,$_POST["billno"]);
       
    $query = "INSERT INTO  bill_det(`Bill_no`,`Bill_date`)VALUES($billdate,$billno)";
    $result = mysql_query($query);
    if($result)
    {
        echo"aaaaaaa";
    }
    
   //if ($result) {

        while($row=mysql_fetch_array($result))
         {
            //    $name = $row["Bill_no"];
             //   echo "Hello: $name<br>";
            // header('Location: ./payment.php');
            }
    //}
    


?>












