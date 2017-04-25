<?php
  // control panel for landlords
  session_start();
  include './auth.php';
  include './control_panel_access.php';
  include './login_check.php';
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
             <li ><a href="add_property.php">Add a new property</a></li>
             <li ><a href="edit_property.php">Edit a property</a></li>
             <li ><a href="delete_property.php">Delete a property</a></li>
             <li ><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
  </header>
    <main>
      <?php echo "Welcome, '$user'"; ?>
        <section id="mainCont" class="mainContent">
          <h1>Your properties:</h1><hr />
<?php

  // get user's ID from database
  $userNoQuery = "SELECT userID FROM `db667536964`.`Users` WHERE username='$user'";
  $userNoQueryResult = mysqli_query($connect, $userNoQuery) or die(mysqli_error($connect));
  $userNo = mysqli_fetch_array($userNoQueryResult);
  $userID = $userNo['userID'];

  // store user's ID as session variable to be used in other pages
  $_SESSION['Users_userID'] = $userID;

  // get listings that have been created by this user
  $sql = "SELECT * FROM `db667536964`.`Listings` WHERE Users_userID='$userID'";

  // send query to database and return error if it fails
  $input = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  // output results
  if(mysqli_num_rows($input)>0){ // if one or more results returned do this code
    while($result = mysqli_fetch_array($input)){ // puts data in array then loops the following code
      echo "<br /><p><h3>".$result['addressLineOne']." ".$result['addressLineTwo']."
      ".$result['loc']."</h3><h4>£".$result['price']."
      - beds: ".$result['bed']."</h4> Property Identification Number: ".$result['listingID']."</p><br /><hr />";
    }
  }else{ // if no results
      echo "You do not have any listings yet. Please add a listing by clicking
        the 'Add a new property' button at the top of the page.";
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
  <script src="javascript/script.js"></script>
</html>
