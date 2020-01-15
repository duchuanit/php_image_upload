<?php
$con = mysqli_connect("localhost","root","","upload_img");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
