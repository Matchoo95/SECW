<?php
session_start();
include './auth.php';
?>
<html lang="en">
  <head>
    <title>Edu Home</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <h1 class="logo">
      <a href="index.php"><img src="images/logo.jpg" alt="Edu Home" height="100" width="200"></a> 
    </h1>
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
        <section id="searchResults" class="searchResults">
          <form action="searchresults.php" method="post">
            <fieldset>
              <legend><h3>Search</h3></legend>
                <p>Please enter criteria for your search.</p>
                <label for="location">Location</label>
                <input type="text" name="location" />
                <label for="type">Type</label>
                <select name="type">
                  <option value="Flat" selected>Flat</option>
                  <option value="Detached">Detached</option>
                  <option value="Semi-detached">Semi-detached</option>
                  <option value="Terraced">Terraced</option>
                  <option value="Bungalow">Bungalow</option>
                </select>
                <label for="bedroom">Bedrooms</label>
                <select name="bedroom">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <label for="min">Min Price</label>
                <input type="number" name="min" />
                <label for="max">Max Price</label>
                <input type="number" name="max" />
                    <br />
                <input type="submit" value="Search" />
            </fieldset>
          </form>
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
