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

  <title>Modern Hospital</title>
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
                <h4 class="text-light mb-0">Dashboard</h4>
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

  <!-- cards -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="row pt-md-5 mt-md-3 mb-5">
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                    <div class="text-right text-secondary">
                      <h5>Sales</h5>
                      <h3>$135,000</h3>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                  <span>Update Now</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                    <div class="text-right text-secondary">
                      <h5>Expenses</h5>
                      <h3>$39,000</h3>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                  <span>Update Now</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-users fa-3x text-info"></i>
                    <div class="text-right text-secondary">
                      <h5>Users</h5>
                      <h3>15,000</h3>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                  <span>Update Now</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-chart-line fa-3x text-danger"></i>
                    <div class="text-right text-secondary">
                      <h5>Visitors</h5>
                      <h3>45,000</h3>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                  <span>Update Now</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of cards -->


  <!-- activities / quick post -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="row align-items-center mb-5">
            <div class="col-xl-5">
              <div class="card rounded">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="card bg-light">
                        <i class="far fa-calendar-alt fa-8x text-warning d-block m-auto py-3"></i>
                        <div class="card-body">
                          <p class="card-text text-center font-weight-bold text-uppercase">Mon, May 26</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card bg-light">
                        <i class="far fa-clock fa-8x text-danger d-block m-auto py-3"></i>
                        <div class="card-body">
                          <p class="card-text text-center font-weight-bold text-uppercase">4:50 am</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of activities / quick post -->

  

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