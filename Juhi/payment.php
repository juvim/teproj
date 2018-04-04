<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Payement</title>
  </head>
  <body>
    <?php
    if (isset($_POST['cnfpay'])) {
    //  echo "
       /*<form class='' action='./pay.php' method='post'>";*/
        echo"<input type='text' name='cardno' placeholder='Enter Card Number'>";echo"<br><br>";
        echo"<input type='text' name='name' placeholder='Enter Name on Card'>";echo"<br><br>";
          echo"<input type='hidden' name ='Billno' value='".$_POST['Billno']."'>";
          echo"<input type='hidden' name='amount' value='".$_POST['amount']."'>";
          echo"<button type='submit' name='dbstore' >";echo"Pay";echo"</button>";
        echo"</form>";

    }
      ?>
  </body>
</html>
