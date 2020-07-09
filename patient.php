<?php
session_start();
//error_reporting(0);
include('include/config.php');
//include('include/checklogin.php');
//check_login();

if(isset($_POST['submit']))
{	


        $pName=$_POST['pName'];
        $pAge=$_POST['pAge'];
        $pBloodGroup=$_POST['pBloodGroup'];
        $pSex=$_POST['pSex'];
        $pCareOf=$_POST['pCareOf'];
        $pMotherName=$_POST['pMotherName'];
        $pPhoneNo=$_POST['pPhoneNo'];
        $pVillage=$_POST['pVillage'];
        $pPostOffice=$_POST['pPostOffice'];
        $pThana=$_POST['pThana'];
        $pUpagilla=$_POST['pUpagilla'];
        $pDistrict=$_POST['pDistrict'];
        $regiNo=$_POST['regiNo'];
        $pRefferedDoctor=$_POST['pRefferedDoctor'];
        $pCabinNo=$_POST['pCabinNo'];
        $pWordNo=$_POST['pWordNo'];
        $pBedNo=$_POST['pBedNo'];
        $patientstatus="Active";

$sql=mysqli_query($con,"insert into patient(pName,pAge,pBloodGroup,pSex,pCareOf,pMotherName,pPhoneNo,pVillage,pThana,pUpagilla,pDistrict,regiNo,pRefferedDoctor,pCabinNo,pWordNo,pBedNo,patientstatus) 
                            values('$pName','$pAge','$pBloodGroup','$pSex','$pCareOf','$pMotherName','$pPhoneNo','$pVillage','$pThana','$pUpagilla','$pDistrict','$regiNo','$pRefferedDoctor','$pCabinNo','$pWordNo','$pBedNo','$patientstatus')");
if($sql)
{

  $pDepositMoney="0";
  $sql=mysqli_query($con,"insert into patientadpayment(regiNo,pDepositMoney) values('$regiNo','$pDepositMoney')");


echo "<script>alert('Status added Successfully');</script>";
header('location:index.php');

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
                <h4 class="text-light mb-0">Patient Details</h4>
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
              <a class="nav-link active" id="patient-admission-tab" data-toggle="tab" href="#patient-admission"
                role="tab" aria-controls="patient-admission" aria-selected="true">Patient Admission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="advance-payment-tab" data-toggle="tab" href="#advance-payment" role="tab"
                aria-controls="advance-payment" aria-selected="false">Advance Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active-patient-tab" data-toggle="tab" href="#active-patient" role="tab"
                aria-controls="active-patient" aria-selected="false">Active Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="palient-profile-tab" data-toggle="tab" href="#patient-profile" role="tab"
                aria-controls="patient-profile" aria-selected="false">Patient Profile</a>
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

          <!-- Admission Form -->
          <div class="tab-pane fade show active" id="patient-admission" role="tabpanel"
            aria-labelledby="patient-admission-tab">

            <div class="mx-5 my-3">
              <h4 class="text-center">Admission Form</h4>
              <hr>
              <form method="post">
                <div class="form-row">
                  <div class="form-group col-4">
                    <label for="pName">Patient Name: </label>
                    <input type="text" class="form-control" name="pName" placeholder="Enter name">
                  </div>
                  <div class="form-group col-2">
                    <label for="pAge">Age: </label>
                    <input type="number" class="form-control" name="pAge" placeholder="Enter age">
                  </div>
                  <div class="form-group col-2">
                    <label for="pBloodGroup">Blood Group:</label>
                    <select class="form-control" id="pBloodGroup" name="pBloodGroup">
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
                  <div class="form-group col-md-4">
                    <label for="pSex">Gender: </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pSex" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pSex" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pSex" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="pCareOf">Father's / Husband's Name: </label>
                    <input type="text" class="form-control" name="pCareOf" placeholder="Enter father name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pMotherName">Mother's Name: </label>
                    <input type="text" class="form-control" name="pMotherName" placeholder="Enter mother name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pPhoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="pPhoneNo" placeholder="Enter phone no.">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="pVillage">Village: </label>
                    <input type="text" class="form-control" name="pVillage" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pPostOffice">Post Office: </label>
                    <input type="text" class="form-control" name="pPostOffice" placeholder="Enter post office">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pThana">Thana: </label>
                    <input type="text" class="form-control" name="pThana" placeholder="Enter thana">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="pUpagilla">Upazilla: </label>
                    <input type="text" class="form-control" name="pUpagilla" placeholder="Enter upazilla">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pDistrict">District: </label>
                    <input type="text" class="form-control" name="pDistrict" placeholder="Enter district">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="regiNo">Registration No: </label>
                    <input type="text" class="form-control" name="regiNo">
                  </div>
                  <div class="form-group col-3">
                    <label for="pRefferedDoctor">Reffered Doctor:</label>
                    <select class="form-control" id="pRefferedDoctor" name="pRefferedDoctor">
                      <option>Choose...</option>
<?php $ret=mysqli_query($con,"select * from doctor");
	while($row=mysqli_fetch_array($ret))
{
?>
	                    <option value="<?php echo htmlentities($row['d_name']);?>">
<?php echo htmlentities($row['d_name']);?>
	                    </option>
<?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="pAdmiteDate">Date Of Admission: </label>
                    <input type="text" class="form-control"  value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d - m - Y "); ?>" disabled="true">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="pAdmiteTime">Time Of Admission: </label>
                    <input type="text" class="form-control" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("h : i : sa "); ?>" disabled="true">
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="pCabinNo">Cabin No: </label>
                    <select class="form-control" id="pCabinNo" name="pCabinNo">
                      <option>Choose...</option>
<?php $ret=mysqli_query($con,"select * from cabin");
	while($row=mysqli_fetch_array($ret))
{
?>
	                    <option value="<?php echo htmlentities($row['hosCabinName']);?>">
<?php echo htmlentities($row['hosCabinName']);?>
	                    </option>
<?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="pWordNo">Word No: </label>
                    <select class="form-control" id="pWordNo" name="pWordNo">
                      <option>Choose...</option>
<?php $ret=mysqli_query($con,"select * from word");
	while($row=mysqli_fetch_array($ret))
{
?>
	                    <option value="<?php echo htmlentities($row['hosWordName']);?>">
<?php echo htmlentities($row['hosWordName']);?>
	                    </option>
<?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="pBedNo">Bed No: </label>
                    <select class="form-control" id="pBedNo" name="pBedNo">
                      <option>Choose...</option>
<?php $ret=mysqli_query($con,"select * from word");
	while($row=mysqli_fetch_array($ret))
{
?>
	                    <option value="<?php echo htmlentities($row['hosWordBed']);?>">
<?php echo htmlentities($row['hosWordBed']);?>
	                    </option>
<?php } ?>
                    </select>
                  </div>
                </div>

                <hr>

                <button type="submit" name="submit"
                  class="btn btn-primary mb-3 btn-lg patient-admission-btn">Register</button>

              </form>
            </div>

          </div>
          <!-- End of Admission Form -->

<?php

        $regiNo=null;
        $pName=null;
        $pBloodGroup=null;
        $pPhoneNo=null;
        $pDateTimeAdmission=null;
        $pVillage=null;
        $pThana=null;
        $pUpagilla=null;
        $pRefferedDoctor=null;
        $pCabinNo=null;
        $pWordNo=null;
        $pBedNo=null;
        

if(isset($_POST['conform'])){

  $regiNo=$_POST['regiNo'];

  $_SESSION['varname']=$regiNo;

  $ret=mysqli_query($con,"select * from patient where regiNo='$regiNo' ");
  $row=mysqli_fetch_array($ret);


        $pName=$row['pName'];
        $pBloodGroup=$row['pBloodGroup'];
        $pPhoneNo=$row['pPhoneNo'];
        $pDateTimeAdmission=$row['pDateTimeAdmission'];
        $pVillage=$row['pVillage'];
        $pThana=$row['pThana'];
        $pUpagilla=$row['pUpagilla'];
        $pRefferedDoctor=$row['pRefferedDoctor'];
        $pCabinNo=$row['pCabinNo'];
        $pWordNo=$row['pWordNo'];
        $pBedNo=$row['pBedNo'];

      }

?>






          <!-- Advance Payment -->
          <div class="tab-pane fade" id="advance-payment" role="tabpanel" aria-labelledby="advance-payment-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">
                  <div class="row">

                    <!-- Payment History -->
                    <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                      <h5 class="text-center mb-3">Payment History</h5>

                      <form class="form-inline mb-2" method="post">
                        <input class="form-control rounded-0 col-lg-9" type="search" name="regiNo"
                          placeholder="Search by Registration ID " aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-lg-3" name="conform" type="conform">Search</button>
                      </form>

                      <h5 class="text-center mt-4 mb-1">Payments Previously Made</h5>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>RegID</th>
                            <th>Name</th>
                            <th>Money</th>
                            <th>Date of Payment</th>
                          </tr>
                        </thead>


<?php
  $totalDeposite=0;
  $pDepositMoney1=0;
  $pAdPaymentDate1=0;
  if($regiNo!=null){
  $ret1=mysqli_query($con,"select * from patientadpayment where regiNo='$regiNo'");
  while ($rows=mysqli_fetch_array($ret1)) {

    $totalDeposite+=$rows['pDepositMoney'];
    $pDepositMoney1=$rows['pDepositMoney'];
    $pAdPaymentDate1=$rows['pAdPaymentDate'];
  }
?>  

                        <tbody>                     
                          <tr>
                            <th><?php  echo $regiNo;?></th>
                            <td><?php  echo $pName;?></td>
                            <td><?php  echo $pDepositMoney1;?></td>
                            <td><?php  echo $pAdPaymentDate1;?></td>
                          </tr>
                        </tbody>
<?php

}
?>
                      </table>

                      <h5 class="text-center mt-4 mb-2">Deposit Payment</h5>

<script type="text/javascript">
  function hello(){
  var xx=eval(form1.pDepositMoney.value);
  var yy=eval(form1.rPrePayment.value);
  form1.rTotalAdvance.value=xx+yy
}
</script>


<?php
  $regiNo=$_SESSION['varname'];

  if(isset($_POST['confirm'])){
    $pDepositMoney=$_POST['pDepositMoney'];
    $sql1=mysqli_query($con,"insert into patientadpayment(regiNo,pDepositMoney) values('$regiNo','$pDepositMoney')");
  }
?>

                      <form name="form1" method="post">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="pDepositMoney">Deposit Money:</label>
                            <input type="text" class="form-control" name="pDepositMoney" value="" placeholder="Amount of Money" onBlur="hello()">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="pPrePayment">Previous Payment:</label>
                            <input type="text" class="form-control" id="rPrePayment" value="<?php  echo $totalDeposite;?>" onBlur="hello()" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="pTotalAdvance">Total Advance Payment:</label>
                            <input type="text" class="form-control" id="rTotalAdvance" value="" disabled="true">
                          </div>
                          <div class="form-group mt-4 col-lg-6 col-md-6">
                            <button class="btn btn-success btn-lg rounded-0 col-lg-12" type="confirm" name="confirm">Deposit</button>
                          </div>

                        </div>
                        
                      </form>
                    </div>
                    <!-- End of Payment History -->

                    <!-- Patient Information Section -->

                    <div class="col-xl-6 col-12">
                      <h5 class="text-center mb-3">Patient Information</h5>

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="pName">Patient Name: </label>
                            <input type="text" class="form-control" id="sName" value="<?php  echo $pName;?> " disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="pBloodGroup">Blood Group: </label>
                            <input type="text" class="form-control" id="sBloodGroup" value="<?php  echo $pBloodGroup;?> " disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="pPhone">Phone: </label>
                            <input type="text" class="form-control" id="sPhone" value="<?php  echo $pPhoneNo;?> " disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="pDOA">Date Of Admission: </label>
                            <input type="text" class="form-control" id="sDateOfAdmission" value="<?php  echo $pDateTimeAdmission;?> " disabled="true">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="pAddress">Address: </label>
                            <input type="text" class="form-control" id="sAddress" value="<?php  echo $pVillage;?>, <?php  echo $pThana;?>, <?php  echo $pUpagilla;?> " disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="pRefferedDoctor">Reffered Doctor: </label>
                            <input type="text" class="form-control" id="sRefferedDoctor" value="<?php  echo $pRefferedDoctor;?> " disabled="true">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="pHospitalRoom">Hospital Room: </label>
                            <input type="text" class="form-control" id="sHospitalRoom" value="<?php  echo $pCabinNo;?>, <?php  echo $pWordNo;?>, <?php  echo $pBedNo;?> " disabled="true">
                          </div>
                        </div>
                      </form>

                      <br>
                      <h5 class="text-center mb-1">Advance Payment History</h5>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>RegID</th>
                            <th>Name</th>
                            <th>Money</th>
                            <th>Date of Payment</th>
                            <th>Action</th>
                          </tr>
                        </thead>
  <?php
if(isset($_GET['del']))
{
        mysqli_query($con,"delete from patientadpayment where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
}


  if($regiNo!=null){
  $ret1=mysqli_query($con,"select * from patientadpayment where regiNo='$regiNo'");
  while ($row=mysqli_fetch_array($ret1)) {

?> 

                        <tbody>
                          <tr>
                            <th><?php  echo $regiNo;?></th>
                            <td><?php  echo $pName;?></td>
                            <td><?php  echo $row['pDepositMoney'];?></td>
                            <td><?php  echo $row['pAdPaymentDate'];?></td>
                            <td><a href="patient.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-danger btn-sm">Delete</i></a></td>
                          </tr>
                        </tbody>
<?php
  }
}
?>
                      </table>
                    </div>
                    <!-- End of Patient Information Section -->


                  </div>
                </div>
              </section>
            </div>
          </div>
          <!-- End of Advance Payment -->

          <!-- Active Patient Tab -->
          <div class="tab-pane fade" id="active-patient" role="tabpanel" aria-labelledby="active-patient-tab">

            <div class="mx-1 my-3">
              <h3 class="text-center mb-3">List of Active Patient</h3>
              <table class="table table-bordered table-dark text-center">
                <thead>
                  <tr class="text-muted">
                    <th>#</th>
                    <th>RegID</th>
                    <th>Name</th>
                    <th>Guardian</th>
                    <!--Any one from Mother and Husband-->
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Admission Date</th>
                    <th>Address</th>
                    <!--Combination of Village and District-->
                    <th>Advance Payment</th>
                    <th>Payment Date</th>
                    <th>Reffered Doctor</th>
                    <th>Hospital Room</th>
                    <!--Combination of (Cabin) or (Word and Bed-5) Such as. (Cabin No:3) or (Word-2, Bed-3)-->
                  </tr>
                </thead>

<?php
  $patientstatus="Active";
	$ret2=mysqli_query($con,"select * from patient where patientstatus='$patientstatus' ");
	$cnt=1;
	while ($row=mysqli_fetch_array($ret2)) {
    $regiNo=$row['regiNo'];
?>
                <tbody>
                  <tr>
                    <th><?php  echo $cnt;?></th>
                    <td><?php  echo $regiNo ?></td>
                    <td><?php  echo $row['pName'];?></td>
                    <td><?php  echo $row['pCareOf'];?></td>
                    <td><?php  echo $row['pAge'];?></td>
                    <td><?php  echo $row['pPhoneNo'];?></td>
                    <td><?php  echo $row['pDateTimeAdmission'];?></td>
                    <td><?php  echo $row['pVillage'];?>, <?php  echo $row['pThana'];?>, <?php  echo $row['pUpagilla'];?></td>
<?php
$pDepositMoney=0;
  $ret3=mysqli_query($con,"select * from patientadpayment where regiNo='$regiNo' ");
  while ($row2=mysqli_fetch_array($ret3)) {
    $pDepositMoney+=$row2['pDepositMoney'];
    $pAdPaymentDate=$row2['pAdPaymentDate'];
  }
?>
                    <td><?php  echo $pDepositMoney;?></td>
                    <td><?php  echo $pAdPaymentDate;?></td>
                    <td><?php  echo $row['pRefferedDoctor'];?></td>
                    <td><?php  echo $row['pCabinNo'];?>, <?php  echo $row['pWordNo'];?>, <?php  echo $row['pBedNo'];?></td>
                  </tr>
                </tbody>
<?php 
$cnt=$cnt+1;
} 
?>
              </table>
            </div>
          </div>
          <!-- End of Active Patient Tab -->

          <!-- Patient Profile Tab -->

<?php

$regiNo=null;
$pName=null;
$pAge=null;
$pSex=null;
$pBloodGroup=null;
$pPhoneNo=null;
$pCareOf=null;
$pMotherName=null;
$pVillage=null;
$pThana=null;
$pUpagilla=null;
$regiNo=null;
$pDateTimeAdmission=null;
$pReleaseDate=null;
$pRefferedDoctor=null;
$pCabinNo=null;
$pWordNo=null;
$pBedNo=null;
$pRemarks=null;

if(isset($_POST['submitdone'])){

$regiNo=$_POST['regiNo'];

$ret=mysqli_query($con,"select * from patient where regiNo='$regiNo' ");
$row=mysqli_fetch_array($ret);


$pName=$row['pName'];
$pAge=$row['pAge'];
$pSex=$row['pSex'];
$pBloodGroup=$row['pBloodGroup'];
$pPhoneNo=$row['pPhoneNo'];
$pCareOf=$row['pCareOf'];
$pMotherName=$row['pMotherName'];
$pVillage=$row['pVillage'];
$pThana=$row['pThana'];
$pUpagilla=$row['pUpagilla'];
$regiNo=$row['regiNo'];
$pDateTimeAdmission=$row['pDateTimeAdmission'];
$pReleaseDate=$row['pReleaseDate'];
$pRefferedDoctor=$row['pRefferedDoctor'];
$pCabinNo=$row['pCabinNo'];
$pWordNo=$row['pWordNo'];
$pBedNo=$row['pBedNo'];
$pRemarks=$row['pRemarks'];

}

?>



          <div class="tab-pane fade" id="patient-profile" role="tabpanel" aria-labelledby="palient-profile-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">

                  <div class="row align-items-center">
                    <div class="col-8 mb-4 mb-xl-0">
                      <form class="form-inline mb-2" method="post">
                        <h6 class="text-center mt-2 col-lg-5">Patient Registration ID:</h6>
                        <input class="form-control rounded-0 col-lg-4" type="search" name="regiNo"
                          placeholder="Enter Registration ID " aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="submitdone" name="submitdone">Search</button>
                      </form>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-12">
                      <h5 class="my-3">Patient Information:</h5>
                      <hr>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-3">
                            <label for="profileName">Patient Name: </label>
                            <input type="text" class="form-control" name="profileName" value="<?php  echo $pName;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="profileAge">Age: </label>
                            <input type="number" class="form-control" name="profileAge" value="<?php  echo $pAge;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="profileGender">Gender: </label>
                            <input type="text" class="form-control" name="profileGender" value="<?php  echo $pSex;?>" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="profileBloodGroup">Blood Group: </label>
                            <input type="text" class="form-control" name="profileBloodGroup" value="<?php  echo $pBloodGroup;?>" disabled="true">
                          </div>
                          <div class="form-group col-3">
                            <label for="profilePhoneNo">Phone Number: </label>
                            <input type="text" class="form-control" name="profilePhoneNo" value="<?php  echo $pPhoneNo;?>" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="profileCareOf">Father's / Husband's Name: </label>
                            <input type="text" class="form-control" name="profileCareOf" value="<?php  echo $pCareOf;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="profileMotherName">Mother's Name: </label>
                            <input type="text" class="form-control" name="profileMotherName" value="<?php  echo $pMotherName;?>" disabled="true">
                          </div>

                          <!-- Address is the combination of Village, PostOffice and District -->
                          <div class="form-group col-md-6">
                            <label for="profileAddress">Address: </label>
                            <input type="text" class="form-control" name="profileAddress" value="<?php  echo $pVillage;?>, <?php  echo $pThana;?>, <?php  echo $pUpagilla;?>" disabled="true">
                          </div>
                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="profileregiNo">Registration No: </label>
                            <input type="text" class="form-control" name="profileregiNo" value="<?php  echo $regiNo;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="profileAdmissionDate">Admission Date:</label>
                            <input type="text" class="form-control" name="profileAdmissionDate" value="<?php  echo $pDateTimeAdmission;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="profileReleaseDate">Release Date: </label>
                            <input type="text" class="form-control" name="profileReleaseDate" value="<?php  echo $pReleaseDate;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="profileRefferedDoctor">Reffered Doctor: </label>
                            <input type="text" class="form-control" name="profileRefferedDoctor" value="<?php  echo $pRefferedDoctor;?>" disabled="true">
                          </div>

                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="profileHospitalRoom">Hospital Room:</label>
                            <input type="text" class="form-control" name="profileHospitalRoom" value="<?php  echo $pCabinNo;?>,<?php  echo $pWordNo;?>,<?php  echo $pBedNo;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="profileRemarks">Remarks: </label>
                            <input type="text" class="form-control" name="profileRemarks" value="<?php  echo $pRemarks;?>" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="profileTotalExpenses">Total Expenses: </label>
                            <input type="text" class="form-control" name="profileTotalExpenses" value="<?php  echo $pRemarks;?>" disabled="true">
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <!-- End of Patient Profile Tab -->

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