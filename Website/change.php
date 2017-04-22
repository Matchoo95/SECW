<?php
session_start();
include "./auth.php";

if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}else{
  echo "You are not signed in.";
}

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "UPDATE `db667536964`.`Users` SET password = '$password', email = '$email' WHERE $username = `username`";
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
