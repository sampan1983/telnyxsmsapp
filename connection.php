<?php
$servername = "q68u8b2buodpme2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "q40safy2jq1aej56";
$password = "frbhki4aokob1hzv";
$db="dz1oduatpy1ct2mo";

// Create connection
$con = new mysqli($servername, $username, $password,$db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>
