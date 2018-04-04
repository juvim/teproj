<?php
  if (isset($_POST['loginSubmit'])) {
    $conn = mysqli_connect("localhost", "root", "", "obps");
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $resultno = mysqli_num_rows($result);
    if($resultno < 1){
      header("Location: ./login.php?login=error");
    }
    else{
      $row = mysqli_fetch_assoc($result);
      $verify = password_verify($password, $row['password']);
      if ($verify == false) {
        header("Location: ./login.php?login=error");
      }
      else if ($verify == true) {
        session_start();
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['username'] = $row['username'];
        header("Location: bill.php?login=success");
      }
    }
    }
  else {
    header("Location: ./login.php?login=error");
  }
?>
