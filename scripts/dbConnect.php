<?php 

$hostname= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bluvarddb";

if ($conn = mysqli_connect($hostname,$dbusername,$dbpassword,$dbname)){
    // connection successfully
}else{
    die(mysqli_connect_error());
}

?>