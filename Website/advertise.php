<?php
// information about advertising on the site

session_start();
include './auth.php'; // database connection
?>
<!DOCTYPE html>
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
              // show the login side panel or options if user is signed in
              include './login.php';
              include './hide_login.php';
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
          <p>
            If you own a property that you wish to advertise for rent here then please sign up under the register option. Upon sign up, please tick the checkbox for wanting to advertise accommodation.
            This will set you up with a vendor account and will allow you to upload new listings to be advertised on the website.
          </p>
        </section>
    </main>
    <footer>
      <p>
        Edu Home
      </p>
    </footer>
  </body>
</html>
