<?php
// logs a user out of the site

session_start();
session_destroy();
header('Location: index.php');
 ?>
