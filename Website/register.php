<?php
include './auth.php'; // TODO consider changing to require instead
// if values are entered, put them in database
if (isset($_POST['username']) && isset($_POST['password'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `db667536964`.`Users` (`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
    $result = mysqli_query($connect, $sql);
    if($result){
      echo "Your Account Has Been Created.";
      $passmsg = "Your Account Has Been Created.";
    }else{
      echo "Registration Failed";
      $failmsg = "Registration Failed" . mysqli_error($link);;
    }
  }
?>
<html>

  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <form id="register" onsubmit="return validateRegisterForm()"
    method="post" accept-charset="UTF-8">
    <!-- output pass or fail messages to user
    <?php if(isset($passmsg)){ echo $passmsg;}?>
    <?php if(isset($failmsg)){ echo $failmsg;}?>
    -->
      <fieldset style="width:70%">
        <legend>Registration</legend>
        <!--TODO make sure each text box is on a seperate line-->
          <input type='hidden' name='submitted' id='submitted' value='1'/>

          <label for='firstname'>First Name:</label>
          <input type='text' name='firstname' id='firstname' maxlength="100" />

          <label for='lastname'>Last Name:</label>
          <input type='text' name='lastname' id='lastname' maxlength="100" />

          <label for='email'>Email Address:</label>
          <input type='text' name='email' id='email' maxlength="50" />

          <label for='username'>Username:</label>
          <input type='text' name='username' id='username' maxlength="50" />
          <!--TODO make password field auto asterix as the user types-->
          <label for='password'>Password:</label>
          <input type='text' name='password' id='password' maxlength="50" />

          <input type='submit' name='Submit' value='Submit' />
      </fieldset>
    </form>
  </body>
</html>
