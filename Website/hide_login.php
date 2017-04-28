<?php
// hides login form and displays member features

session_start();

include './auth.php'; // database connections

// if signed in, hide sign in form
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  ?>
  <!-- apply styling to hide login form -->
  <style type="text/css">#login{display:none;}</style>
  <?php
  $username = $_SESSION['username'];
  echo "<br />Hey there, " . $username . ".";
  echo "<br /><a href='logout.php'>Logout</a>";
  echo "<br /><a href='usersettings.php'>Change Settings</a>";

  // check if the user is a vendor or not and display control panel access if
  // they have a vendor account
  include './control_panel_access.php';
  if ($found == 1){
    echo "<br /><a href='control_panel.php'>Control Panel</a>";
  }
}
?>
