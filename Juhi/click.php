<html>
<body>
<?php
  if (isset($_POST['next'])) {
    echo "
      <form action='./payment.html' method= 'post'>
        <input type='hidden' name ='Billno' value='".$_POST['Billno']."'>
        <input type='hidden' name='amount' value='".$_POST['amount']."'>
        <button type='submit' name='cnfpay' style='border:0px; color:black; background-color:white;'>Click Here To Proceed To Payment Page</button>
        </form>
    ";
  }

?>
</body>
</html>
