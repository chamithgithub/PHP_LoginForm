<?php
$serverName = "localhost";
$dbUserName = "chamith";
$dbPassword = "EWB0btXnG9l@R5@m";
$dbName = "php_login";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if (!conn) {
    die("Connection failed :" . mysqli_connect_error());
} else {
    echo "its working";
}
