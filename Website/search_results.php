<?php
// displays search results to the user

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
    <meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <nav class="navigation">
    <a href="index.php"><img src="images/logo.jpg" alt="Edu Home" height="100" width="200"></a>
    <ul>
       <li class="active"><a href="index.php">Home</a></li>
       <li ><a href="search.php">Search</a></li>
       <li ><a href="advertise.php">Advertise</a></li>
       <li ><a href="about.php">About</a></li>
       <li ><a href="register.php">Register</a></li>
    </ul>
  </nav>
    <main>
        <section class="loginBar">
          <?php
            // show the login side panel or options if user is signed in
            include './login.php';
            include './hide_login.php';
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
// prevent basic sql injectsion
$loc = trim($_POST['location']);
$loc = strip_tags($loc);
$loc = htmlspecialchars($loc);

$bed = trim($_POST['bedroom']);
$bed = strip_tags($bed);
$bed = htmlspecialchars($bed);

$type = trim($_POST['type']);
$type = strip_tags($type);
$type = htmlspecialchars($type);

$max = trim($_POST['max']);
$max = strip_tags($max);
$max = htmlspecialchars($max);

$min = trim($_POST['min']);
$min = strip_tags($min);
$min = htmlspecialchars($min);

// build basic sql query
$sql = "SELECT * FROM `db667536964`.`Listings`
WHERE (bedroom = '$bed')
AND (type = '$type')";

// append extra parts to the sql based on user input
if(!empty($loc)){
  $sql .= " AND (`city` LIKE '%".$loc."%' OR `addressLineOne` LIKE '%".$loc."%' OR `addressLineTwo` LIKE '%".$loc."%' OR `county` LIKE '%".$loc."%')";
}
if(!empty($max)){
  $sql .= " AND (`price` <= '".$max."')";
}
if(!empty($min)){
  $sql .= " AND (`price` >= '".$min."')";
}
// append to the end of the query
$sql .= " ORDER BY price;";

// send query to database and return error if it fails
$input = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  // output results
  if(mysqli_num_rows($input)>0){ // if one or more results returned do this code
    while($result = mysqli_fetch_array($input)){ // puts data in array then loops the following code
      echo "<p><h3>".$result['addressLineOne']." ".$result['addressLineTwo']."
      ".$result['loc']."</h3><h4>£".$result['price']."
      - beds: ".$result['bedroom']."</h4>".$result['information']."
      </p><br /><hr />";
    }
  }else{ // if no results
      echo "Sorry, we couldn't find any results.
        Please refine your search and try again.";
  }
  // close the connection
  mysqli_close($connect);
?>
        </section>
    </main>
    <footer>
      <p>
        Edu Home
      </p>
    </footer>
  </body>
</html>
