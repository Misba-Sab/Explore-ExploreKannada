<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/Register</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- <header>
    <nav>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="">Places</a></li>
            <li><a href="contact_form.html">Contact Us</a></li>
            <li><button id="a"><a href="login.html">Login</a></button></li>           
            </ul>
    </nav>
</header> -->
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn"onclick="register()">Registration</button>
            </div>
            <form id="login" class="input-group" method="post" action="login.php">
                <input type="text" name="username" class="input-field" placeholder="username"required>
                <input type="password" name="psw" class="input-field" placeholder="Password"required>
                <input type="checkbox" class="check-box"><span>Remember Password </span>
                <button type="submit" class="submit-btn" name="users">Login</button>
            </form>
             <form id="register" class="input-group" method="post" action="reg.php">
             <input type="text" name="user_id" class="input-field" placeholder="Give Urself an Id"required>
                <input type="text" name="username" class="input-field" placeholder="username"required>
                <input type="email" name="email_id"class="input-field" placeholder="email_id"required>
                <input type="password" name="psw"class="input-field" placeholder="password"required>
                <input type="checkbox" class="check-box"><span>I agree to the terms and condition </span>
                <input type="submit" class="submit-btn" name="users" value="Register">
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login")
        var y=document.getElementById("register")
        var z=document.getElementById("btn") 

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>
</html>