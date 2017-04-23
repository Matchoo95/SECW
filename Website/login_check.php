<?php
  if(!isset($_SESSION['username'])){
    header("Location: unauthorised_error.php");
  }
?>
