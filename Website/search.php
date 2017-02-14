<?php
  //session_start();
  include './auth.php';
  include './login.php';
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
        <section class="loginBar">
          <article id="signin">
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
          <form action="searchresults.php" method="get">
            <h2>Search</h2>
            <p>Please enter criteria for your search.</p>
            <label for'city'>City</label>
            <input type="text" name="city" />
            <label for'type'>Accomodation Type</label>
            <input type="text" name="type" />
            <label for'bedroom'>Number of Bedrooms</label>
            <input type="text" name="bedroom" />
            <label for'min'>Minimum Price</label>
            <input type="text" name="min" />
            <label for'max'>Maximum Price</label>
            <input type="text" name="max" />
                <br />
            <input type="submit" value="Search" />
          </form>

        </section>
    </main>
    <footer>
      <p>
        FOOTER
      </p>
    </footer>
  </body>
  <script src="javascript/script.js"></script>
</html>
