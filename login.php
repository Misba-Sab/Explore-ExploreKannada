<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "connect.php";
    $username = mysqli_real_escape_string($con, $_POST['username']);
           $password = $_POST['psw'];
   
       echo "$username";
       echo "$password";
   
       if (empty($_POST['username']) || empty($_POST['psw'])) {
           echo '<div class="a">All Fields must be entered.</div>';
           die();
       } else {
           $username = mysqli_real_escape_string($con, $_POST['username']);
           $password = $_POST['psw'];
   
           $sql = "SELECT *  FROM users where username='$username' AND psw='$password'";
           $result = mysqli_query($con, $sql) or die("Query Failed.");
           $row = mysqli_fetch_assoc($result);
           if (empty($row['username']) || empty($row['psw'])) {
               echo "Enter valid username or password";
           } else {
               if ($username == $row['username'] && $password == $row['psw']) {
                   session_start();
                   $_SESSION["psw"] = $_POST['username'];
                   header("Location: homepage.html");
               } else {
                   echo '<div class=>Username and Password are not matched.</div>';
               }
           }
       }
   }


// session_start();
// if (isset($_POST['username'])) {
//     include "connect.php";
//     // $con = mysql_connect('localhost', 'username', 'password', 'login');
//     $username = mysqli_real_escape_string($con, $_POST['username']);
//     $password = mysqli_real_escape_string($con, $_POST['password']);
//     $sql = "select * from user where username='$username' AND password='$password'";
//     $result = mysqli_query($con, $sql);
//     if (mysql_num_rows($result) == 1) {
//         $_SESSION['logged_in'] = true;
//         $_SESSION['username'] = $username;
//         header('location:form.php');
//         exit;
//     } else {
//         echo 'Incorrect login details';
//     }
// }

?>



