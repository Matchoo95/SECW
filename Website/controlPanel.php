<?php
  // control panel for landlords
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
    <nav class="navigation">
          <ul>
             <li class="active"><a href="index.php">Home</a></li>
             <li ><a href="search.php">Add a new property</a></li>
             <li ><a href="advertise.php">Change a property</a></li>
             <li ><a href="about.php">Delete a property</a></li>
             <li ><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
  </header>
    <main>
        <section id="mainCont" class="mainContent">


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
