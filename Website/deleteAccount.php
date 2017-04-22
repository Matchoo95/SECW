<?php

session_start();
include "./auth.php";

if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}else{
  echo "You are not signed in.";
}

if (isset($_POST['delete'])){
  $sql = "DELETE FROM `db667536964`.`Users` WHERE $username = `username`";
  $result = mysqli_query($connect, $sql);
  if($result){
    echo("<meta http-equiv='refresh' content='3;url=logout.php'>");
    $passmsg = "Your Account Has Been Deleted. Redirecting to the home page...";
    if(isset($passmsg)){ echo $passmsg;}
  }else{
    $failmsg = "Deletion Failed" . mysqli_error($connect);
    if(isset($failmsg)){ echo $failmsg;}
  }
}

?>
