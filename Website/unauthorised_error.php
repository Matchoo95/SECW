<?php
// unauthorised access page

session_start();

include './auth.php'; // database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Unauthorised Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/unauthorisedAccess.css">
</head>
<body>
    <h1>Cannot access this page</h1>
    <p>Sorry, but you do not have access to this page. </p>
  <?php
    // display a login form if the user is not logged in
    include './login.php';
    if(!isset($_SESSION['username'])){
      echo "
      <br /><br />
      <center>
      <font face='Verdana' size='2' color=red>
        Sorry, Please login to continue.
      </font>
      </center>
      <br /><br />
      <section class='loginBar'>
        <article id='signin'>
          <form action='index.php' id='login' method='post' accept-charset='UTF-8'>
            <h2>Sign in</h2>
            <br /><br />
            <label for='username'>Username:</label>
            <input type='text' name='username' id='username' maxlength='50' placeholder='Username' required autofocus/>
            <br />
            <label for='password'>Password:</label>
            <input type='password' name='password' id='password' maxlength='50' placeholder='Password' required/>
            <br /><br />
            <button type='submit' name='Submit' value='Submit'>Sign in</button>
          </form>
        </article>
      </section>";
      exit;
    }
  ?>
</body>
</html>
