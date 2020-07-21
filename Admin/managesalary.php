<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
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
                <h4 class="text-light mb-0">Salary Management</h4>
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
              <a class="nav-link active" id="doctors-section-tab" data-toggle="tab" href="#doctors-section" role="tab"
                aria-controls="doctors-section" aria-selected="false">Doctors Salary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nurses-section-tab" data-toggle="tab" href="#nurses-section" role="tab"
                aria-controls="nurses-section" aria-selected="false">Nurses Salary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="staffs-section-tab" data-toggle="tab" href="#staffs-section" role="tab"
                aria-controls="staffs-section" aria-selected="true">Staffs Salary</a>
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

          <!-- Doctors Salary Management Tab -->
          <div class="tab-pane fade show active" id="doctors-section" role="tabpanel"
            aria-labelledby="doctors-section-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">
                  <div class="row">

                    <!-- Payment History -->
                    <div class="col-xl-4 mb-4 mb-xl-0">
                      <h4 class="text-center mb-3">Make Payment</h4>

                      <form class="form-inline mb-2">
                        <input class="form-control rounded-0 col-lg-9" type="search"
                          placeholder="Search by Doctor RegID " aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-lg-3" type="submit">Search</button>
                      </form>

                      <h5 class="text-center mt-3 mb-3">Deposit Salary</h5>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="docSalaryMonth">Month:</label>
                            <select class="form-control" id="docSalaryMonth">
                              <option>Select Month...</option>
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
                          </div>
                          <div class="form-group col-6">
                            <label for="docSalaryYear">Year:</label>
                            <input type="number" class="form-control" name="docSalaryYear" placeholder="Enter Year">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="docSalary">Salary</label>
                            <input type="number" class="form-control" id="docSalary" placeholder="Enter amount">
                          </div>
                          <div class="form-group col-6">
                            <label for="docBonus">Bonus</label>
                            <input type="number" class="form-control" id="docBonus" placeholder="Enter amount">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="docTotalAmount">Total Amount</label>
                            <input type="number" class="form-control" id="docTotalAmount" disabled="true">
                          </div>
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="docPaidAt">Paid At</label>
                            <input type="text" class="form-control" id="docPaidAt" placeholder="21-05-2020, 13:07">
                          </div>

                        </div>

                        <div class="form-row">
                          <div class="form-group mt-1 col-lg-12 col-md-12">
                            <button class="btn btn-success btn-lg rounded-0 col-lg-12" type="submit">Pay Salary</button>
                          </div>
                        </div>

                      </form>

                    </div>
                    <!-- End of Payment History -->

                    <!-- Patient Information Section -->

                    <div class="col-xl-8">
                      <h4 class="text-center mb-3">Doctor Information</h4>

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="docName">Doctor Name: </label>
                            <input type="text" class="form-control" id="docName" disabled="true">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="docID">Doctor ID: </label>
                            <input type="text" class="form-control" id="docID" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="docSpeciality">Speciality: </label>
                            <input type="text" class="form-control" id="docSpeciality" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="docCategory">Category: </label>
                            <input type="text" class="form-control" id="docCategory" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="docPhone">Phone: </label>
                            <input type="text" class="form-control" id="docPhone" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="docJoiningDate">Joining Date: </label>
                            <input type="text" class="form-control" id="docJoiningDate" disabled="true">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="docAddress">Address: </label>
                            <input type="text" class="form-control" id="docAddress" disabled="true">
                          </div>
                        </div>

                      </form>

                      <br>
                      <h5 class="text-center mb-1">Pervious Salary History</h5>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>DocID</th>
                            <th>Salary</th>
                            <th>Bonus</th>
                            <th>Total</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Paid At</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>DOC-001</th>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End of Patient Information Section -->


                  </div>
                </div>
              </section>
            </div>

          </div>
          <!-- End of Doctors Salary Management Tab -->

          <!-- Nurse Salary Management Tab -->
          <div class="tab-pane fade" id="nurses-section" role="tabpanel" aria-labelledby="nurses-section-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">
                  <div class="row">

                    <!-- Payment History -->
                    <div class="col-xl-4 mb-4 mb-xl-0">
                      <h4 class="text-center mb-3">Make Payment</h4>

                      <form class="form-inline mb-2">
                        <input class="form-control rounded-0 col-lg-9" type="search"
                          placeholder="Search by Nurse RegID " aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-lg-3" type="submit">Search</button>
                      </form>

                      <h5 class="text-center mt-3 mb-3">Deposit Salary</h5>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="nurSalaryMonth">Month:</label>
                            <select class="form-control" id="nurSalaryMonth">
                              <option>Select Month...</option>
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
                          </div>
                          <div class="form-group col-6">
                            <label for="nurSalaryYear">Year:</label>
                            <input type="number" class="form-control" name="nurSalaryYear" placeholder="Enter Year">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="nurSalary">Salary</label>
                            <input type="number" class="form-control" id="nurSalary" placeholder="Enter amount">
                          </div>
                          <div class="form-group col-6">
                            <label for="nurBonus">Bonus</label>
                            <input type="number" class="form-control" id="nurBonus" placeholder="Enter amount">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="nurTotalAmount">Total Amount</label>
                            <input type="number" class="form-control" id="nurTotalAmount" disabled="true">
                          </div>
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="nurPaidAt">Paid At</label>
                            <input type="text" class="form-control" id="nurPaidAt" placeholder="21-05-2020, 13:07">
                          </div>

                        </div>

                        <div class="form-row">
                          <div class="form-group mt-1 col-lg-12 col-md-12">
                            <button class="btn btn-success btn-lg rounded-0 col-lg-12" type="submit">Pay Salary</button>
                          </div>
                        </div>

                      </form>

                    </div>
                    <!-- End of Payment History -->

                    <!-- Patient Information Section -->

                    <div class="col-xl-8">
                      <h4 class="text-center mb-3">Nurse Information</h4>

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nurName">Nurse Name: </label>
                            <input type="text" class="form-control" id="nurName" disabled="true">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="nurID">Nurse ID: </label>
                            <input type="text" class="form-control" id="nurID" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="nurType">Type: </label>
                            <input type="text" class="form-control" id="nurType" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="nurShift">Shift: </label>
                            <input type="text" class="form-control" id="nurShift" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="nurPhone">Phone: </label>
                            <input type="text" class="form-control" id="nurPhone" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="nurJoiningDate">Joining Date: </label>
                            <input type="text" class="form-control" id="nurJoiningDate" disabled="true">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="nurAddress">Address: </label>
                            <input type="text" class="form-control" id="nurAddress" disabled="true">
                          </div>
                        </div>

                      </form>

                      <br>
                      <h5 class="text-center mb-1">Pervious Salary History</h5>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>NurID</th>
                            <th>Salary</th>
                            <th>Bonus</th>
                            <th>Total</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Paid At</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Nur-001</th>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End of Patient Information Section -->


                  </div>
                </div>
              </section>
            </div>

          </div>
          <!-- End of Nurse Salary Management Tab -->

          <!-- Staffs Salary Management Tab -->
          <div class="tab-pane fade" id="staffs-section" role="tabpanel" aria-labelledby="staffs-section-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">
                  <div class="row">

                    <!-- Payment History -->
                    <div class="col-xl-4 mb-4 mb-xl-0">
                      <h4 class="text-center mb-3">Make Payment</h4>

                      <form class="form-inline mb-2">
                        <input class="form-control rounded-0 col-lg-9" type="search"
                          placeholder="Search by Stuff RegID " aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-lg-3" type="submit">Search</button>
                      </form>

                      <h5 class="text-center mt-3 mb-3">Deposit Salary</h5>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="staffSalaryMonth">Month:</label>
                            <select class="form-control" id="staffSalaryMonth">
                              <option>Select Month...</option>
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
                          </div>
                          <div class="form-group col-6">
                            <label for="staffSalaryYear">Year:</label>
                            <input type="number" class="form-control" name="staffSalaryYear" placeholder="Enter Year">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="staffSalary">Salary</label>
                            <input type="number" class="form-control" id="staffSalary" placeholder="Enter amount">
                          </div>
                          <div class="form-group col-6">
                            <label for="staffBonus">Bonus</label>
                            <input type="number" class="form-control" id="staffBonus" placeholder="Enter amount">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="staffTotalAmount">Total Amount</label>
                            <input type="number" class="form-control" id="staffTotalAmount" disabled="true">
                          </div>
                          <div class="form-group col-lg-6 col-md-6">
                            <label for="staffPaidAt">Paid At</label>
                            <input type="text" class="form-control" id="staffPaidAt" placeholder="21-05-2020, 13:07">
                          </div>

                        </div>

                        <div class="form-row">
                          <div class="form-group mt-1 col-lg-12 col-md-12">
                            <button class="btn btn-success btn-lg rounded-0 col-lg-12" type="submit">Pay Salary</button>
                          </div>
                        </div>

                      </form>

                    </div>
                    <!-- End of Payment History -->

                    <!-- Patient Information Section -->

                    <div class="col-xl-8">
                      <h4 class="text-center mb-3">Stuff Information</h4>

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="staffName">Stuff Name: </label>
                            <input type="text" class="form-control" id="staffName" disabled="true">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="staffID">Stuff ID: </label>
                            <input type="text" class="form-control" id="staffID" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="staffProfession">Profession: </label>
                            <input type="text" class="form-control" id="staffProfession" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="staffShift">Shift: </label>
                            <input type="text" class="form-control" id="staffShift" disabled="true">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="staffPhone">Phone: </label>
                            <input type="text" class="form-control" id="staffPhone" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="staffJoiningDate">Joining Date: </label>
                            <input type="text" class="form-control" id="staffJoiningDate" disabled="true">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="staffAddress">Address: </label>
                            <input type="text" class="form-control" id="staffAddress" disabled="true">
                          </div>
                        </div>

                      </form>

                      <br>
                      <h5 class="text-center mb-1">Pervious Salary History</h5>
                      <table class="table table-bordered table-dark text-center">
                        <thead>
                          <tr class="text-muted">
                            <th>StuffID</th>
                            <th>Salary</th>
                            <th>Bonus</th>
                            <th>Total</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Paid At</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>WB-001</th>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End of Patient Information Section -->


                  </div>
                </div>
              </section>
            </div>

          </div>
          <!-- End of Staffs Salary Management Tab -->

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