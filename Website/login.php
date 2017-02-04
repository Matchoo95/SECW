<?php
session_start();

include './auth.php';

if(isset($_POST['username']) and isset($_POST['password']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['username'] = $username;
    //header('Refresh: 0;url=controlPanel.php');
  }else{
    echo "Email or password entered is incorrect.";
  }
}

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  echo "Hey there, " . $username . ".";
  echo "<a href='logout.php'>Logout</a>";
}
?>
