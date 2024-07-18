<?php

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];

    $sql="INSERT INTO contact (id,fname, lname, email, phone,feedback) 
	VALUES ( NULL,'$fname' ,'$lname', '$email', '$phone','$feedback');";

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