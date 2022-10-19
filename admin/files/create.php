<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	include "../../database/config.php";
	$username=$_POST["username"];
	$password=$_POST["password"];
	//$enc_password=hash('sha256',$password,false);
	// $sql="INSERT INTO teachers VALUES ('$username' , '$password')";
    $sql = "INSERT INTO `teachers` (`email`, `password`) VALUES ('$username','$password')";
    if(mysqli_query($conn, $sql)){
        echo "success";
    }
    else{
        echo "fail";
    }
	
}
?>