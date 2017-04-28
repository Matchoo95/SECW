<?php
// display listings owned by current user

  session_start();

  // get user's ID from database and store it in $userID
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
  if(mysqli_num_rows($input) > 0){ // if one or more results returned do this code
    while($result = mysqli_fetch_array($input)){ // puts data in array then loops the following code
      echo "<br /><p><h3>".$result['addressLineOne']." ".$result['addressLineTwo']."
      ".$result['loc']."</h3><h4>£".$result['price']."
      - beds: ".$result['bedroom']."</h4> Property Identification Number: ".$result['listingID']."</p><br /><hr />";
    }
  }else{ // if no results
      echo "You do not have any listings yet. Please add a listing by clicking
        the 'Add a new property' button at the top of the page.";
  }
  // close the connection
  mysqli_close($connect);
?>
