<?php
include "dbconfig.php";
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql="UPDATE `contact` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:dashboard.php");
}
else{
    echo"Error" . mysqli_error($conn);
}
mysqli_close($conn);

?>