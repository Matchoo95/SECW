<?php
// test query
// create sql query and return results

$sql = "SELECT username, firstname, lastname FROM Users";
$result = mysqli_query($connect, $sql);

echo "The following output is a test for querying the database: ";

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
