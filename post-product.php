<?php
// $email=$_GET['email'];
// $password=$_GET['password'];
// echo"Hey your Email is $email and password is $password";
$date=date("y-m-d");
$expiryDate=$_GET["expirydate"];
$name=$_GET["Name"];
$imageurl=$_GET["imageurl"];
$conn=mysqli_connect("localhost","root","bishan44","hungry_hippo");
$sql="INSERT INTO foods(name,expiryDate,imageurl)VALUES ('$name','$expiryDate','$imageurl')";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("dieeeee");
}else{
    echo"insertred";
}
header("location:/");
?>