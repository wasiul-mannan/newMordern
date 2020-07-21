<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


$regiNo=$_SESSION['varname'];

        $ret=mysqli_query($con,"select * from patient where regiNo='$regiNo'");
        $row=mysqli_fetch_array($ret); 
                $pName=$row['pName'];
                $pVillage=$row['pVillage'];
                $pThana=$row['pThana'];
                $pUpagilla=$row['pUpagilla'];
                $pUpagilla=$row['pUpagilla'];
                $pPhoneNo=$row['pPhoneNo'];


        $ret1=mysqli_query($con,"select * from patient_receipt where regiNo='$regiNo'");
        $rows=mysqli_fetch_array($ret1);
                $id=$rows['id'];
                $radmissionFees=$rows['radmissionFees'];
                $rconsultanctFees=$rows['rconsultanctFees'];
                $rotfFees=$rows['rotfFees'];
                $rsurgeonFees=$rows['rsurgeonFees'];
                $ranesthetistFees=$rows['ranesthetistFees'];
                $rassistFees=$rows['rassistFees'];
                $rserviceFees=$rows['rserviceFees'];
                $rmedicineFees=$rows['rmedicineFees'];
                $rbedFees=$rows['rbedFees'];
                $rothersFees =$rows['rothersFees'];


                $sumofcost=$radmissionFees+$rconsultanctFees+$rotfFees+$rsurgeonFees+$ranesthetistFees+$rassistFees+$rserviceFees+$rmedicineFees+$rbedFees+$rothersFees;

                $rvat=$rows['rvat'];
                $rdiscount=$rows['rdiscount'];
                $radvanced=$rows['radvanced'];
                $totalPayment=$rows['totalPayment'];



?>



<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>MGH | Bill Paper</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>body {
    background-color: #000
}

.padding {
    padding: 2rem !important
}

.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2
}

h3 {
    font-size: 20px
}

h5 {
    font-size: 15px;
    line-height: 26px;
    color: #3d405c;
    margin: 0px 0px 15px 0px;
    font-family: 'Circular Std Medium'
}

.text-dark {
    color: #3d405c !important
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body>
                             <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             
             <div class="float-right">
			 <img src="images/logoicon.png" style="width:100%; max-width:300px;">
                 <h3 class="mb-0">Invoice #MGH<?php echo"$id"?></h3>
                 Date: <?php date_default_timezone_set("Asia/Dhaka"); echo date("d-m-Y | h:i:sa"); ?>
             </div>
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h3 class="text-dark mb-1">Modern General Hospital And Diagnostic Center</h3>
                     <div>Sadar Road (Adjacent to the martyr Dr. Abul Kashem field )</div>
                     <div>Jaipurhat</div>
                     <div>Phone: +8801737502425</div>
                     <div>Phone: +8801990132078</div>
                 </div>
                 <div class="col-sm-6 ">
                     <h3 class="text-dark mb-1"><strong>Registration number:</strong> <?php echo"$regiNo"?></h3>
                     <h3 class="text-dark mb-1"><?php echo"$pName"?></h3>
                     <div><?php echo"$pVillage"?>, <?php echo"$pThana"?></div>
                     <div><?php echo"$pUpagilla"?></div>
                     <div>Phone: <?php echo"$pPhoneNo"?></div>
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="center">#</th>
                             <th>Details of Cost</th>
                             <th class="right">Taka</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td class="center">1</td>
                             <td class="left strong">Admission Fees</td>
                             <td class="right">৳<?php echo"$radmissionFees" ?></td>
                         </tr>
                         <tr>
                             <td class="center">2</td>
                             <td class="left strong">Consultant Fees</td>
                             <td class="right">৳<?php echo"$rconsultanctFees" ?></td>
                        </tr>
                        <tr>
                             <td class="center">3</td>
                             <td class="left strong">O.T.F.</td>
                             <td class="right">৳<?php echo"$rotfFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">4</td>
                            <td class="left strong">Surgeon Fees</td>
                            <td class="right">৳<?php echo"$rsurgeonFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">5</td>
                            <td class="left strong">Anesthetist Fees</td>
                            <td class="right">৳<?php echo"$ranesthetistFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">6</td>
                            <td class="left strong">Assist Fees</td>
                            <td class="right">৳<?php echo"$rassistFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">7</td>
                            <td class="left strong">Service Charge</td>
                            <td class="right">৳<?php echo"$rserviceFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">8</td>
                            <td class="left strong">Medicine Cost</td>
                            <td class="right">৳<?php echo"$rmedicineFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">9</td>
                            <td class="left strong">Bed/Cabin Rent</td>
                            <td class="right">৳<?php echo"$rbedFees" ?></td>
                        </tr>
                        <tr>
                            <td class="center">10</td>
                            <td class="left strong">Others</td>
                            <td class="right">৳<?php echo"$rothersFees" ?></td>
                        </tr>
                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Subtotal</strong>
                                 </td>
                                 <td class="right">৳<?php echo"$sumofcost" ?></td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Vat</strong>
                                 </td>
                                 <td class="right">৳<?php echo"$rvat" ?></td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Advanced</strong>
                                 </td>
                                 <td class="right">৳<?php echo"$radvanced" ?></td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Discount</strong>
                                 </td>
                                 <td class="right">৳<?php echo"$rdiscount" ?></td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Total</strong> </td>
                                 <td class="right">
                                     <strong class="text-dark">৳<?php echo"$totalPayment" ?></strong>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="card-footer bg-white">
             <p class="mb-0">Modern General Hospital And Diagnostic Center, Sadar Road (Adjacent to the martyr Dr. Abul Kashem field ), Jaipurhat</p>
         </div>
     </div>
 </div>
                            </body>
                        </html>