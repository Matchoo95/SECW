<?php
// register page for new users

session_start();

include './auth.php'; // database connection

// if values are entered, put them in database
if (isset($_POST['username']) && isset($_POST['password'])){

    // prevent basic sql injection
    $firstname = trim($_POST['firstname']);
    $firstname = strip_tags($firstname);
    $firstname = htmlspecialchars($firstname);

    $lastname = trim($_POST['lastname']);
    $lastname = strip_tags($lastname);
    $lastname = htmlspecialchars($lastname);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    // check if the users accoutn is a vendor or student account
    $accountType = $_POST['accountType'];
    if ($_POST['accountType'] == '1'){
      $accountType = "vendor";
    }else{
      $accountType = "student";
    }

    // generate sql insert query to insert the new user into the database
    $sql = "INSERT INTO `db667536964`.`Users` (`firstname`, `lastname`, `email`,
       `username`, `password`, accountType) VALUES ('$firstname', '$lastname',
          '$email', '$username', '$password', '$accountType')";

    // check if the insertion was successful and return a message
    $result = mysqli_query($connect, $sql);
    if($result){
      echo("<meta http-equiv='refresh' content='3;url=index.php'>");
      $passmsg = "Your Account Has Been Created. Redirecting to the home page...";
    }else{
      $failmsg = "Registration Failed" . mysqli_error($connect);
    }
  }
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
          <article id="register">
            <form id="register" onsubmit="return validateRegisterForm()"
            method="post" accept-charset="UTF-8" class="floatLeft">
              <!-- output pass or fail messages to user-->
              <?php if(isset($passmsg)){ echo $passmsg;}?>
              <?php if(isset($failmsg)){ echo $failmsg;}?>
              <h2>Register Form</h2>
                <table>
                  <tr>
                    <h3>Please Fill in All Boxes</h3>
                  </tr>
                  <tr>
                    <th>
                      <label for='firstname'>First Name:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='text' name='firstname' id='firstname' maxlength="100" placeholder="First Name" required/>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for='lastname'>Last Name:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='text' name='lastname' id='lastname' maxlength="100" placeholder="Last Name" required/>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for='email'>Email Address:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='text' name='email' id='email' maxlength="50" placeholder="name@domain.com" required/>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for='username'>Username:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='text' name='username' id='username' maxlength="50" placeholder="Username" required autofocus/>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for='password'>Password:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='password' name='password' id='password' maxlength="50" placeholder="Password" required/>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for='accountType'>Please tick if you want to advertise accommodation</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                        <input type="hidden" name="accountType" value="0">
                        <input type="checkbox" name="accountType" value="1">
                    </th>
                  </tr>

                </table>
              <button type='submit' name='Submit' value='Submit'>Register</button>
            </form>
          </article>
        </section>
    </main>
    <footer>
      <p>
        Edu Home
      </p>
    </footer>
  </body>
</html>
