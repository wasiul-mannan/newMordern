<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	


        $username=$_POST['username'];
        $usertype=$_POST['usertype'];
        $password=$_POST['password'];
        $nidNo=$_POST['nidNo'];
        $dateOfBirth=$_POST['dateOfBirth'];
        $phoneNo=$_POST['phoneNo'];
     

$sql=mysqli_query($con,"insert into user_table(username,usertype,password,nidNo,dateOfBirth,phoneNo) 
                            values('$username','$usertype','$password','$nidNo','$dateOfBirth','$phoneNo')");
if($sql)
{

echo "<script>alert('Status added Successfully');</script>";
header('location:useraccount.php');

}
}
?>





<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="title icon" href="images/title-img.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
    integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->

  <!-------------- Bootstrap css file ----------------->
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/style.css">

  <title>Modern General Hospital</title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="container-fluid">
        <div class="row">
          <!-- sidebar -->
          <div id="app">		
            <?php include('include/sidebar.php');?>
                  <div class="app-content">
          <!-- end of sidebar -->

          <!-- top-nav -->
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
            <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="text-light mb-0">Create User & Active Users</h4>
              </div>
              <div class="col-md-8">
                <ul class="navbar-nav">
                  <li class="nav-item ml-md-auto"><a href="#" class="nav-link text-white p-1" data-toggle="modal"
                      data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg mr-2"></i>Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end of top-nav -->

        </div>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->

  <!-- modal -->
  <div class="modal fade" id="sign-out">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Want to leave?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          Press logout to leave
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
          <button type="button" class="btn btn-danger" onclick="window.location.href='logout.php'" data-dismiss="modal">Logout</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->



  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="mx-1 my-3">
          <section>
            <div class="container-fluid">
              <div class="row">

                <!-- Patient Information Section -->

                <div class="col-lg-6 col-m-12">
                  <div class="row align-items-center mb-4">
                    <div class="col-4">
                      <h5 class="text-center">Create User</h5>
                    </div>
                  </div>

                                <form method="post">
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="username">User Name: </label>
                    <input type="text" class="form-control" name="username" placeholder="Enter usern name">
                  </div>
                </div>

                <div class="form-row">
                 <div class="form-group col-md-8">
                    <label for="usertype">User Type:</label>
                    <select class="form-control" id="usertype" name="usertype">
                      <option>Choose...</option>
                      <option>Manager</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="nidNo">National ID Card No: </label>
                    <input type="text" class="form-control" name="nidNo" placeholder="Enter NID no">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="dateOfBirth">Date Of Birth: </label>
                    <input type="text" class="form-control" name="dateOfBirth" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d-m-Y"); ?>">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="phoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="phoneNo" placeholder="Enter phone number">
                  </div>
                </div>
				
                <button type="submit" name="submit"
                  class="btn btn-primary mb-3 btn-lg patient-admission-btn">Create</button>

              </form>

                </div>
                <!-- End of Patient Information Section -->

                <!-- Payment History -->
                <div class="col-lg-6 col-m-12">
                  <h4 class="text-center mb-3">Active Users</h4>

                  <div id="receipt">
                    <table class="table table-bordered table-dark text-center">
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">User type</th>
                        <th class="text-center">NID No</th>
                        <th class="text-center">Date Of Birth</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Action</th>
                      </tr>
<?php
if(isset($_GET['delet']))
{
        mysqli_query($con,"delete from user_table where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}
$cnt=1;
$ret=mysqli_query($con,"select * from user_table ");
while ($row=mysqli_fetch_array($ret)) {
?>                     
                      <tr>
                        <td class="text-center"><?php echo $cnt; ?></td>
                        <td class="text-center"><?php  echo $row['username'];?></td>
                        <td class="text-center"><?php  echo $row['usertype'];?></td>
                        <td class="text-center"><?php  echo $row['nidNo'];?></td>
                        <td class="text-center"><?php  echo $row['dateOfBirth'];?></td>
                        <td class="text-center"><?php  echo $row['phoneNo'];?></td>
                        <td class="text-center"><a href="useraccount.php?id=<?php echo $row['id']?>&delet=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                      </tr>
<?php
$cnt=$cnt+1;
}

?>
                    </table>
                  </div>
                </div>
                <!-- End of Payment History -->

              </div>
            </div>
          </section>
        </div>

        <!-- End of Advance Payment -->


      </div>
    </div>
  </div>


  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script> -->

  <!--------------- JavaScript file ------------------>
  <script src="./js/jquery-3.4.1.slim.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <!-----x--------- JavaScript file --------x--------->

  <script src="script.js"></script>


</body>

</html>