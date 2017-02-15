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
            }
          ?>
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
          <h2>Search Results</h2>
<?php

  // prevent sql injectsions
 $location = trim($_POST['location']);
 $location = strip_tags($location);
 $location = htmlspecialchars($location);

 $bedroom = trim($_POST['bedroom']);
 $bedroom = strip_tags($bedroom);
 $bedroom = htmlspecialchars($bedroom);

 $type = trim($_POST['type']);
 $type = strip_tags($type);
 $type = htmlspecialchars($type);

 $max = trim($_POST['max']);
 $max = strip_tags($max);
 $max = htmlspecialchars($max);

 $min = trim($_POST['min']);
 $min = strip_tags($min);
 $min = htmlspecialchars($min);

//$query = $location . $bedroom . $type . $max . $min;
$query = $location;

// search address fields for user input
$sql = "SELECT * FROM Listings WHERE (`city` LIKE '%".$query."%') OR (`addressLineOne` LIKE '%".$query."%') OR (`addressLineTwo` LIKE '%".$query."%') OR (`county` LIKE '%".$query."%')";

$input = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  if(mysqli_num_rows($input)>0){ // if one or more results returned do this code
    while($result = mysqli_fetch_array($input)){ // puts data in array then loops the following code
      echo "<p><h3>".$result['addressLineOne']." ".$result['addressLineTwo']."
      ".$result['location']."</h3>".$result['information']."</p>";
    }
    }else{ // no results then print the following
      echo "Sorry, we couldn't find any results.
        Please refine your search and try again.";
  }
  // close the connection
  mysqli_close($connect)
?>
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
