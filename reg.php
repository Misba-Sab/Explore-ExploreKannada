<?php

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user_id=$_POST['user_id'];
    $username=$_POST['username'];
    $email_id=$_POST['email_id'];
    $password=$_POST['psw'];

    $sql="INSERT INTO users (user_id, username, email_id, psw) 
	VALUES ( '$user_id' ,'$username', '$email_id', '$password');";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Data inserted successfully";
        header('location:homepage.html');
    }
    else
    {
        die(mysqli_error($con));
    }

}
?>