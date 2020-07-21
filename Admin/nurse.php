<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['Submit']))
{	


        $n_name=$_POST['n_name'];
        $n_blood_group=$_POST['n_blood_group'];
        $n_date_of_birth=$_POST['n_date_of_birth'];
        $n_gender=$_POST['n_gender'];
        $n_father_name=$_POST['n_father_name'];
        $n_mother_name=$_POST['n_mother_name'];
        $n_phone_number=$_POST['n_phone_number'];
        $nRegiNo=$_POST['nRegiNo'];
        $n_nid_no=$_POST['n_nid_no'];
        $nurse_type=$_POST['nurse_type'];
        $n_joining_date=$_POST['n_joining_date'];
        $nAppointRoom=$_POST['nAppointRoom'];
        $nurse_shift=$_POST['nurse_shift'];
        $n_remarks=$_POST['n_remarks'];
        $nVillage=$_POST['nVillage'];
        $nPostOffice=$_POST['nPostOffice'];
        $nThana=$_POST['nThana'];
        $nUpazilla=$_POST['nUpazilla'];
        $nDistrict=$_POST['nDistrict'];
        $nStatus="Active";
        

$sql=mysqli_query($con,"insert into nurse(n_name,n_blood_group,n_date_of_birth,n_gender,n_father_name,n_mother_name,n_phone_number,nRegiNo,n_nid_no,nurse_type,n_joining_date,nAppointRoom,nurse_shift,n_remarks,nVillage,nPostOffice,nThana,nUpazilla,nDistrict,nStatus) 
                            values('$n_name','$n_blood_group','$n_date_of_birth','$n_gender','$n_father_name','$n_mother_name','$n_phone_number','$nRegiNo','$n_nid_no','$nurse_type','$n_joining_date','$nAppointRoom','$nurse_shift','$n_remarks','$nVillage','$nPostOffice','$nThana','$nUpazilla','$nDistrict','$nStatus')");
if($sql)
{

echo "<script>alert('Status added Successfully');</script>";
header('location:nurse.php');

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
                <h4 class="text-light mb-0">Nurse Details</h4>
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
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row pt-md-5">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="list-of-nurses-tab" data-toggle="tab" href="#list-of-nurses" role="tab"
                aria-controls="list-of-nurses" aria-selected="false">List of Nurses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nurse-profile-tab" data-toggle="tab" href="#nurse-profile" role="tab"
                aria-controls="nurse-profile" aria-selected="false">Nurses Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nurse-admission-tab" data-toggle="tab" href="#nurse-admission" role="tab"
                aria-controls="nurse-admission" aria-selected="true">Nurses Registraton</a>
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

          <!-- list-of-Nurse Tab -->

<?php
if(isset($_GET['del']))
{
        mysqli_query($con,"update nurse set nStatus='Inactive' where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}


if(isset($_POST['set']))
{	
  $nRegiNo=$_POST['nRegiNo'];

  $ret1=mysqli_query($con,"select * from nurse where nStatus='Active' and nRegiNo='$nRegiNo' or n_name='$nRegiNo'");
}else{
  $ret1=mysqli_query($con,"select * from nurse where nStatus='Active'");
}
?>



          <div class="tab-pane fade show active" id="list-of-nurses" role="tabpanel"
            aria-labelledby="list-of-nurses-tab">

            <div class="mx-1 my-3">
              <h3 class="text-center mb-3">List of Nurses</h3>

              <div class="row">
                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2">
                    <input class="form-control rounded-0" type="search" name="nRegiNo" placeholder="Enter NurseID / Name "
                      aria-label="Search">
                    <button class="btn btn-primary my-0 my-sm-0 mr-4 rounded-0" type="set" name="set">Search</button>
                  </form>
                </div>
              </div>

              <table class="table table-bordered table-dark text-center">
                <thead>
                  <tr class="text-muted">
                    <th>#</th>
                    <th>NurseID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>Appointed</th>
                    <th>Shift</th>
                    <th>Address</th>
                    <!--Combination of Village and District-->
                  </tr>
                </thead>
                <tbody>
                <?php

$cnt=1;


while ($rows=mysqli_fetch_array($ret1)) {

  $nRegiNo=$rows['nRegiNo'];
  $n_name=$rows['n_name'];
  $n_gender=$rows['n_gender'];
  $n_phone_number=$rows['n_phone_number'];
  $nurse_type=$rows['nurse_type'];
  $nAppointRoom=$rows['nAppointRoom'];
  $nurse_shift=$rows['nurse_shift'];
  $nVillage=$rows['nVillage'];
  $nThana=$rows['nThana'];
  $nUpazilla=$rows['nUpazilla'];
?>                  
                <tr>
                  <th><?php  echo $cnt;?></th>
                  <td><?php  echo $nRegiNo;?></td>
                  <td><?php  echo $n_name;?></td>
                  <td><?php  echo $n_gender;?></td>
                  <td><?php  echo $n_phone_number;?></td>
                  <td><?php  echo $nurse_type;?></td>
                  <td><?php  echo $nAppointRoom;?></td>
                  <td><?php  echo $nurse_shift;?></td>
                  <td><?php  echo $nVillage;?>, <?php  echo $nThana;?>, <?php  echo $nUpazilla;?></td>
                  <td><a href="nurse.php?id=<?php echo $rows['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                </tr>
<?php
$cnt=1+$cnt;
}

?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of list-of-Nurse Tab -->

          <!-- Nurse Profile Tab -->


<?php

$nRegiNo=null;
$n_name=null;
$n_gender=null;
$n_date_of_birth=null;
$n_blood_group=null;
$n_phone_number=null;
$n_father_name=null;
$n_mother_name=null;
$nVillage=null;
$nThana=null;
$nUpazilla=null;
$n_nid_no=null;
$nurse_type=null;
$n_joining_date=null;
$nAppointRoom=null;
$nurse_shift=null;
$n_remarks=null;

if(isset($_POST['confirm'])){

$nRegiNo=$_POST['nRegiNo'];

$_SESSION['varname']=$nRegiNo;

$ret=mysqli_query($con,"select * from nurse where nRegiNo='$nRegiNo' ");
$row=mysqli_fetch_array($ret);

$n_name=$row['n_name'];
$n_gender=$row['n_gender'];
$n_date_of_birth=$row['n_date_of_birth'];
$n_blood_group=$row['n_blood_group'];
$n_phone_number=$row['n_phone_number'];
$n_father_name=$row['n_father_name'];
$n_mother_name=$row['n_mother_name'];
$nVillage=$row['nVillage'];
$nThana=$row['nThana'];
$nUpazilla=$row['nUpazilla'];
$n_nid_no=$row['n_nid_no'];
$nurse_type=$row['nurse_type'];
$n_joining_date=$row['n_joining_date'];
$nAppointRoom=$row['nAppointRoom'];
$nurse_shift=$row['nurse_shift'];
$n_remarks=$row['n_remarks'];

}

?>





          <div class="tab-pane fade" id="nurse-profile" role="tabpanel" aria-labelledby="nurse-profile-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">

                  <div class="row align-items-center">
                    <div class="col-8 mb-4 mb-xl-0">
                      <form class="form-inline mb-2" method="post">
                        <h6 class="text-center mt-2 col-lg-5">Nurse Registration ID:</h6>
                        <input class="form-control rounded-0 col-lg-4" type="search" name="nRegiNo" placeholder="Enter RegID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="confirm" name="confirm">Search</button>
                      </form>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-12">
                      <h5 class="my-3">Nurse Information:</h5>
                      <hr>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-3">
                            <label for="proNurName">Nurse Name: </label>
                            <input type="text" class="form-control" name="proNurName" value="<?php  echo $n_name;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proNurGender">Gender: </label>
                            <input type="text" class="form-control" name="proNurGender" value="<?php  echo $n_gender;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proNurDOB">Date of Birth: </label>
                            <input type="text" class="form-control" name="proNurDOB" value="<?php  echo $n_date_of_birth;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proNurBloodGroup">Blood Group: </label>
                            <input type="text" class="form-control" name="proNurBloodGroup" value="<?php  echo $n_blood_group;?>" disabled="true">
                          </div>
                          <div class="form-group col-3">
                            <label for="proNurPhoneNo">Phone Number: </label>
                            <input type="text" class="form-control" name="proNurPhoneNo" value="<?php  echo $n_phone_number;?>" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proNurFatherName">Father's Name: </label>
                            <input type="text" class="form-control" name="proNurFatherName" value="<?php  echo $n_father_name;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proNurMotherName">Mother's Name: </label>
                            <input type="text" class="form-control" name="proNurMotherName" value="<?php  echo $n_mother_name;?>" disabled="true">
                          </div>

                          <!-- Address is the combination of Village, PostOffice and District -->
                          <div class="form-group col-md-6">
                            <label for="proNurAddress">Address: </label>
                            <input type="text" class="form-control" name="proNurAddress" value="<?php  echo $nVillage;?>, <?php  echo $nThana;?>, <?php  echo $nUpazilla;?>" disabled="true">
                          </div>
                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proNurRegID">Registration ID: </label>
                            <input type="text" class="form-control" name="proNurRegID" value="<?php  echo $nRegiNo;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proNurNID">NID No: </label>
                            <input type="text" class="form-control" name="proNurNID" value="<?php  echo $n_nid_no;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proNurType">Nurse Type: </label>
                            <input type="text" class="form-control" name="proNurType" value="<?php  echo $nurse_type;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proNurJoining">Joining Date: </label>
                            <input type="text" class="form-control" name="proNurJoining" value="<?php  echo $n_joining_date;?>" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">

                          <div class="form-group col-md-3">
                            <label for="proNurAppointed">Appointed Room: </label>
                            <input type="text" class="form-control" name="proNurAppointed" value="<?php  echo $nAppointRoom;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proNurShift">Nurse Shift: </label>
                            <input type="text" class="form-control" name="proNurShift" value="<?php  echo $nurse_shift;?>" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-9">
                            <label for="proDocRemarks">Remarks (Degree/Details):</label>
                            <textarea class="form-control" id="proDocRemarks" placeholder="<?php  echo $n_remarks;?>" disabled="true"></textarea>
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
                            <select class="form-control col-xl-4" id="nurseMonthSelect">
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
                            <th>NurseID</th>
                            <th>Name</th>
                            <th>Type</th>
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
                            <td>Nur-001</td>
                            <td>Robiul</td>
                            <td>Head Nurse</td>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                          <tr>
                            <td>Nur-002</td>
                            <td>Muniat</td>
                            <td>Staff Nurse</td>
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
          <!-- End of Nurse Profile Tab -->

          <!-- Nurse Admission Form Tab -->
          <div class="tab-pane fade" id="nurse-admission" role="tabpanel" aria-labelledby="nurse-admission-tab">

            <div class="mx-3 my-3">
              <h4 class="text-center">Registration Form</h4>
              <hr>
              <form method="post">
                <div class="form-row">
                  <div class="form-group col-4">
                    <label for="nurName">Nurse Name: </label>
                    <input type="text" class="form-control" name="n_name" placeholder="Enter name">
                  </div>
                  <div class="form-group col-2">
                    <label for="nurBloodGroup">Blood Group:</label>
                    <select class="form-control" id="n_blood_group" name="n_blood_group">
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
                    <label for="nurDOB">Date of Birth: </label>
                    <input type="text" class="form-control" name="n_date_of_birth" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d - m - Y "); ?>">
                  </div>

                  <div class="form-group col-4">
                    <label for="nurGender">Gender: </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="n_gender" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="n_gender" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="n_gender" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="nurFatherName">Father's Name: </label>
                    <input type="text" class="form-control" name="n_father_name" placeholder="Enter father name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nurMotherName">Mother's Name: </label>
                    <input type="text" class="form-control" name="n_mother_name" placeholder="Enter mother name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurPhoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="n_phone_number" placeholder="Enter phone no.">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="nurRegistrationID">Nurse Registration ID: </label>
                    <input type="text" class="form-control" name="nRegiNo" placeholder="Enter nurse regId">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurNID">Nurse NID: </label>
                    <input type="text" class="form-control" name="n_nid_no" placeholder="Enter NID no">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurSpeciality">Nurse Type:</label>
                    <select class="form-control" id="nurse_type" name="nurse_type">
                      <option>Choose...</option>
                      <option>Head Nurse</option>
                      <option>Sraff Nurse</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="nurJoining">Joining Date: </label>
                    <input type="text" class="form-control" name="n_joining_date" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d - m - Y "); ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurAppointed">Appointed Room: </label>
                    <input type="text" class="form-control" name="nAppointRoom" placeholder="Enter practice room no">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurShift">Nurse Shift:</label>
                    <select class="form-control" id="nurse_shift" name="nurse_shift">
                      <option>Choose...</option>
                      <option>Day</option>
                      <option>Night</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nurRemarks">Remarks:</label>
                    <textarea class="form-control" id="n_remarks" name="n_remarks" placeholder="Enter degree / details"></textarea>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="nurVillage">Village: </label>
                    <input type="text" class="form-control" name="nVillage" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurPostOffice">Post Office: </label>
                    <input type="text" class="form-control" name="nPostOffice" placeholder="Enter post office">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurThana">Thana: </label>
                    <input type="text" class="form-control" name="nThana" placeholder="Enter thana">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="nurUpagilla">Upazilla: </label>
                    <input type="text" class="form-control" name="nUpazilla" placeholder="Enter upazilla">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nurDistrict">District: </label>
                    <input type="text" class="form-control" name="nDistrict" placeholder="Enter district">
                  </div>
                </div>

                <hr>

                <button type="Submit" name="Submit"
                  class="btn btn-primary mb-3 btn-lg nur-admission-btn">Register</button>

              </form>

            </div>

          </div>
          <!-- End of Nurse Admission Form Tab -->

        </div>
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