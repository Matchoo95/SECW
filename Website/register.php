<?php
include './auth.php'; // TODO consider changing to require instead
// if values are entered, put them in database
if (isset($_POST['username']) && isset($_POST['password'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `db667536964`.`Users` (`firstname`, `lastname`, `email`, `phone`, `username`, `password`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$username', '$password')";
    $result = mysqli_query($connect, $sql);
    if($result){
      $passmsg = "Your Account Has Been Created.";
    }else{
      $failmsg = "Registration Failed" . mysqli_error($connect);
    }
  }
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
        <section class="leftSideBar">
          <article id="register">
            <form id="register" onsubmit="return validateRegisterForm()"
            method="post" accept-charset="UTF-8">
              <!-- output pass or fail messages to user-->
              <?php if(isset($passmsg)){ echo $passmsg;}?>
              <?php if(isset($failmsg)){ echo $failmsg;}?>
              <h2>Register Form</h2>
              <h3>Please Fill in All Boxes</h3>
                  <label for='firstname'>First Name:</label>
                  <input type='text' name='firstname' id='firstname' maxlength="100" placeholder="First Name" required/>

                  <br />

                  <label for='lastname'>Last Name:</label>
                  <input type='text' name='lastname' id='lastname' maxlength="100" placeholder="Last Name" required/>

                  <br />

                  <label for='email'>Email Address:</label>
                  <input type='text' name='email' id='email' maxlength="50" placeholder="Email Address" required/>

                  <br />
                
                
                  <label for='phone'>Contact Number:</label>
                  <input type='text' name='phone' id='phone' maxlength="11" placeholder="Phone Number"/>
                
                  <br />

                  <label for='username'>Username:</label>
                  <input type='text' name='username' id='username' maxlength="50" placeholder="Username" required autofocus/>
  

                  <br />

                  <label for='password'>Password:</label>
                  <input type='password' name='password' id='password' maxlength="50" placeholder="Password" required/>

                  <br />

                  <button type='submit' name='Submit' value='Submit'>Register</button>
            </form>
          </article>
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
