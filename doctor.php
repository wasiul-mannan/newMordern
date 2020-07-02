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

                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2">
                    <input class="form-control rounded-0" type="search" placeholder="Enter DocID / Name "
                      aria-label="Search">
                    <button class="btn btn-primary my-0 my-sm-0 mr-4 rounded-0" type="submit">Search</button>
                  </form>
                </div>
                <div class="col-xl-6 mb-3 align-items-center">
                  <form class="form-inline mb-2">
                    <h5 class="text-center ml-md-auto pr-2">Search By:</h5>
                    <select class="form-control col-xl-6" id="docSpeciality">
                      <option>Choose...</option>
                      <option>Neurologists</option>
                      <option>Cardiologists</option>
                      <option>Permanent</option>
                      <option>Visiting</option>
                    </select>
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
                    <!--Combination of Village and District-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>DOC-001</td>
                    <td>Robiul</td>
                    <td>Male</td>
                    <td>01711-363636</td>
                    <td>Cardiologist</td>
                    <td>Floor-3, Room-308</td>
                    <td>Visiting</td>
                    <td>NewYork, USA</td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>DOC-002</td>
                    <td>Muniat</td>
                    <td>Female</td>
                    <td>01711-363636</td>
                    <td>Cardiologist</td>
                    <td>Floor-3, Room-308</td>
                    <td>Visiting</td>
                    <td>NewYork, USA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of list-of-doctors Tab -->

          <!-- Doctor Profile Tab -->
          <div class="tab-pane fade" id="doctor-profile" role="tabpanel" aria-labelledby="doctor-profile-tab">

            <div class="mx-1 my-3">
              <section>
                <div class="container-fluid">

                  <div class="row align-items-center">
                    <div class="col-8 mb-4 mb-xl-0">
                      <form class="form-inline mb-2">
                        <h6 class="text-center mt-2 col-lg-5">Doctor Registration ID:</h6>
                        <input class="form-control rounded-0 col-lg-4" type="search" placeholder="Enter RegID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0" type="submit">Search</button>
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
                            <input type="text" class="form-control" name="proDocName" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocGender">Gender: </label>
                            <input type="text" class="form-control" name="proDocGender" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocDOB">Date of Birth: </label>
                            <input type="text" class="form-control" name="proDocDOB" disabled="true">
                          </div>
                          <div class="form-group col-2">
                            <label for="proDocBloodGroup">Blood Group: </label>
                            <input type="text" class="form-control" name="proDocBloodGroup" disabled="true">
                          </div>
                          <div class="form-group col-3">
                            <label for="proDocPhoneNo">Phone Number: </label>
                            <input type="text" class="form-control" name="proDocPhoneNo" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocFatherName">Father's Name: </label>
                            <input type="text" class="form-control" name="proDocFatherName" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocMotherName">Mother's Name: </label>
                            <input type="text" class="form-control" name="proDocMotherName" disabled="true">
                          </div>

                          <!-- Address is the combination of Village, PostOffice and District -->
                          <div class="form-group col-md-6">
                            <label for="proDocAddress">Address: </label>
                            <input type="text" class="form-control" name="proDocAddress" disabled="true">
                          </div>
                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocRegID">Registration ID: </label>
                            <input type="text" class="form-control" name="proDocRegID" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocLicence">Licence No: </label>
                            <input type="text" class="form-control" name="proDocLicence" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocNID">NID No: </label>
                            <input type="text" class="form-control" name="proDocNID" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocSpeciality">Speciality: </label>
                            <input type="text" class="form-control" name="proDocSpeciality" disabled="true">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="proDocJoining">Joining Date: </label>
                            <input type="text" class="form-control" name="proDocJoining" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocPracticeRoom">Practice Room No: </label>
                            <input type="text" class="form-control" name="proDocPracticeRoom" disabled="true">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="proDocCategory">Category: </label>
                            <input type="text" class="form-control" name="proDocCategory" disabled="true">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-9">
                            <label for="proDocRemarks">Remarks (Degree/Details):</label>
                            <textarea class="form-control" id="proDocRemarks" disabled="true"></textarea>
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
              <form>
                <div class="form-row">
                  <div class="form-group col-4">
                    <label for="docName">Doctor Name: </label>
                    <input type="text" class="form-control" name="docName" placeholder="Enter name">
                  </div>
                  <div class="form-group col-2">
                    <label for="docBloodGroup">Blood Group:</label>
                    <select class="form-control" id="docBloodGroup">
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
                    <label for="docDOB">Date of Birth: </label>
                    <input type="text" class="form-control" name="docDOB" placeholder="Enter (D-M-Y)">
                  </div>
                  <div class="form-group col-4">
                    <label for="docGender">Gender: </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="docGender" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="docGender" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="docGender" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docFatherName">Father's Name: </label>
                    <input type="text" class="form-control" name="docFatherName" placeholder="Enter father name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docMotherName">Mother's Name: </label>
                    <input type="text" class="form-control" name="docMotherName" placeholder="Enter mother name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPhoneNo">Phone Number: </label>
                    <input type="text" class="form-control" name="docPhoneNo" placeholder="Enter phone no">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docRegistrationID">Doctor Registration ID: </label>
                    <input type="text" class="form-control" name="docRegistrationID"
                      placeholder="Enter doctor registration id">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docNID">Doctor NID: </label>
                    <input type="text" class="form-control" name="docNID" placeholder="Enter nid no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docSpeciality">Doctor Speciality:</label>
                    <select class="form-control" id="docSpeciality">
                      <option>Choose...</option>
                      <option>Neurologists</option>
                      <option>Cardiologists</option>
                    </select>
                  </div>


                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docLicence">Licence No: </label>
                    <input type="text" class="form-control" name="docLicence" placeholder="Enter licence no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPracticeRoom">Practice Room No: </label>
                    <input type="text" class="form-control" name="docPracticeRoom" placeholder="Enter practice room no">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docCategory">Doctor Category:</label>
                    <select class="form-control" id="docCategory">
                      <option>Choose...</option>
                      <option>Permanent</option>
                      <option>Visiting</option>
                    </select>
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="docRemarks">Remarks:</label>
                    <textarea class="form-control" id="docRemarks" placeholder="Enter degree / details"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docJoining">Joining Date: </label>
                    <input type="text" class="form-control" name="docJoining" placeholder="Enter joining date">
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docVillage">Village: </label>
                    <input type="text" class="form-control" name="docVillage" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docPostOffice">Post Office: </label>
                    <input type="text" class="form-control" name="docPostOffice" placeholder="Enter post office">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docThana">Thana: </label>
                    <input type="text" class="form-control" name="docThana" placeholder="Enter thana">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="docUpagilla">Upazilla: </label>
                    <input type="text" class="form-control" name="docUpagilla" placeholder="Enter upazilla">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="docDistrict">District: </label>
                    <input type="text" class="form-control" name="docDistrict" placeholder="Enter district">
                  </div>
                </div>

                <hr>

                <button type="Submit" name="Submit"
                  class="btn btn-primary mb-3 btn-lg doc-admission-btn">Register</button>

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