<?php
session_start();
      include './auth.php';
      include './query.php';
?>

<html lang="en">
  <head>
    <title>Edu Home</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <h1 class="logo">
      <a href="index.php">Edu Home</a> <!--feel free to change to a image later-->
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
        <section class="leftSideBar">
          <article id="signin">
            <h3>

            </h3>
            <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
                <fieldset>
                  <legend>Login</legend>
                    <!--TODO make sure each text box is on a seperate line-->
                  <input type='hidden' name='submitted' id='submitted' value='1' />

                  <label for='username'>Username:</label>
                  <input type='text' name='username' id='username' maxlength="50" />

                  <label for='password' >Password:</label>
                  <input type='password' name='password' id='password' maxlength="50" />

                  <input type='submit' name='Submit' value='Submit' />
                </fieldset>
            </form>


          </article>
        </section>

      <a href="search.php" class="button">I am Looking for Accomodation</a>
      <a href="advertise.php" class="button">I Want to Advertise Accomodation</a>
    </main>
    <footer>
      <p>
        FOOTER
      </p>
    </footer>
  </body>
  <script src="javascript/script.js"></script>
</html>
