<?php
session_start();
include './auth.php';
include './login.php';

// if signed in then hide sign in form
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  ?>
  <style type="text/css">#login{display:none;}</style>
  <?php
  $username = $_SESSION['username'];
  echo "<br />Hey there, " . $username . ".";
  echo "<br /><a href='logout.php'>Logout</a>";
}

if(!isset($_SESSION['username'])){
  echo "<center>
  <font face='Verdana' size='2' color=red>
    Sorry, Please login to continue.
  </font>
  </center>
  <section class='loginBar'>
    <article id='signin'>
      <form id='login' method='post' accept-charset='UTF-8'>
        <h2>Sign in</h2>

        <label for='username'>Username:</label>
        <input type='text' name='username' id='username' maxlength='50' placeholder='Username' required autofocus/>

        <br />

        <label for='password'>Password:</label>
        <input type='password' name='password' id='password' maxlength='50' placeholder='Password' required/>

        <br />

        <button type='submit' name='Submit' value='Submit'>Sign in</button>

      </form>
    </article>
  </section>";

  exit;
}
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset="utf-8">
    <title>Change Settings</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <header>
        <h1 class="logo">
          <a href="index.php"><img src="images/logo.jpg" alt="Edu Home" height="100" width="200"></a>
        </h1>
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
      <section class="loginBar">
        <article id="signin">
        </article>
      </section>
      <section>
          <h3>Change Settings</h3>
          <h4>Change E-mail Address</h4>
          <form method='post' accept-charset='UTF-8'>
            <label for='email'>New Email Address:</label>
            <input type='text' name='email' id='email' maxlength="50" placeholder="name@domain.com" required/>
            <br />
            <button type='submit' name='Submit' value='Change'>Change</button>
          </form>
        </section>

        <section>
          <h4>Change Password</h4>
          <form method='post' accept-charset='UTF-8'>
            <label for='password2'>Old Password:</label>
            <input type='password2' name='password2' id='password2' maxlength="50" placeholder="Password" required/>
            <br />
            <label for='newPassword'>New Password:</label>
            <input type='newPassword' name='newPassword' id='newPassword' maxlength="50" placeholder="Password" required/>
            <br />
            <button type='submit' name='change' value='Change'>Change</button>
          </form>
        </section>

        <section>
          <h4>Terminate account</h4>
          <form method='post' accept-charset='UTF-8'>
            <button type='submit' name='delete' value='Delete Account'>Delete Account</button>
          </form>
        </section>
<?php

if (isset($_POST['delete'])){
  $sql = "DELETE FROM `db667536964`.`Users` WHERE $username = `username`";
  $result = mysqli_query($connect, $sql);
  if($result){
    $passmsg = "Your Account Has Been Deleted.";
    if(isset($passmsg)){ echo $passmsg;}
    echo("<meta http-equiv='refresh' content='1;url=logout.php'>");
  }else{
    $failmsg = "Deletion Failed" . mysqli_error($connect);
    if(isset($failmsg)){ echo $failmsg;}
  }
}

?>



  </main>
  <footer>
    <p>
      Edu Home
    </p>
  </footer>
  </body>
</html>
