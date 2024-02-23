<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brassacces_bd";
$date_inscription = date("Y/m/d");
$heure_inscription = date("H:i:s");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  // echo "Connexion réussie";
}
?>