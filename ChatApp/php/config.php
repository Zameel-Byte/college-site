<?php
  $hostname = "studentsconnectingin.scm.azurewebsites.net";
  $username = "zameel";
  $password = "ali$282003";
  $dbname = "pragati_engineering_college_login";
  $logintimeout = "30";
  $encrypt = "1";
  $trustservercertificate = "0";
  $conn = mysqli_connect($hostname, $username, $password, $dbname, $logintimeout, $encrypt, $trustservercertificate);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
