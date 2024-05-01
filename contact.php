<?php
include "dbconfig.php";

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql="INSERT INTO `contact` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone')";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:contact.html");
}
else{
    echo "Failed" . mysqli_error($conn);
}
mysqli_close($conn);
?>