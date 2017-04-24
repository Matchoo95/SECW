<?php
session_start();
include './auth.php';

  // check if the user is a vendor or not, "1" being a vendor and "0" not
  $user = $_SESSION['username'];
  $sql = "SELECT 1 FROM `db667536964`.`Users` WHERE username='$user' AND accountType='vendor'";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $found = mysqli_num_rows($result);
?>
