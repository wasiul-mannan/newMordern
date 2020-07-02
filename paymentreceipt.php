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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
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
                      <form class="form-inline ml-auto">
                        <input class="form-control rounded-0 col-8" type="search" placeholder="Enter Registration ID "
                          aria-label="Search">
                        <button class="btn btn-primary my-0 my-sm-0 rounded-0 col-4" type="submit">Search</button>
                      </form>
                    </div>
                  </div>

                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-5">
                        <label for="pName">Patient Name: </label>
                        <input type="text" class="form-control" id="pName" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pRegID">Registration ID: </label>
                        <input type="text" class="form-control" id="pRegID" disabled="true">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="pAge">Age: </label>
                        <input type="number" class="form-control" id="pAge" disabled="true">
                      </div>
                      
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="pGender">Gender: </label>
                        <input type="text" class="form-control" id="pGender" disabled="true">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="pPhone">Phone: </label>
                        <input type="text" class="form-control" id="pPhone" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pGuardian">Guardian Name: </label>
                        <input type="text" class="form-control" id="pGuardian" disabled="true">
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="pBlood">Blood: </label>
                        <input type="text" class="form-control" id="pBlood" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pRefferedDoctor">Reffered Doctor: </label>
                        <input type="text" class="form-control" id="pRefferedDoctor" disabled="true">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="pHospitalRoom">Hospital Room: </label>
                        <input type="text" class="form-control" id="pHospitalRoom" disabled="true">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="pAdmissionDate">Admission Date: </label>
                        <input type="text" class="form-control" id="pAdmissionDate" disabled="true">
                      </div>
                      <div class="form-group col-md-8">
                        <label for="pAddress">Address: </label>
                        <input type="text" class="form-control" id="pAddress" disabled="true">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="pReleaseDate">Release Date: </label>
                        <input type="text" class="form-control" id="pReleaseDate" disabled="true">
                      </div>
                      <div class="form-group col-md-8">
                        <label for="pRemarks">Remarks: </label>
                        <textarea class="form-control" id="pRemarks" placeholder="Enter any remarks"></textarea>
                      </div>
                    </div>

                    
                  </form>

                </div>
                <!-- End of Patient Information Section -->

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
                        <td><input type="number" name="radmissionFees" value=0></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Consultant Fees</td>
                        <td><input type="number" step="0.01" name="rconsultanctFees" value=0>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>O.T.F.</td>
                        <td><input type="number" step="0.01" name="rotfFees" value=0></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Surgeon Fees</td>
                        <td><input type="number" step="0.01" name="rsurgeonFees" value=0></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Anesthetist Fees</td>
                        <td><input type="number" step="0.01" name="ranesthetistFees" value=0>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Assist Fees</td>
                        <td><input type="number" step="0.01" name="rassistFees" value=0></td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Service Charge</td>
                        <td><input type="number" step="0.01" name="rserviceFees" value=0></td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Medicine Cost</td>
                        <td><input type="number" step="0.01" name="rmedicineFees" value=0></td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Bed/Cabin Rent</td>
                        <td><input type="number" step="0.01" name="rbedFees" value=0></td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Others</td>
                        <td><input type="number" step="0.01" name="rothersFees" value=0></td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>Vat</td>
                        <td><input type="number" step="0.01" name="rvat" value=0></td>
                      </tr>

                      <tr>
                        <td class="text-center" colspan="2">Discount : </td>
                        <td><input type="number" step="0.01" name="rdiscount" value=0></td>
                      </tr>

                      <tr>
                        <td colspan="2">Advance Payment : </td>
                        <td><input type="number" step="0.01" name="radvanced" disabled="true"></td>
                      </tr>


                    </table>
                  </div>

                  <div class="form-inline justify-content-center">
                    <button type="submit" class="btn btn-primary rounded-0 receipt-btn" name="calculate">Calculate</button>
                  </div>

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