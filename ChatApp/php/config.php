<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:studentsconnectedin.database.windows.net,1433; Database = pragati_engineering_college_login", "zameel", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "zameel", "pwd" => "ali$282003", "Database" => "pragati_engineering_college_login", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:studentsconnectedin.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
