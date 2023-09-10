<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href=""><h2 style="color: blueviolet;">Admin</h2></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['admin']?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include('navbar.php')?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add New Doner : </h3>
            </div>
           <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <div class="row">
                   <div class="col-lg-6">
                        <form action="save_doner.php" method="post">
                        <label>Enter Full Name</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="name" placeholder="Full Name">
                    </div>
                    <div class="col-lg-3">
                        <label>Enter Mobile</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="mobile" placeholder="Mobile">
                    </div>
                    <div class="col-lg-3">
                        <label>Blood Bank</label>
                        <select name="bb"  class="form-control mt-2 border-primary" style="font-size:16px;height:50px">
                            <option selected disable >Choose</option>
                            <option >LifeSaver BB</option>
                            <option >LifeSource BB</option>
                            <option >PulseLife BB</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label>Enter Address</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="address" placeholder="Address">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label>Enter Aadhar</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="aadhar" placeholder="Aadhar">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Blood Group</label>
                        <select name="blood_group"  class="form-control mt-2 border-primary" style="font-size:16px;height:50px" >
                            <option>Choose</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Weight</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="weight" placeholder="Weight">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Dob</label>
                        <input type="date" class="form-control mt-2 border-primary" style="font-size:16px" name="dob" placeholder="DOB">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Age</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="age" placeholder="Age">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Blood Units (ml)</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="blood_unit" placeholder="Blood Units">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Any Disease</label>
                        <input type="hidden" name="admin" value="<?php echo $_SESSION['admin']?>">
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="disease" placeholder="Any Disease">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Hemoglobin</label>
                        <input type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="hb" placeholder="Hb">
                    </div>
                    <div class="col-lg-3 mt-4">
                    <label>Gender</label>
                    <br>
                    <br>
                    <input class="form-check-input" type="radio" name="gender" value="Male"> Male <br><br>
                    <input class="form-check-input" type="radio" name="gender" value="Female"> Female
                    </div>
                    <div class="col-lg-6 mt-3">
                      <input type="checkbox"  class="form-check-input" name="confirm"> Term & Condition <br><br>
                    <input type="submit" class="btn btn-primary" value="Add Doner"></input>
                    </div>
                    </form>
                   </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
<?php include('footer.php')?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>