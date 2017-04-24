<?php
session_start();

if(isset($_POST['username']) and isset($_POST['password']))
{
  $username = trim($_POST['username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  $sql = "SELECT * FROM `db667536964`.`Users` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['username'] = $username;
    header('Refresh: 1;url=index.php');
  }else{
    echo "<br />Email or password entered is incorrect.";
  }
}
if ($count == 1){
  $_SESSION['loggedin'] = true;
}
?>
