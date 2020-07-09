<?php
session_start();
//error_reporting(0);
include('include/config.php');
//include('include/checklogin.php');
//check_login();

if(isset($_POST['submit']))
{	


        $d_name=$_POST['d_name'];
        $d_blood=$_POST['d_blood'];
        $d_date_of_birth=$_POST['d_date_of_birth'];
        $d_gender=$_POST['d_gender'];
        $d_father_name=$_POST['d_father_name'];
        $d_mother_name=$_POST['d_mother_name'];
        $d_phone_number=$_POST['d_phone_number'];
        $dRegistrationid=$_POST['dRegistrationid'];
        $d_nid_no=$_POST['d_nid_no'];
        $d_specialty=$_POST['d_specialty'];
        $d_licence_no=$_POST['d_licence_no'];
        $dPractiseRoom=$_POST['dPractiseRoom'];
        $dCategory=$_POST['dCategory'];
        $d_remarks=$_POST['d_remarks'];
        $d_joining_date=$_POST['d_joining_date'];
        $dVillage=$_POST['dVillage'];
        $dPostOffice=$_POST['dPostOffice'];
        $dThana=$_POST['dThana'];
        $dUpagilla=$_POST['dUpagilla'];
        $dDistrict=$_POST['dDistrict'];
        $dStatus="Active";
        

$sql=mysqli_query($con,"insert into doctor(d_name,d_blood,d_date_of_birth,d_gender,d_father_name,d_mother_name,d_phone_number,dRegistrationid,d_nid_no,d_specialty,d_licence_no,dPractiseRoom,dCategory,d_remarks,d_joining_date,dVillage,dPostOffice,dThana,dUpagilla,dDistrict,dStatus) 
                            values('$d_name','$d_blood','$d_date_of_birth','$d_gender','$d_father_name','$d_mother_name','$d_phone_number','$dRegistrationid','$d_nid_no','$d_specialty','$d_licence_no','$dPractiseRoom','$dCategory','$d_remarks','$d_joining_date','$dVillage','$dPostOffice','$dThana','$dUpagilla','$dDistrict','$dStatus')");
if($sql)
{

echo "<script>alert('Status added Successfully');</script>";
header('location:doctor.php');

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
                <h4 class="text-light mb-0">Doctor Details</h4>
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->


  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row pt-md-5">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="list-of-doctors-tab" data-toggle="tab" href="#list-of-doctors" role="tab"
                aria-controls="list-of-doctors" aria-selected="false">List of Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="doctor-profile-tab" data-toggle="tab" href="#doctor-profile" role="tab"
                aria-controls="doctor-profile" aria-selected="false">Doctors Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="doctor-admission-tab" data-toggle="tab" href="#doctor-admission" role="tab"
                aria-controls="doctor-admission" aria-selected="true">Doctors Registraton</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

        <div class="tab-content" id="myTabContent">

          <!-- list-of-doctors Tab -->
          <div class="tab-pane fade show active" id="list-of-doctors" role="tabpanel"
            aria-labelledby="list-of-doctors-tab">

            <div class="mx-1 my-3">
              <h3 class="text-center mb-3">List of Doctors</h3>

              <div class="row">
                <!-- <div class="col-xl-12 mb-3 align-items-center"> -->

<?php
if(isset($_GET['del']))
{
        mysqli_query($con,"update doctor set dStatus='Inactive' where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}


if(isset($_POST['set']))
{	
  $dRegistrationid=$_POST['dRegistrationid'];

  $ret1=mysqli_query($con,"select * from doctor where dStatus='Active' and dRegistrationid='$dRegistrationid' or d_name='$dRegistrationid'");
}else{
  $ret1=mysqli_query($con,"select * from doctor where dStatus='Active'");
}
?>

                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2" method="post">
                    <input class="form-control rounded-0" type="search" name="dRegistrationid" placeholder="Enter DocID / Name "
                      aria-label="Search">
                    <button class="btn btn-primary my-0 my-sm-0 mr-4 rounded-0" type="set" name="set">Search</button>
                  </form>
                </div>
                
                <!-- </div> -->
              </div>

              <table class="table table-bordered table-dark text-center">
                <thead>
                  <tr class="text-muted">
                    <th>#</th>
                    <th>DocID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Practice Room</th>
                    <th>Category</th>
                    <th>Address</th>
                    <th>Action</th>
                    <!--Combination of Village and District-->
                  </tr>
                </thead>
                <tbody>
<?php

  $cnt=1;

  
  while ($rows=mysqli_fetch_array($ret1)) {

    $dRegistrationid=$rows['dRegistrationid'];
    $d_name=$rows['d_name'];
    $d_gender=$rows['d_gender'];
    $d_phone_number=$rows['d_phone_number'];
    $d_specialty=$rows['d_specialty'];
    $dPractiseRoom=$rows['dPractiseRoom'];
    $dCategory=$rows['dCategory'];
    $dVillage=$rows['dVillage'];
    $dThana=$rows['dThana'];
    $dUpagilla=$rows['dUpagilla'];
?>                  
                  <tr>
                    <th><?php  echo $cnt;?></th>
                    <td><?php  echo $dRegistrationid;?></td>
                    <td><?php  echo $d_name;?></td>
                    <td><?php  echo $d_gender;?></td>
                    <td><?php  echo $d_phone_number;?></td>
                    <td><?php  echo $d_specialty;?></td>
                    <td><?php  echo $dPractiseRoom;?></td>
                    <td><?php  echo $dCategory;?></td>
                    <td><?php  echo $dVillage;?>, <?php  echo $dThana;?>, <?php  echo $dUpagilla;?></td>
                    <td><a href="doctor.php?id=<?php echo $rows['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                  </tr>
<?php
$cnt=1+$cnt;
  }

  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of list-of-doctors Tab -->

          <!-- Doctor Profile Tab -->

          <?php

$dRegistrationid=null;
$d_name=null;
$d_gender=null;
$d_date_of_birth=null;
$d_blood=null;
$d_phone_number=null;
$d_father_name=null;
$d_mother_name=null;
$dVillage=null;
$dThana=null;
$dUpagilla=null;
$d_licence_no=null;
$d_nid_no=null;
$d_specialty=null;
$d_joining_date=null;
$dPractiseRoom=null;
$dCategory=null;
$d_remarks=null;

if(isset($_POST['confirm'])){

$dRegistrationid=$_POST['dRegistrationid'];

$_SESSION['varname']=$dRegistrationid;

$ret=mysqli_query($con,"select * from doctor where dRegistrationid='$dRegistrationid' ");
$row=mysqli_fetch_array($ret);


$d_name=$row['d_name'];
$d_gender=$row['d_gender'];
$d_date_of_birth=$row['d_date_of_birth'];
$d_blood=$row['d_blood'];
$d_phone_number=$row['d_phone_number'];
$d_father_name=$row['d_father_name'];
$d_mother_name=$row['d_mother_name'];
$dVillage=$row['dVillage'];
$dThana=$row['dThana'];
$dUpagilla=$row['dUpagilla'];
$dRegistrationid=$row['dRegistrationid'];
$d_licence_no=$row['d_licence_no'];
$d_nid_no=$row['d_nid_no'];
$d_specialty=$row['d_specialty'];
$d_joining_date=$row['d_joining_date'];
$dPractiseRoom=$row['dPractiseRoom'];
$dCategory=$row['dCategory'];
$d_remarks=$row['d_remarks'];

}

?>


          <div class="tab-pane fade" id="doctor-profile" role="tabpanel" aria-labelledby="doctor-profile-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">

                  <div class="row align-items-center">
                    <div class="col-8 mb-4 mb-xl-0">
                      <form class="form-inline mb-2" method="post">
                        <h6 class="text-center mt-2 col-lg-5">Doctor Registration ID:</h6>
                        <input class="form-control rounded-0 col-lg-4" type="dRegistrationid" name="dRegistrationid" placeholder="Enter RegID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="confirm" name="confirm">Search</button>
                      </form>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-12">
                      <h5 class="my-3">Doctor Information:</h5>
                      <hr>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-3">
                            <label for="proDocName">Doctor Name: </label>
                            <input type="text" class="form-control" name="proDocName" value="<?php  echo $d_name;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocGender">Gender: </label>
                            <input type="text" class="form-control" name="proDocGender" value="<?php  echo $d_gender;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocDOB">Date of Birth: </label>
                            <input type="text" class="form-control" name="proDocDOB" value="<?php  echo $d_date_of_birth;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocBloodGroup">Blood Group: </label>
                            <input type="text" class="form-control" name="proDocBloodGroup" value="<?php  echo $d_blood;?>" disabled="true">
                          </div>
                          <div class="form-group col-3">
                            <label for="proDocPhoneNo">Phone Number: </label>
                            <input type="text" class="form-control" name="proDocPhoneNo" value="<?php  echo $d_phone_number;?>" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocFatherName">Father's Name: </label>
                            <input type="text" class="form-control" name="proDocFatherName" value="<?php  echo $d_father_name;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocMotherName">Mother's Name: </label>
                            <input type="text" class="form-control" name="proDocMotherName" value="<?php  echo $d_mother_name;?>" disabled="true">
                          </div>

                          <!-- Address is the combination of Village, PostOffice and District -->
                          <div class="form-group col-md-6">
                            <label for="proDocAddress">Address: </label>
                            <input type="text" class="form-control" name="proDocAddress" value="<?php  echo $dVillage;?>,<?php  echo $dThana;?>,<?php  echo $dUpagilla;?>" disabled="true">
                          </div>
                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocRegID">Registration ID: </label>
                            <input type="text" class="form-control" name="proDocRegID" value="<?php  echo $dRegistrationid;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="d_licence_no">Licence No: </label>
                            <input type="text" class="form-control" name="d_licence_no" value="<?php  echo $d_licence_no;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocNID">NID No: </label>
                            <input type="text" class="form-control" name="proDocNID" value="<?php  echo $d_nid_no;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocSpeciality">Speciality: </label>
                            <input type="text" class="form-control" name="proDocSpeciality" value="<?php  echo $d_specialty;?>" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocJoining">Joining Date: </label>
                            <input type="text" class="form-control" name="proDocJoining" value="<?php  echo $d_joining_date;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocPracticeRoom">Practice Room No: </label>
                            <input type="text" class="form-control" name="proDocPracticeRoom" value="<?php  echo $dPractiseRoom;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocCategory">Category: </label>
                            <input type="text" class="form-control" name="proDocCategory" value="<?php  echo $dCategory;?>" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-9">
                            <label for="proDocRemarks">Remarks (Degree/Details):</label>
                            <textarea type="text" class="form-control" id="proDocRemarks" placeholder="<?php  echo $d_remarks;?>" disabled="true"></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <hr>
                  <div class="row align-items-center">
                    <div class="col-12">
                      <div class="row mt-2">
                        <div class="col-xl-6 mb-3 align-items-center">
                          <h5 class="ml-md-auto">Salary History:</h5>
                        </div>
                        <div class="col-xl-6 mb-3 align-items-center">
                          <form class="form-inline">
                            <select class="form-control col-xl-4" id="docMonthSelect">
                              <option>Choose Month...</option>
                              <option>January</option>
                              <option>February</option>
                              <option>March</option>
                              <option>April</option>
                              <option>May</option>
                              <option>June</option>
                              <option>July</option>
                              <option>August</option>
                              <option>September</option>
                              <option>October</option>
                              <option>November</option>
                              <option>December</option>
                            </select>
                            <form class="form-inline">
                              <input class="form-control rounded-0" type="search" placeholder="Enter Year"
                                aria-label="Search">
                              <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="submit">Search</button>
                            </form>
                          </form>
                        </div>
                      </div>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>DocID</th>
                            <th>Name</th>
                            <th>Speciality</th>
                            <th>Category</th>
                            <th>Salary</th>
                            <th>Bonus</th>
                            <th>Total</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Paid At</th>
                            <!--Combination of Village and District-->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>DOC-001</td>
                            <td>Robiul</td>
                            <td>Cardiologist</td>
                            <td>Visiting</td>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                          <tr>
                            <td>DOC-002</td>
                            <td>Muniat</td>
                            <td>Cardiologist</td>
                            <td>Visiting</td>
                            <td>45000</td>
                            <td>0</td>
                            <td>45000</td>
                            <td>March</td>
                            <td>2020</td>
                            <td>21-04-2020, 13:07</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <!-- End of Doctor Profile Tab -->

          <!-- Doctor Admission Form Tab -->
          <div class="tab-pane fade" id="doctor-admission" role="tabpanel" aria-labelledby="doctor-admission-tab">

            <div class="mx-3 my-3">
              <h4 class="text-center">Registration Form</h4>
              <hr>
              <form method="post">
                <div class="form-row">
                  <div class="form-group col-4">
                    <label for="d_name">Doctor Name: </label>
                    <input type="text" class="form-control" name="d_name" placeholder="Enter name">
                  </div>
                  <div class="form-group col-2">
                    <label for="d_blood">Blood Group:</label>
                    <select class="form-control" id="d_blood" name="d_blood">
                      <option>Choose...</option>
                      <option>A+</option>
                      <option>O+</option>
                      <option>B+</option>
                      <option>AB+</option>
                      <option>A-</option>
                      <option>O-</option>
                      <option>B-</option>
                      <option>AB-</option>
                    </select>
                  </div>
                  <div class="form-group col-2">
                    <label for="d_date_of_birth">Date of Birth: </label>
                    <input type="text" class="form-control" name="d_date_of_birth" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d - m - Y "); ?>">
                  </div>
                  <div class="form-group col-4">
                    <label for="d_gender">Gender: </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="d_gender" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="d_gender" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="d_gender" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="d_father_name">Father's Name: </label>
                    <input type="text" class="form-control" name="d_father_name" placeholder="Enter father name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="d_mother_name">Mother's Name: </label>
                    <input type="text" class="form-control" name="d_mother_name" placeholder="Enter mother name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPhoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="d_phone_number" placeholder="Enter phone no">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docRegistrationID">Doctor Registration ID: </label>
                    <input type="text" class="form-control" name="dRegistrationid" placeholder="Enter doctor registration id">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docNID">Doctor NID: </label>
                    <input type="text" class="form-control" name="d_nid_no" placeholder="Enter nid no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docSpeciality">Doctor Speciality:</label>
                    <select class="form-control" id="d_specialty" name="d_specialty">
                      <option>Choose...</option>
                      <option>Neurologists</option>
                      <option>Cardiologists</option>
                    </select>
                  </div>


                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docLicence">Licence No: </label>
                    <input type="text" class="form-control" name="d_licence_no" placeholder="Enter licence no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPracticeRoom">Practice Room No: </label>
                    <input type="text" class="form-control" name="dPractiseRoom" placeholder="Enter practice room no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docCategory">Doctor Category:</label>
                    <select class="form-control" id="docCategory" name="dCategory">
                      <option>Choose...</option>
                      <option>Permanent</option>
                      <option>Visiting</option>
                    </select>
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="docRemarks">Remarks:</label>
                    <textarea class="form-control" id="d_remarks" name="d_remarks" placeholder="Enter degree / details"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docJoining">Joining Date: </label>
                    <input type="text" class="form-control" name="d_joining_date" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d - m - Y "); ?>">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docVillage">Village: </label>
                    <input type="text" class="form-control" name="dVillage" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPostOffice">Post Office: </label>
                    <input type="text" class="form-control" name="dPostOffice" placeholder="Enter post office">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docThana">Thana: </label>
                    <input type="text" class="form-control" name="dThana" placeholder="Enter thana">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docUpagilla">Upazilla: </label>
                    <input type="text" class="form-control" name="dUpagilla" placeholder="Enter upazilla">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docDistrict">District: </label>
                    <input type="text" class="form-control" name="dDistrict" placeholder="Enter district">
                  </div>
                </div>

                <hr>

                <button type="submit" name="submit" class="btn btn-primary mb-3 btn-lg doc-admission-btn">Register</button>

              </form>

            </div>

          </div>
          <!-- End of Doctor Admission Form Tab -->

        </div>
      </div>
    </div>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     -->
  <!--------------- JavaScript file ------------------>
  <script src="./js/jquery-3.4.1.slim.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <!-----x--------- JavaScript file --------x--------->

  <script src="script.js"></script>


</body>

</html>