<?php
  // if a vendor account then display control panel acccess
  $sql = "SELECT 1 FROM Users WHERE username='$username' AND accountType='vendor'";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  $found = mysqli_num_rows($result);

  if ($found == 1){
    echo "<br /><a href='control_panel.php'>Control Panel</a>";
  }
?>
