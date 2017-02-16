<?php
session_start();
include './auth.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    // prevent sql injectsions
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    // TODO fix sql syntax error
    if(!empty($email)){
      $sql = "UPDATE `Users` SET email='$email' WHERE username='$_SESSION['username']'";
    }
    if(!empty($password)){
      $sql = "UPDATE `Users` SET password='$password' WHERE username='$_SESSION['username']'";
    }

    $result = mysqli_query($connect, $sql);
    if($result){
      $passmsg = "Your Account Has Been Created.";
    }else{
      $failmsg = "Registration Failed" . mysqli_error($connect);
    }
  }
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset="utf-8">
    <title>Search Page</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <header>
        <img src="Media/placeholderbanner.png" alt="banner">
      </header>
      <nav class="navigation">
        <ul>
           <li class="active"><a href="index.php">Home</a></li>
           <li ><a href="search.php">Search</a></li>
           <li ><a href="advertise.php">Advertise</a></li>
           <li ><a href="about.php">About</a></li>
           <li ><a href="register.php">Register</a></li>
        </ul>
      </nav>
    <section>
      <h3>Change User Settings</h3>
      <h4>Change E-mail Address</h4>
      <form action="/NewEmail.php">
        New E-mail: <input type="text" name="Email"><br>
        Password:   <input type="text" name="Passwordcheck"><br>
        <input type="submit" value="Submit">
      </form>
    </section>
    <section>
      <h4>Change Password</h4>
      <form action="/NewPasswd.php">
      Old Password: <input type="text" name="Passwordcheck"><br>
      New Password: <input type="text" name="NewPass"><br>
      <input type="submit" value="Submit">
      </form>

      <h4>Terminate account</h4>
      <form action="/Terminate.php">
      <input type="submit" value="Submit">
      </form>
    </section>
  </main>
  <footer>
    FOOTER
  </footer>
  </body>
</html>
