<?php
session_start();
//error_reporting(0);
include('include/config.php');
//include('include/checklogin.php');
//check_login();



$radmissionFees=$_SESSION['varradmissionFees'];
$rconsultanctFees=$_SESSION['varrconsultanctFees'];
$rotfFees=$_SESSION['varrotfFees'];
$rsurgeonFees=$_SESSION['varrsurgeonFees'];
$ranesthetistFees=$_SESSION['varranesthetistFees'];
$rassistFees=$_SESSION['varrassistFees'];
$rserviceFees=$_SESSION['varrserviceFees'];
$rmedicineFees=$_SESSION['varrmedicineFees'];
$rbedFees=$_SESSION['varrbedFees'];
$rothersFees=$_SESSION['varrothersFees'];
$rvat=$_SESSION['varrvat'];
$rdiscount=$_SESSION['varrdiscount'];
$radvanced=$_SESSION['varradvanced'];
$totalPayment=$_SESSION['vartotalPayment'];





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
                 <h3 class="mb-0">Invoice #BBB10234</h3>
                 Date: 12 Jun,2019
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
                     <h3 class="text-dark mb-1">Akshay Singh</h3>
                     <div>478, Nai Sadak</div>
                     <div>Chandni chowk, New delhi, 110006</div>
                     <div>Email: info@tikon.com</div>
                     <div>Phone: +91 9895 398 009</div>
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
                             <td class="right">৳<?pho echo"$radmissionFees" ?></td>
                         </tr>
                         <tr>
                             <td class="center">2</td>
                             <td class="left strong">Consultant Fees</td>
                             <td class="right">৳1500</td>
                        </tr>
                        <tr>
                             <td class="center">3</td>
                             <td class="left strong">O.T.F.</td>
                             <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">4</td>
                            <td class="left strong">Surgeon Fees</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">5</td>
                            <td class="left strong">Anesthetist Fees</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">6</td>
                            <td class="left strong">Assist Fees</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">7</td>
                            <td class="left strong">Service Charge</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">8</td>
                            <td class="left strong">Medicine Cost</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">9</td>
                            <td class="left strong">Bed/Cabin Rent</td>
                            <td class="right">৳1500</td>
                        </tr>
                        <tr>
                            <td class="center">10</td>
                            <td class="left strong">Others</td>
                            <td class="right">৳1500</td>
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
                                 <td class="right">৳28,809,00</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Vat</strong>
                                 </td>
                                 <td class="right">৳5,761,00</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Discount</strong>
                                 </td>
                                 <td class="right">৳2,304,00</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Total</strong> </td>
                                 <td class="right">
                                     <strong class="text-dark">৳20,744,00</strong>
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