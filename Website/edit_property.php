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
          <section>
              <h3>Change Property Details</h3>
              <form method="post" accept-charset='UTF-8'>
                <p>
                  Please enter the Property Identification Number of the property
                  of which you wish to edit.
                </p><br />
                Property Identification Number: <input type="text" name="PIN"><br>
                <button type='submit' name='submit' value='Change Details'>Submit</button>
              </form>
              <br />
          </section>
          <section>
            <h3>Current Properties</h3>


  <?php
    // store user input of which property to edit
    $pin = $_POST['PIN'];
    // store userID
    $userID = $_SESSION['Users_userID'];

    // get listings that have been created by this user
    $sql = "SELECT * FROM `db667536964`.`Listings` WHERE Users_userID='$userID' AND listingID='$pin'";

    // send query to database and return error if it fails
    $input = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    // output results
    if(mysqli_num_rows($input) > 0){ // if one or more results returned do this code
      echo "<section>
          <h3>Change Details</h3>
          <form id='edit' onsubmit='return validateRegisterForm()'
          method='post' accept-charset='UTF-8' class='floatLeft'>
          <p>Information about the property (description):</p>
              <table>
                <table>
                  <tr>
                    </th>
                      <textarea for='information' placeholder='Information'></textarea>
                    </th>
                  </tr>
                <tr>
                  <th>
                    <label for='photoLink'>Photo URL (optional):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='photoLink' id='photoLink' maxlength='100' placeholder='Photo URL' />
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='price'>Price (per month):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='price' id='price' maxlength='50' placeholder='£000.00' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='contactNumber'>Contact Number:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='contactNumber' id='contactNumber' maxlength='12' placeholder='0000000000' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='addressLineOne'>Address Line 1:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='addressLineOne' name='addressLineOne' id='addressLineOne' maxlength='100' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='addressLineTwo'>Address Line 2 (optional):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='addressLineTwo' name='addressLineTwo' id='addressLineTwo' maxlength='100' />
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='city'>City:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='city' name='city' id='city' maxlength='50' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='county'>County:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='county' name='county' id='county' maxlength='50' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='postcode'>Postcode:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='postcode' name='postcode' id='postcode' maxlength='7' required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for=''bedroom'>Number of Bedrooms</label>
                    <select name='bedroom'>
                      <option value='1' selected>1</option>
                      <option value='2'>2</option>
                      <option value='3'>3</option>
                      <option value='4'>4</option>
                      <option value='5'>5</option>
                      <option value='6'>6</option>
                      <option value='7'>7</option>
                      <option value='8'>8</option>
                      <option value='9'>9</option>
                      <option value='10'>10</option>
                    </select>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='type'>Type</label>
                    <select name='type'>
                      <option value='Flat' selected>Flat</option>
                      <option value='Detached'>Detached</option>
                      <option value='Semi-detached'>Semi-detached</option>
                      <option value='Terraced'>Terraced</option>
                      <option value='Bungalow'>Bungalow</option>
                    </select>
                  </th>
                </tr>
              </table>
            <button type='submit' name='submit' value='Submit'>Submit</button>
          </form>
      </section>";
    }elseif(mysqli_num_rows($input) == 0 && isset($_POST['submit'])){ // if no results
      echo "This property does not exist. Please check your input and try again.";
    }

    include './display_listings.php';

    // close the connection
    mysqli_close($connect);
  ?>
         </section>
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
