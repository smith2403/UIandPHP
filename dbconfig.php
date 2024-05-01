<?php
$host="localhost";
$username="root";
$pass="";
$db="SDAC";

$conn = mysqli_connect($host,$username,$pass,$db);

if(!$conn){
    echo "Not Connected" . mysqli_connect_error();
}
?>