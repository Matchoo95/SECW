<?php
  // control panel for landlords

  session_start();
  include './auth.php'; // database connection
  include './control_panel_access.php'; // check account type
  include './login_check.php'; // check if logged in
?>
<!DOCTYPE html>
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
  include './display_listings.php'; // display listings owned by current user
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
