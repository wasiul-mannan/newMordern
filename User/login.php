<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM user_table WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="index.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
	// For stroing log if user login unsuccessfull
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Modern Login Page</title>
</head>
<bo>
    <div class="container">
        <div class="left-section">
            <div class="icon">
                <img src="images/logoicon.png" alt="Hospital Logo" width="360" height="80">
            </div>
            <div class="header">
                <h1 class="animation a1">Login Page</h1>
                <h4 class="animation a2">Log in for entering admin dashboard</h4>
            </div>
            <div class="form">
                <form method="post">
                    <input type="text" name="username" placeholder="Username" class="form-field animation a3">
                    <input type="password" name="password" placeholder="Password" class="form-field animation a4">
                    <p class="animation a5"><a href="reset.php">Forgot Password</a></p>
                    <button class="animation a6" type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
        <div class="right-section">
            
        </div>

    </div>
</bo