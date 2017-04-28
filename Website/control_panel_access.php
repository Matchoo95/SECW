<?php
  // checks if the user is a vendor or not, "1" being a vendor and "0" not

  session_start();
  include './auth.php'; // database connection

  $user = $_SESSION['username']; // get current user
  // create sql select query based on username and account type
  $sql = "SELECT 1 FROM `db667536964`.`Users` WHERE username='$user' AND accountType='vendor'";
  // if a result is found, store it in $found
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $found = mysqli_num_rows($result);
?>
