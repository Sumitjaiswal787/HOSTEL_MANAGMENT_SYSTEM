<?php
  session_start();
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "u666274144_sumitjaiwal787";
  $dBPassword = "Sumit@8969";
  $dBName = "u666274144_hostel_managem";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
