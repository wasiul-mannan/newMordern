<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();



        $pName=null;
        $regiNo=null;
        $pAge=null;
        $pSex=null;
        $pPhoneNo=null;
        $pCareOf=null;
        $pBloodGroup=null;
        $pRefferedDoctor=null;
        $pCabinNo=null;
        $pWordNo=null;
        $pBedNo=null;
        $pDateTimeAdmission=null;
        $pVillage=null;
        $pThana=null;
        $pUpagilla=null;
        $totalDeposite="0";
        

if(isset($_POST['conform'])){

  $regiNo=$_POST['regiNo'];

  $_SESSION['varname']=$regiNo;

  $ret=mysqli_query($con,"select * from patient where regiNo='$regiNo' ");
  $row=mysqli_fetch_array($ret);


        $pName=$row['pName'];
        $pAge=$row['pAge'];
        $pSex=$row['pSex'];
        $pPhoneNo=$row['pPhoneNo'];
        $pCareOf=$row['pCareOf'];
        $pBloodGroup=$row['pBloodGroup'];
        $pRefferedDoctor=$row['pRefferedDoctor'];
        $pCabinNo=$row['pCabinNo'];
        $pWordNo=$row['pWordNo'];
        $pBedNo=$row['pBedNo'];
        $pDateTimeAdmission=$row['pDateTimeAdmission'];
        $pVillage=$row['pVillage'];
        $pThana=$row['pThana'];
        $pUpagilla=$row['pUpagilla'];


        $ret1=mysqli_query($con,"select * from patientadpayment where regiNo='$regiNo'");
        while ($rows=mysqli_fetch_array($ret1)) {
      
          $totalDeposite+=$rows['pDepositMoney'];

          $_SESSION['varadvance']=$totalDeposite;
        }
        

      }


      if(isset($_POST['save']))
      {	
      
      
              $radmissionFees=$_POST['radmissionFees'];
              $rconsultanctFees=$_POST['rconsultanctFees'];
              $rotfFees=$_POST['rotfFees'];
              $rsurgeonFees=$_POST['rsurgeonFees'];
              $ranesthetistFees=$_POST['ranesthetistFees'];
              $rassistFees=$_POST['rassistFees'];
              $rserviceFees=$_POST['rserviceFees'];
              $rmedicineFees=$_POST['rmedicineFees'];
              $rbedFees=$_POST['rbedFees'];
              $rothersFees=$_POST['rothersFees'];
              $rvat=$_POST['rvat'];
              $rdiscount=$_POST['rdiscount'];
              $radvanced= $_SESSION['varadvance'];
              $totalPayment=$_POST['grandtotal'];


              $pRemarks=$_POST['pRemarks'];
              $regiNo=$_SESSION['varname'];


              $ret11=mysqli_query($con,"select * from adminlog where uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
              $rows11=mysqli_fetch_array($ret11);
              $username=$rows11['username'];

      
      $sql=mysqli_query($con,"insert into patient_receipt(regiNo,transect_by,radmissionFees,rconsultanctFees,rotfFees,rsurgeonFees,ranesthetistFees,rassistFees,rserviceFees,rmedicineFees,rbedFees,rothersFees,rvat,rdiscount,radvanced,totalPayment) 
                                  values('$regiNo','$username','$radmissionFees','$rconsultanctFees','$rotfFees','$rsurgeonFees','$ranesthetistFees','$rassistFees','$rserviceFees','$rmedicineFees','$rbedFees','$rothersFees','$rvat','$rdiscount','$radvanced','$totalPayment')");
      
      
      $sql1=mysqli_query($con,"update patient set pReleaseDate=now(), pRemarks='$pRemarks', profileTotalExpenses='$totalPayment', patientstatus='Inactive' where regiNo = '$regiNo'");
      
      
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
                <h4 class="text-light mb-0">Payment Receipt</h4>
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
                      <h5 class="text-center">Search Patient</h5>
                    </div>
                    <div class="col-8">
                      <form class="form-inline ml-auto" method="post">
                        <input class="form-control rounded-0 col-8" type="search" name="regiNo" placeholder="Enter Registration ID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-4" type="conform" name="conform">Search</button>
                      </form>
                    </div>
                  </div>

                  <form name="form1" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-5">
                        <label for="pName">Patient Name: </label>
                        <input type="text" class="form-control" id="pName" value="<?php  echo $pName;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pRegID">Registration ID: </label>
                        <input type="text" class="form-control" id="pRegID" value="<?php  echo $regiNo;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="pAge">Age: </label>
                        <input type="text" class="form-control" id="pAge" value="<?php  echo $pAge;?>" disabled="true">
                      </div>
                      
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="pGender">Gender: </label>
                        <input type="text" class="form-control" id="pGender" value="<?php  echo $pSex;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="pPhone">Phone: </label>
                        <input type="text" class="form-control" id="pPhone" value="<?php  echo $pPhoneNo;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pGuardian">Guardian Name: </label>
                        <input type="text" class="form-control" id="pGuardian" value="<?php  echo $pCareOf;?>" disabled="true">
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="pBlood">Blood: </label>
                        <input type="text" class="form-control" id="pBlood" value="<?php  echo $pBloodGroup;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pRefferedDoctor">Reffered Doctor: </label>
                        <input type="text" class="form-control" id="pRefferedDoctor" value="<?php  echo $pRefferedDoctor;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pHospitalRoom">Hospital Room: </label>
                        <input type="text" class="form-control" id="pHospitalRoom" value="<?php  echo $pCabinNo;?>, <?php  echo $pWordNo;?>, <?php  echo $pBedNo;?>" disabled="true">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="pAdmissionDate">Admission Date: </label>
                        <input type="text" class="form-control" id="pAdmissionDate" value="<?php  echo $pDateTimeAdmission;?>" disabled="true">
                      </div>
                      <div class="form-group col-md-8">
                        <label for="pAddress">Address: </label>
                        <input type="text" class="form-control" id="pAddress" value="<?php  echo $pVillage;?>, <?php  echo $pThana;?>, <?php  echo $pUpagilla;?>" disabled="true">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="pReleaseDate">Release Date: </label>
                        <input type="text" class="form-control" id="pReleaseDate" name='pReleaseDate' value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("d-m-Y | h:i:sa"); ?>" disabled="true">
                      </div>
                      <div class="form-group col-md-8">
                        <label for="pRemarks">Remarks: </label>
                        <textarea class="form-control" id="pRemarks" name='pRemarks' placeholder="Enter any remarks"></textarea>
                      </div>
                    </div>

                    
                  

                </div>
                <!-- End of Patient Information Section -->
<script type="text/javascript">
  function hello(){
  var radmissionFees=eval(form1.radmissionFees.value);
  var rconsultanctFees=eval(form1.rconsultanctFees.value);
  var rotfFees=eval(form1.rotfFees.value);
  var rsurgeonFees=eval(form1.rsurgeonFees.value);
  var ranesthetistFees=eval(form1.ranesthetistFees.value);
  var rassistFees=eval(form1.rassistFees.value);
  var rserviceFees=eval(form1.rserviceFees.value);
  var rbedFees=eval(form1.rbedFees.value);
  var rmedicineFees=eval(form1.rmedicineFees.value);
  var rothersFees=eval(form1.rothersFees.value);
  
    var Ptotalcost=radmissionFees+rconsultanctFees+rotfFees+rsurgeonFees+ranesthetistFees+rassistFees+rserviceFees+rbedFees+rmedicineFees+rothersFees;

    var rvat=eval(form1.rvat.value);

  var rdiscount=eval(form1.rdiscount.value);
  var radvanced=eval(form1.radvanced.value);



  form1.totalPayment.value=(Ptotalcost+rvat)-(rdiscount+radvanced)
}
</script>
                <!-- Payment History -->
                <div class="col-lg-6 col-m-12">
                  <h4 class="text-center mb-3">Receipt Form</h4>

                  <div id="receipt">
                    <table class="table table-bordered table-dark text-center">
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Details of Cost</th>
                        <th class="text-center">Taka</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Admission Fees</td>
                        <td><input type="number" name="radmissionFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Consultant Fees</td>
                        <td><input type="number" step="0.01" name="rconsultanctFees" value="0" onBlur="hello()" >
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>O.T.F.</td>
                        <td><input type="number" step="0.01" name="rotfFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Surgeon Fees</td>
                        <td><input type="number" step="0.01" name="rsurgeonFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Anesthetist Fees</td>
                        <td><input type="number" step="0.01" name="ranesthetistFees" value="0" onBlur="hello()" >
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Assist Fees</td>
                        <td><input type="number" step="0.01" name="rassistFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Service Charge</td>
                        <td><input type="number" step="0.01" name="rserviceFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Medicine Cost</td>
                        <td><input type="number" step="0.01" name="rmedicineFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Bed/Cabin Rent</td>
                        <td><input type="number" step="0.01" name="rbedFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Others</td>
                        <td><input type="number" step="0.01" name="rothersFees" value="0" onBlur="hello()" ></td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>Vat</td>
                        <td><input type="number" step="0.01" name="rvat" value="0" onBlur="hello()" ></td>
                      </tr>

                      <tr>
                        <td class="text-center" colspan="2">Discount : </td>
                        <td><input type="number" step="0.01" name="rdiscount" value="0" onBlur="hello()" ></td>
                      </tr>

                      <tr>
                        <td colspan="2">Advance Payment : </td>
                        <td><input type="number" step="0.01" name="radvanced" value="<?php  echo $totalDeposite;?>" disabled="true"></td>
                      </tr>

                      <tr>
                        <td colspan="2">Total Payment : </td>
                        <td><input type="number" step="0.01" name="totalPayment" disabled="true"></td>
                      </tr>

                      <tr>
                        <td colspan="2">Grand Total : </td>
                        <td><input type="number" step="0.01" name="grandtotal" ></td>
                      </tr>


                    </table>
                  </div>

                  <div class="form-inline justify-content-center">  
                    
                  
                    <button type="save" name="save" class="btn btn-primary rounded-0 receipt-btn" onclick=" window.open('invoice.php','_blank')" >Save</button>

                    
                  </div>
                </form>
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