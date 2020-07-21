
<?php
session_start();
//error_reporting(0);
include('include/config.php');
//include('include/checklogin.php');
//check_login();

if(isset($_POST['submit'])){

    $nidNo=$_POST['nidNo'];
    $password=$_POST['password'];

    $ret=mysqli_query($con,"SELECT * FROM user_table WHERE nidNo='".$_POST['nidNo']."' and dateOfBirth='".$_POST['dateOfBirth']."' and phoneNo='".$_POST['phoneNo']."' ");
    $num=mysqli_fetch_array($ret);
    if($num>0){
        $ret1=mysqli_query($con,"update user_table set password='$password' where nidNo ='$nidNo' ");
       
        if($ret1){
            echo "<script>alert('Status added Successfully');</script>";
            header('location:login.php');

        }
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
<body>
    <div class="container">
        <div class="left-section">
            <div class="icon">
                <img src="images/logoicon.png" alt="Hospital Logo" width="360" height="80">
            </div>
            <div class="header">
                <h1 class="animation a1">Reset Password!</h1>
                <h4 class="animation a2">Log in for entering your membership dashboard</h4>
            </div>
            <div class="form">
                <form method="post">
                    <input type="text" name="nidNo" placeholder="Enter NID No" class="form-field animation a3">
                    <input type="text" name="dateOfBirth" placeholder="Enter Date Of Birth(d-m-y)" class="form-field animation a4">
                    <input type="text" name="phoneNo" placeholder="Enter Phone No" class="form-field animation a5">
                    <input type="password" name="password" placeholder="New Password" class="form-field animation a6">
                    <input type="password" name="" placeholder="Confirm New Password" class="form-field animation a7">
                    <p class="animation a6"><a href="login.php">Back to Login Page</a></p>
                    <button class="animation a7" type="submit" name="submit">RESET PASSWORD</button>
                </form>
            </div>
        </div>
        <div class="right-section">
            
        </div>

    </div>
</body>
</html>