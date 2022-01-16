<?php
  $hostname = "studentsconnectedin.database.windows.net";
  $username = "zameel";
  $password = "ali$282003";
  $dbname = "pragati_engineering_college_login2";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
