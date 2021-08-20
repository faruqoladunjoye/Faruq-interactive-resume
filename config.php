<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_dbname = "resume";


$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_dbname);

if(!$conn){
    die("Could not connect to database." . mysqli_connect_error());
}

?>