<?php
session_start();
include './auth.php';
// if values are entered, put them in database
if (isset($_POST['username']) && isset($_POST['password'])){
    // prevent sql injectsions
    $firstname = trim($_POST['firstname']);
    $firstname = strip_tags($firstname);
    $firstname = htmlspecialchars($firstname);

    $lastname = trim($_POST['lastname']);
    $lastname = strip_tags($lastname);
    $lastname = htmlspecialchars($lastname);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);

    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

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
    <script type="text/javascript" src="javascript/validate.js"></script>
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
          <article id="register">
            <div id="errorList" style="display:Block"></div>
            <!--<form id="register" on`submit`="return validateRegisterForm()"
            method="post" accept-charset="UTF-8" class="floatLeft">-->
            <!-- Commented because I am testing validate.js and don't know if this will be necessary-->
              <!-- output pass or fail messages to user-->
              <form id="register" name="register_form">
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
                      <label for='phone'>Contact Number:</label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <input type='tel' name='phone' id='phone' maxlength="11" placeholder="Phone Number"/>
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
    <script type="text/javascript">
      var validator = new FormValidator('register_form', [{
          name: 'firstname',
          display: 'first name',
          rules: 'required|alpha_numeric'
        }, {
          name: 'lastname',
          display: 'last name',
          rules: 'required|alpha_numeric'
        }, {
          name: 'password',
          rules: 'required|alpha_numeric'
        }, {
          name: 'email',
          rules: 'valid_email',
        }, {
          name: 'username',
          rules: 'required|alpha_numeric',
        }, {
          name: 'phone',
          display: 'phone',
          rules: 'required|numeric'
        }], function(errors, event) {
          if (errors.length > 0) {
            for (var i = 0; i < errors.length; i++) {
              errorBox = document.getElementById("errorList");
              errorBox.append(errors[i].message + '<br />');
            }
            errorBox.fadeIn(200);
          } else {
              /*errorBox.css({display:'none'});*/
            }
      if (evt && evt.preventDefault) {
          evt.preventDefault();
      } else if (event) {
        event.returnValue = false;
      }
        });
    </script>
  </body>
  <script src="javascript/script.js"></script>
</html>
