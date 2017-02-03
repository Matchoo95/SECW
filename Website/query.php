<?php
// create sql query and return results

$sql = "SELECT username, firstname, lastname FROM Users";
$result = mysqli_query($connect, $sql);

// output data for each row in table
while($row = mysqli_fetch_array($result)){
  echo $row['username'];
  echo $row['firstname'];
  echo $row['lastname'];

  //echo "Username: " . $row["username"]. " - Name: " . $row["firstname"]. " " .
  //$row["lastname"]. "<br>";
}
// close the connection
mysqli_close($connect)
?>
