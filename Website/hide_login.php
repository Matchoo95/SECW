<?php
// if signed in then hide sign in form
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  ?>
  <style type="text/css">#login{display:none;}</style>
  <?php
  $username = $_SESSION['username'];
  echo "<br />Hey there, " . $username . ".";
  echo "<br /><a href='logout.php'>Logout</a>";
  echo "<br /><a href='usersettings.php'>Change Settings</a>";

  include './control_panel_access.php';
}
?>
