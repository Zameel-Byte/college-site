<?php
  $hostname = "studentsconnectingin.scm.azurewebsites.net";
  $username = "zameel";
  $password = "ali$282003";
  $dbname = "pragati_engineering_college_login";
  $LoginTimeout = "30";

  $conn = mysqli_connect($hostname, $username, $password, $dbname, $LoginTimeout);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
