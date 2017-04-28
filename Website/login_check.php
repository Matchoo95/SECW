<?php
// checks if the user is logged in or not

session_start();

include './auth.php'; // database connections

  // if user is not logged in or not a vendor account then redirect to the
  // unauthorised access page
  if(!isset($_SESSION['username']) || ($found == 0)){
    header("Location: unauthorised_error.php");
  }
?>
