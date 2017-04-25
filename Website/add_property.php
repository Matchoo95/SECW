<?php
  // control panel for landlords
  session_start();
  include './auth.php';
  include './control_panel_access.php';
  include './login_check.php';

  // if values are entered, put them in database
  if (isset($_POST['submit'])){
      // prevent sql injectsions
      $information = trim($_POST['information']);
      $information = strip_tags($information);
      $information = htmlspecialchars($information);

      $photoLink = trim($_POST['photoLink']);
      $photoLink = strip_tags($photoLink);
      $photoLink = htmlspecialchars($photoLink);

      $price = trim($_POST['price']);
      $price = strip_tags($price);
      $price = htmlspecialchars($price);

      $contactNumber = trim($_POST['contactNumber']);
      $contactNumber = strip_tags($contactNumber);
      $contactNumber = htmlspecialchars($contactNumber);

      $addressLineOne = trim($_POST['addressLineOne']);
      $addressLineOne = strip_tags($addressLineOne);
      $addressLineOne = htmlspecialchars($addressLineOne);

      $addressLineTwo = trim($_POST['addressLineTwo']);
      $addressLineTwo = strip_tags($addressLineTwo);
      $addressLineTwo = htmlspecialchars($addressLineTwo);

      $city = trim($_POST['city']);
      $city = strip_tags($city);
      $city = htmlspecialchars($city);

      $county = trim($_POST['county']);
      $county = strip_tags($county);
      $county = htmlspecialchars($county);

      $postcode = trim($_POST['postcode']);
      $postcode = strip_tags($postcode);
      $postcode = htmlspecialchars($postcode);

      $userID = $_SESSION['Users_userID'];

      $bedroom = trim($_POST['bedroom']);
      $bedroom = strip_tags($bedroom);
      $bedroom = htmlspecialchars($bedroom);

      $type = trim($_POST['type']);
      $type = strip_tags($type);
      $type = htmlspecialchars($type);

      $sql = "INSERT INTO `db667536964`.`Listings` (`information`, `photoLink`,
        `price`, `contactNumber`, `addressLineOne`, `addressLineTwo`, `city`,
        `county`, `postcode`, `Users_userID`, `bedroom`, `type`) VALUES
        ('$information', '$photoLink', '$price', '$contactNumber',
          '$addressLineOne', '$addressLineTwo', '$city', '$county',
          '$postcode', '$userID', '$bedroom', '$type')";

      $listings = mysqli_query($connect, $sql);
      if($listings){
        $passmsg = "Your Listing Has Been Created. You can check that it has uploaded on the main page of the control panel.";
      }else{
        $failmsg = "Failed to Create Listing." . mysqli_error($connect);
      }

      // close the connection
      mysqli_close($connect);

    }
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
             <li ><a href="control_panel.php">Control Panel</a></li>
             <li ><a href="add_property.php">Add a new property</a></li>
             <li ><a href="edit_property.php">Edit a property</a></li>
             <li ><a href="delete_property.php">Delete a property</a></li>
             <li ><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
  </header>
    <main>
        <section id="mainCont" class="mainContent">
          <?php echo "Welcome, '$user'"; ?>
          <form id="register" onsubmit="return validateRegisterForm()"
          method="post" accept-charset="UTF-8" class="floatLeft">
            <h2>Add a new property listing</h2>
            <p>Information about the property (description):</p>
              <table>
                <tr>
                  </th>
                    <textarea name='information' placeholder='Information'></textarea>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='photoLink'>Photo URL (optional):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='photoLink' id='photoLink' maxlength="100" placeholder="Photo URL" />
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='price'>Price (per month):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='price' id='price' maxlength="50" placeholder="£000.00" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='contactNumber'>Contact Number:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='text' name='contactNumber' id='contactNumber' maxlength="12" placeholder="0000000000" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='addressLineOne'>Address Line 1:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='addressLineOne' name='addressLineOne' id='addressLineOne' maxlength="100" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='addressLineTwo'>Address Line 2 (optional):</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='addressLineTwo' name='addressLineTwo' id='addressLineTwo' maxlength="100" />
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='city'>City:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='city' name='city' id='city' maxlength="50" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='county'>County:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='county' name='county' id='county' maxlength="50" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for='postcode'>Postcode:</label>
                  </th>
                </tr>
                <tr>
                  <th>
                    <input type='postcode' name='postcode' id='postcode' maxlength="7" required/>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for="bedroom">Number of Bedrooms</label>
                    <select name="bedroom">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </th>
                </tr>
                <tr>
                  <th>
                    <label for="type">Type</label>
                    <select name="type">
                      <option value="Flat" selected>Flat</option>
                      <option value="Detached">Detached</option>
                      <option value="Semi-detached">Semi-detached</option>
                      <option value="Terraced">Terraced</option>
                      <option value="Bungalow">Bungalow</option>
                    </select>
                  </th>
                </tr>
              </table>
            <button type='submit' name='submit' value='Submit'>Submit</button>
          </form>
          <!-- output pass or fail messages to user-->
          <?php if(isset($passmsg)){ echo $passmsg;}?>
          <?php if(isset($failmsg)){ echo $failmsg;}?>
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
