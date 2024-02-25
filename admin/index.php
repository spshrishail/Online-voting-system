<?php
session_start();
if(isset($_SESSION['admin'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Voting System</title>
    <?php include 'includes/header.php'; ?>
	<style>:root {
    --primary: #1363C6;
    --secondary: #15ACE1;
    --light: #F4F7FE;
    --dark: #14183E;
}
        .navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}
.logo{
    color: white;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
.menu{
    width: 400px;
    float: right;
    height: 70px;
    
}
ul{
    float: left;
    display: flex;
    justify-content: left;
    align-items: left;
}
ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}
ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
ul li a:hover{
    color: #ff7200;
}
    </style>
</head>
<body style="background-color: blue;">
<div class="navbar">
            <div class="icon">
                <h2 class="logo">Digi.OVS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="../index1.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="index.php">Admin</a></li>
                </ul>
            </div>

           

        </div> 
    <div class="login-box">
        <div class="login-logo">
            <b>Voting System</b>
        </div>
        
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            
            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if(isset($_SESSION['error'])){
            echo "
                <div class='callout callout-danger text-center mt20'>
                    <p>".$_SESSION['error']."</p> 
                </div>
            ";
            unset($_SESSION['error']);
        }
        ?>
    </div>
    
    <?php include 'includes/scripts.php' ?>
</body>
</html>
