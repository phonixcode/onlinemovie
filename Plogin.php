<?php
  session_start();
  include './include/dbh.php';

    $username =  $_POST['mail'];
    $password =  $_POST['pass'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "<script>alert('Email or Password is Wrong !')</script>";
      echo "<script>window.open('user-login.php','_self')</script>";
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      }

    

?>
