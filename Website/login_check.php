<?php
session_start();
include './auth.php';

  if(!isset($_SESSION['username']) || ($found == 0)){
    header("Location: unauthorised_error.php");
  }
?>
