<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	


$hosCabinName=$_POST['hosCabinName'];
$hosLocation=$_POST['hosLocation'];
$hosCabinClass=$_POST['hosCabinClass'];
$hosCabinStatus="Free";

$sql=mysqli_query($con,"insert into cabin(hosCabinName,hosLocation,hosCabinClass,hosCabinStatus) 
                                    values('$hosCabinName','$hosLocation','$hosCabinClass','$hosCabinStatus')");
if($sql)
{
echo "<script>alert('Status added Successfully');</script>";
header('location:cabinwordDetails.php');

}
}


if(isset($_POST['confirm']))
{	


$hosWordName=$_POST['hosWordName'];
$hosWordBed=$_POST['hosWordBed'];
$hosWordLocation=$_POST['hosWordLocation'];
$hosWordClass=$_POST['hosWordClass'];
$hosWordStatus="Free";

$sql=mysqli_query($con,"insert into word(hosWordName,hosWordBed,hosWordLocation,hosWordClass,hosWordStatus) 
                                    values('$hosWordName','$hosWordBed','$hosWordLocation','$hosWordClass','$hosWordStatus')");
if($sql)
{
echo "<script>alert('Status added Successfully');</script>";
header('location:cabinwordDetails.php');

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

  <title>Modern Hospital</title>
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
                <h4 class="text-light mb-0">Cabin/Word Information</h4>
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
    <div class="row mt-5 mb-3">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="mx-1 mt-3">
          <section>
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-6">
                  <h4 class="text-center mb-3">Cabin Section</h4>
                  <form method="post">
                    <div class="form-row">
                      <div class="form-group col-6">
                        <label for="hosCabinName">Cabin Name:</label>
                        <input type="text" class="form-control" name="hosCabinName" placeholder="Enter cabin name">
                      </div>
                      <div class="form-group col-6">
                        <label for="hosLocation">Location:</label>
                        <select class="form-control" id="hosLocation" name="hosLocation">
                          <option>Select...</option>
                          <option>1st Floor</option>
                          <option>2nd Floor</option>
                          <option>3rd Floor</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-6">
                        <label for="hosCabinClass">Class:</label>
                        <select class="form-control" id="hosCabinClass" name="hosCabinClass">
                          <option>Select...</option>
                          <option>1st Class</option>
                          <option>2nd Class</option>
                          <option>3rd Class</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row justify-content-center">
                      <div class="form-group mt-3">
                        <button class="btn btn-info btn-lg rounded-0 col-lg-12" type="submit" name="submit">Add Cabin</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-xl-6">
                  <h4 class="text-center mb-3">Word Sectionn</h4>
                  <form method="post">
                    <div class="form-row">
                      <div class="form-group col-6">
                        <label for="hosWordName">Word Name:</label>
                        <input type="text" class="form-control" name="hosWordName" placeholder="Enter word name">
                      </div>
                      <div class="form-group col-6">
                        <label for="hosWordBed">Bed:</label>
                        <select class="form-control" id="hosWordBed" name="hosWordBed">
                          <option>Select...</option>
                          <option>Bed-1</option>
                          <option>Bed-2</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-6">
                        <label for="hosWordLocation">Location:</label>
                        <select class="form-control" id="hosWordLocation" name="hosWordLocation">
                          <option>Select...</option>
                          <option>1st Floor</option>
                          <option>2nd Floor</option>
                          <option>3rd Floor</option>
                        </select>
                      </div>
                      <div class="form-group col-6">
                        <label for="hosWordClass">Class:</label>
                        <select class="form-control" id="hosWordClass" name="hosWordClass">
                          <option>Select...</option>
                          <option>General</option>
                          <option>Economic</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row justify-content-center">
                      <div class="form-group mt-3">
                        <button class="btn btn-info btn-lg rounded-0 col-lg-12" type="confirm" name="confirm">Add Word</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>


  <!-- table -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="row align-items-center">
            <div class="col-12">
              <h4>Cabin Details: </h4>
              <table class="table table-dark table-hover text-center">
                <thead>
                  <tr class="text-muted">
                    <th>Cabin</th>
                    <th>Location</th>
                    <th>Class</th>
                    <th>Status</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
<?php

if(isset($_GET['delet']))
{
        mysqli_query($con,"delete from cabin where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}

$ret=mysqli_query($con,"select * from cabin ");
while ($row=mysqli_fetch_array($ret)) {
?>
                  <tr>
                    <th><?php  echo $row['hosCabinName'];?></th>
                    <td><?php  echo $row['hosLocation'];?></td>
                    <td><?php  echo $row['hosCabinClass'];?></td>
                    <td><?php  echo $row['hosCabinStatus'];?></td>
                    <td><a href="cabinwordDetails.php?id=<?php echo $row['id']?>&delet=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                  </tr>
<?php
}

?>
                </tbody>
              </table>
            </div>
            <div class="col-12 mt-2">
              <h4>Word Details:</h4>
              <table class="table table-dark table-hover text-center">
                <thead>
                  <tr class="text-muted">
                    <th>Word</th>
                    <th>Bed</th>
                    <th>Location</th>
                    <th>Class</th>
                    <th>Status</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
<?php

if(isset($_GET['del']))
{
        mysqli_query($con,"delete from word where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}

$ret=mysqli_query($con,"select * from word ");
while ($row=mysqli_fetch_array($ret)) {
?>
                  <tr>
                    <th><?php  echo $row['hosWordName'];?></th>
                    <td><?php  echo $row['hosWordBed'];?></td>
                    <td><?php  echo $row['hosWordLocation'];?></td>
                    <td><?php  echo $row['hosWordClass'];?></td>
                    <td><?php  echo $row['hosWordStatus'];?></td>
                    <td><a href="cabinwordDetails.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                  </tr>
<?php
}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end of table -->



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