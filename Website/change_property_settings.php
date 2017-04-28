<?php
// changes a properties details in the database

session_start();
include "./auth.php"; // database connection

// get listing number
$pin = $_SESSION['listingID'];

// get user id
$userID = $_SESSION['Users_userID'];

// store variables and prevent basic sql injection
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

$bedroom = trim($_POST['bedroom']);
$bedroom = strip_tags($bedroom);
$bedroom = htmlspecialchars($bedroom);

$type = trim($_POST['type']);
$type = strip_tags($type);
$type = htmlspecialchars($type);

// create sql update query
$sql = "UPDATE `db667536964`.`Listings` SET information = '$information',
  photoLink = '$photoLink', price = '$price', contactNumber = '$contactNumber',
  addressLineOne = '$addressLineOne', addressLineTwo = '$addressLineTwo',
  city = '$city', county = '$county', postcode = '$postcode', bedroom = '$bedroom',
  type = '$type' WHERE Users_userID='$userID' AND listingID='$pin'";

// check to see if the query is successful and return a message to user
$result = mysqli_query($connect, $sql);
if($result){
  echo("<meta http-equiv='refresh' content='3;url=control_panel.php'>");
  $passmsg = "Your Listing Has Been Changed. Redirecting to Control Panel...";
  if(isset($passmsg)){ echo $passmsg;}
}else{
  $failmsg = "Failed to Update Listing" . mysqli_error($connect);
  if(isset($failmsg)){ echo $failmsg;}
}
?>
