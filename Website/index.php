<?php
  session_start();
  include './auth.php';
?>

<html lang="en">
  <head>
    <title>Edu Home</title>
    <link rel="icon" href="images/house-logo.png">
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <a href="index.php"><img src="images/logo.jpg" alt="Edu Home" height="100" width="200"></a>
        <nav class="navigation">
          <ul>
             <li class="active"><a href="index.php">Home</a></li>
             <li ><a href="search.php">Search</a></li>
             <li ><a href="advertise.php">Advertise</a></li>
             <li ><a href="about.php">About</a></li>
             <li ><a href="register.php">Register</a></li>
          </ul>
        </nav>
  </header>
    <main>
        <section class="loginBar">
          <article id="signin">
            <?php

              include './login.php';

              // if signed in then hide sign in form
              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
                ?>
                <style type="text/css">#login{display:none;}</style>
                <?php
                $username = $_SESSION['username'];
                echo "<br />Hey there, " . $username . ".";
                echo "<br /><a href='logout.php'>Logout</a>";
                echo "<br /><a href='usersettings.php'>Change Settings</a>";
              }
            ?>
            <form id='login' method='post' accept-charset='UTF-8'>
              <h2>Sign in</h2>

              <label for='username'>Username:</label>
              <input type='text' name='username' id='username' maxlength="50" placeholder="Username" required autofocus/>

              <br />

              <label for='password'>Password:</label>
              <input type='password' name='password' id='password' maxlength="50" placeholder="Password" required/>

              <br />

              <button type='submit' name='Submit' value='Submit'>Sign in</button>

            </form>
          </article>
        </section>
        <section id="mainCont" class="mainContent">
          <a href="search.php" class="button">I am Looking for Accomodation</a>
          <a href="advertise.php" class="button">I Want to Advertise Accomodation</a>
       </section>
    </main>
    <footer>
      <p>
        Edu Home
      </p>
    </footer>
  </body>
  <script src="javascript/script.js"></script>
</html>
