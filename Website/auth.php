<?php
// connection to the database

// datbase details (please fill in your database details here)
$host_name  = "";
$database   = "";
$user_name  = "";
$password   = "";

// create connection and check for errors
$connect = mysqli_connect($host_name, $user_name, $password)
  or die("Connection failed: " . mysqli_errno($connect));
$database = mysqli_select_db($connect, $database)
  or die("SQL error: " . mysqli_error($connect));
?>
