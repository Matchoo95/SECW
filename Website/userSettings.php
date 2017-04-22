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
          <form action="change.php" method="post" accept-charset='UTF-8'>
          New Email: <input type="text" name="email"><br>
          New Password: <input type="text" name="password"><br>
          <input type="submit">
          </form>
      </section>

        <section>
          <h4>Terminate account</h4>
          <form action="deleteAccount.php" method='post' accept-charset='UTF-8'>
            <button type='submit' name='delete' value='Delete Account'>Delete Account</button>
          </form>
        </section>
  </main>
  <footer>
    <p>
      Edu Home
    </p>
  </footer>
  </body>
</html>
