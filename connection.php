<?php
$servername = "localhost";
$username = "root";
$password = "vm@321";
$db="app_democalling";

// Create connection
$con = new mysqli($servername, $username, $password,$db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>