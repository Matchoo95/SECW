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

  $sql = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Refresh: 0;url=index.php');
  }else{
    echo "<br />Email or password entered is incorrect.";
  }
}
?>
