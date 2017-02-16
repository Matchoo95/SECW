<?php
session_start();
include './auth.php';
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

if(!isset($_SESSION['username'])){
  echo "<center>
  <font face='Verdana' size='2' color=red>
    Sorry, Please login to continue.
  </font>
  </center>
  <section class='loginBar'>
    <article id='signin'>
      <form id='login' method='post' accept-charset='UTF-8'>
        <h2>Sign in</h2>

        <label for='username'>Username:</label>
        <input type='text' name='username' id='username' maxlength='50' placeholder='Username' required autofocus/>

        <br />

        <label for='password'>Password:</label>
        <input type='password' name='password' id='password' maxlength='50' placeholder='Password' required/>

        <br />

        <button type='submit' name='Submit' value='Submit'>Sign in</button>

      </form>
    </article>
  </section>";

  exit;
}
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset="utf-8">
    <title>Search Page</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <header>
        <h1 class="logo">
          <a href="index.php">Edu Home</a> <!--feel free to change to a image later-->
        </h1>
        <!--<img src="Media/placeholderbanner.png" alt="banner">-->
      </header>
      <nav class="navigation">
        <ul>
           <li class="active"><a href="index.php">Home</a></li>
           <li ><a href="search.php">Search</a></li>
           <li ><a href="advertise.php">Advertise</a></li>
           <li ><a href="about.php">About</a></li>
           <li ><a href="register.php">Register</a></li>
        </ul>
      </nav>
      <section class="loginBar">
        <article id="signin">
        </article>
      </section>
      <section>
          <h3>Change User Settings</h3>
          <h4>Change E-mail Address</h4>
          <form method='post' accept-charset='UTF-8'>
            <label for='email'>New Email Address:</label>
            <input type='text' name='email' id='email' maxlength="50" placeholder="name@domain.com" required/>
            <br />
            <button type='submit' name='Submit' value='Change'>Change</button>
          </form>
        </section>

        <section>
          <h4>Change Password</h4>
          <form method='post' accept-charset='UTF-8'>
            <label for='password2'>Old Password:</label>
            <input type='password2' name='password2' id='password2' maxlength="50" placeholder="Password" required/>
            <br />
            <label for='newPassword'>New Password:</label>
            <input type='newPassword' name='newPassword' id='newPassword' maxlength="50" placeholder="Password" required/>
            <br />
            <button type='submit' name='Submit' value='Change'>Change</button>
          </form>
        </section>

        <section>
          <h4>Terminate account</h4>
          <form method='post' accept-charset='UTF-8'>
            <button type='submit' name='Submit' value='Delete Account'>Delete Account</button>
          </form>
        </section>
<?php
/*
if (isset($_POST['username']) && isset($_POST['password'])){
    // prevent sql injectsions
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);

    $password1 = trim($_POST['password']);
    $password1 = strip_tags($password1);
    $password1 = htmlspecialchars($password1);

    $password2 = trim($_POST['password']);
    $password2 = strip_tags($password2);
    $password2 = htmlspecialchars($password2);

    $newPassword = trim($_POST['$password']);
    $newPassword = strip_tags($newPassword);
    $newPassword = htmlspecialchars($newPassword);


    $sql = "SELECT * FROM Listings
    WHERE (`bedroom` = '".$bed."')
    AND (`type` = '".$type."')";



    // TODO fix sql syntax error, doesn't work yet
    if(!empty($email)){
      $sql = "UPDATE `Users` SET email=".$email." WHERE `username` = ".$username."";
    }
    if((!empty($password2)) && (!empty($newPassword))){
      $sql = "UPDATE `Users` SET password='$password2' WHERE username='$_SESSION['username']'";
    }

    $input = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    if(mysqli_num_rows($input)>0){
      echo "Your details have been changed";
    }else{
      echo "Failed to change details" . mysqli_error($connect);
    }
  }
  // TODO remove later
  echo "For debugging: ";
  echo $sql;
  echo $email;
  echo $username;



mysqli_close($connect);
  */
?>
  </main>
  <footer>
    FOOTER
  </footer>
  </body>
</html>
