<?php
// changes a users details in the database

session_start();
include "./auth.php"; // database connection

// check if user is signed in
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}else{
  echo "You are not signed in.";
}

// store new email and password
$email = $_POST['email'];
$password = $_POST['password'];

// create sql update query
$sql = "UPDATE `db667536964`.`Users` SET password = '$password', email = '$email' WHERE username = '$username'";

// check to see if the query is successful and return a message to user
$result = mysqli_query($connect, $sql);
if($result){
  echo("<meta http-equiv='refresh' content='3;url=index.php'>");
  $passmsg = "Your Settings Have Been Changed. Redirecting to the home page...";
  if(isset($passmsg)){ echo $passmsg;}
}else{
  $failmsg = "Failed to Update Settings" . mysqli_error($connect);
  if(isset($failmsg)){ echo $failmsg;}
}
?>
