<?php
  $hostname = "sql307.epizy.com";
  $username = "epiz_30600377";
  $password = "IG3X0DfwS1P4Xh";
  $dbname = "epiz_30600377_pragati_engineering_college_login2";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
