<?php
// logs a user into the site

session_start();

// if username and password fields on the sign in form are both entered then
// sign the user in
if(isset($_POST['username']) and isset($_POST['password'])){

  // prevent basic sql injection
  $username = trim($_POST['username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  // generate sql query to check if the username and password match in the database
  $sql = "SELECT * FROM `db667536964`.`Users` WHERE username='$username' AND password='$password'";

  // check if a match is found and output a message
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count == 1){
    $_SESSION['username'] = $username;
    header('Refresh: 1;url=index.php');
  }else{
    echo "<br />Email or password entered is incorrect.";
  }
}
// create a new session variable if the user successfully logs in
if ($count == 1){
  $_SESSION['loggedin'] = true;
}
?>
