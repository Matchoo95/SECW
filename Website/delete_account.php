<?php
// delete a users account

session_start();
include "./auth.php"; // database connection

// check if user is signed in
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}else{
  echo "You are not signed in.";
}

// if the delete button is pressed then do this code
if (isset($_POST['delete'])){
  // create sql delete query based on the current users username
  $sql = "DELETE FROM `db667536964`.`Users` WHERE $username = `username`";

  // check to see if the query is successful and return a message to user
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
