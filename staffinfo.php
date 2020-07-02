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
                <h4 class="text-light mb-0">Staff Information</h4>
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
              <a class="nav-link active" id="list-of-staffs-tab" data-toggle="tab" href="#list-of-staffs" role="tab"
                aria-controls="list-of-staffs" aria-selected="false">List of Staffs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="staffs-profile-tab" data-toggle="tab" href="#staffs-profile" role="tab"
                aria-controls="staffs-profile" aria-selected="false">Staffs Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="staffs-admission-tab" data-toggle="tab" href="#staffs-admission" role="tab"
                aria-controls="staffs-admission" aria-selected="true">Staffs Registraton</a>
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

          <!-- list-of-Stuffs Tab -->
          <div class="tab-pane fade show active" id="list-of-staffs" role="tabpanel"
            aria-labelledby="list-of-staffs-tab">

            <div class="mx-1 my-3">
              <h3 class="text-center mb-3">List of Stuffs</h3>

              <div class="row">
                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2">
                    <input class="form-control rounded-0" type="search" placeholder="Enter StuffID / Name "
                      aria-label="Search">
                    <button class="btn btn-primary my-0 my-sm-0 mr-4 rounded-0" type="submit">Search</button>
                  </form>
                </div>
                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2">
                    <h5 class="text-center ml-md-auto pr-2">Search By:</h5>
                    <select class="form-control col-xl-6" id="docSpeciality">
                      <option>Choose Profession...</option>
                      <option>Word Boy</option>
                      <option>Personal Assistant</option>
                      <option>Manager</option>
                      <option>Guard</option>
                    </select>
                  </form>
                </div>
              </div>

              <table class="table table-bordered table-dark text-center">
                <thead>
                  <tr class="text-muted">
                    <th>#</th>
                    <th>StuffID</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Shift</th>
                    <th>Address</th>
                    <!--Combination of Village and District-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>WB-001</td>
                    <td>Robiul</td>
                    <td>Word Boy</td>
                    <td>Male</td>
                    <td>01711-363636</td>
                    <td>Night</td>
                    <td>NewYork, USA</td>
                  </tr>
                  <tr>
                    <th>1</th>
                    <td>Man-001</td>
                    <td>Muniat</td>
                    <td>Manager</td>
                    <td>Female</td>
                    <td>01711-363636</td>
                    <td>Night</td>
                    <td>NewYork, USA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of list-of-Stuffs Tab -->

          <!-- Stuffs Profile Tab -->
          <div class="tab-pane fade" id="staffs-profile" role="tabpanel" aria-labelledby="staffs-profile-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">

                  <div class="row align-items-center">
                    <div class="col-8 mb-4 mb-xl-0">
                      <form class="form-inline mb-2">
                        <h6 class="text-center mt-2 col-lg-5">Stuffs Registration ID:</h6>
                        <input class="form-control rounded-0 col-lg-4" type="search" placeholder="Enter RegID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="submit">Search</button>
                      </form>
                    </div>
                  </div>

                  <div class="row align-items-center">

                    <div class="col-12">
                      <h5 class="my-3">Stuffs Information:</h5>
                      <hr>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-3">
                            <label for="proStuffName">Stuffs Name: </label>
                            <input type="text" class="form-control" name="proStuffName" disabled="true">
                          </div>
                          <div class="form-group col-3">
                            <label for="proStuffProfession">Profession: </label>
                            <input type="text" class="form-control" name="proStuffProfession" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proStuffGender">Gender: </label>
                            <input type="text" class="form-control" name="proStuffGender" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proStuffDOB">Date of Birth: </label>
                            <input type="text" class="form-control" name="proStuffDOB" disabled="true">
                          </div>

                          <div class="form-group col-2">
                            <label for="proStuffPhoneNo">Phone Number: </label>
                            <input type="text" class="form-control" name="proStuffPhoneNo" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proStuffFatherName">Father's Name: </label>
                            <input type="text" class="form-control" name="proStuffFatherName" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proStuffMotherName">Mother's Name: </label>
                            <input type="text" class="form-control" name="proStuffMotherName" disabled="true">
                          </div>
                          <div class="form-group col-1">
                            <label for="proStuffBloodGroup">Blood: </label>
                            <input type="text" class="form-control" name="proStuffBloodGroup" disabled="true">
                          </div>
                          <!-- Address is the combination of Village, PostOffice and District -->
                          <div class="form-group col-md-5">
                            <label for="proStuffAddress">Address: </label>
                            <input type="text" class="form-control" name="proStuffAddress" disabled="true">
                          </div>

                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proStuffRegID">Registration ID: </label>
                            <input type="text" class="form-control" name="proStuffRegID" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proStuffNID">NID No: </label>
                            <input type="text" class="form-control" name="proStuffNID" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proStuffJoining">Joining Date: </label>
                            <input type="text" class="form-control" name="proStuffJoining" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proStuffShift">Stuffs Shift: </label>
                            <input type="text" class="form-control" name="proStuffShift" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="proStuffRemarks">Remarks (Degree/Details):</label>
                            <textarea class="form-control" id="proStuffRemarks" disabled="true"></textarea>
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
                            <select class="form-control col-xl-4" id="stuffMonthSelect">
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
                            <th>StuffID</th>
                            <th>Name</th>
                            <th>Profession</th>
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
                            <td>WB-001</td>
                            <td>Robiul</td>
                            <td>Word Boy</td>
                            <td>45000</td>
                            <td>4000</td>
                            <td>49000</td>
                            <td>April</td>
                            <td>2020</td>
                            <td>21-05-2020, 13:07</td>
                          </tr>
                          <tr>
                            <td>Man-002</td>
                            <td>Muniat</td>
                            <td>Manager</td>
                            <td>45000</td>
                            <td>0</td>
                            <td>45000</td>
                            <td>March</td>
                            <td>2020</td>
                            <td>21-04-2020, 13:07</td>
                          </tr>
                          <tr>
                            <td>PA-002</td>
                            <td>Muniat</td>
                            <td>Personal Assistant</td>
                            <td>45000</td>
                            <td>0</td>
                            <td>45000</td>
                            <td>March</td>
                            <td>2020</td>
                            <td>21-04-2020, 13:07</td>
                          </tr>
                          <tr>
                            <td>Gua-002</td>
                            <td>Muniat</td>
                            <td>Guard</td>
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
          <!-- End of Stuffs Profile Tab -->

          <!-- Stuffs Admission Form Tab -->
          <div class="tab-pane fade" id="staffs-admission" role="tabpanel" aria-labelledby="staffs-admission-tab">

            <div class="mx-3 my-3">
              <h4 class="text-center">Registration Form</h4>
              <hr>
              <form>
                <div class="form-row">
                  <div class="form-group col-4">
                    <label for="stuffProfession">Profession:</label>
                    <select class="form-control" id="stuffProfession">
                      <option>Select Profession...</option>
                      <option>Word Boy</option>
                      <option>Personal Assistant</option>
                      <option>Manager</option>
                      <option>Guard</option>
                    </select>
                  </div>
                  <div class="form-group col-4">
                    <label for="stuffName">Stuff Name: </label>
                    <input type="text" class="form-control" name="stuffName" placeholder="Enter name">
                  </div>
                  <div class="form-group col-2">
                    <label for="stuffDOB">Date of Birth: </label>
                    <input type="text" class="form-control" name="stuffDOB" placeholder="Enter (D-M-Y)">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="stuffPhoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="stuffPhoneNo" placeholder="Enter phone no.">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="stuffFatherName">Father's Name: </label>
                    <input type="text" class="form-control" name="stuffFatherName" placeholder="Enter father name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffMotherName">Mother's Name: </label>
                    <input type="text" class="form-control" name="stuffMotherName" placeholder="Enter mother name">
                  </div>
                  <div class="form-group col-2">
                    <label for="stuffBloodGroup">Blood Group:</label>
                    <select class="form-control" id="stuffBloodGroup">
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
                  <div class="form-group col-4">
                    <label for="stuffGender">Gender: </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stuffGender" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stuffGender" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stuffGender" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="stuffRegistrationID">Stuff Registration ID: </label>
                    <input type="text" class="form-control" name="stuffRegistrationID" placeholder="Enter nurse regId">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffNID">Stuff NID: </label>
                    <input type="text" class="form-control" name="stuffNID" placeholder="Enter NID no">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffJoining">Joining Date: </label>
                    <input type="text" class="form-control" name="stuffJoining" placeholder="Enter joining date">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffShift">Stuff Shift:</label>
                    <select class="form-control" id="stuffShift">
                      <option>Choose...</option>
                      <option>Day</option>
                      <option>Night</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="stuffRemarks">Remarks:</label>
                    <textarea class="form-control" id="stuffRemarks" placeholder="Enter degree / details"></textarea>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="stuffVillage">Village: </label>
                    <input type="text" class="form-control" name="stuffVillage" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffPostOffice">Post Office: </label>
                    <input type="text" class="form-control" name="stuffPostOffice" placeholder="Enter post office">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffThana">Thana: </label>
                    <input type="text" class="form-control" name="stuffThana" placeholder="Enter thana">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="stuffUpagilla">Upazilla: </label>
                    <input type="text" class="form-control" name="stuffUpagilla" placeholder="Enter upazilla">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="stuffDistrict">District: </label>
                    <input type="text" class="form-control" name="stuffDistrict" placeholder="Enter district">
                  </div>
                </div>

                <hr>

                <button type="Submit" name="Submit"
                  class="btn btn-primary mb-3 btn-lg stuff-admission-btn">Register</button>

              </form>

            </div>

          </div>
          <!-- End of Stuffs Admission Form Tab -->

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