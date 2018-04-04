
<?php

    if (isset($_POST['submitSignup'])) {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "obps";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $password1 = mysqli_real_escape_string($conn, $_POST['repass']);
        $sql = "SELECT * fROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        // used to execute query
        $resultno = mysqli_num_rows($result);
        if ($resultno > 0) {
        header("Location: ./register.php?signup=usertaken");
        exit();
        } else {
        if ($password == $password1) {
            $password = password_hash($password1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn,$sql);
            header('Location: ./login.php');
        }
        else echo"passwords do not match";
      }
    }
    else {
      header("Location: ./index.php");
    }
?>
