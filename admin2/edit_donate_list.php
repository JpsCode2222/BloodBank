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
              <h3 class="page-title"  style="font-weight:bold;"> Edit Donation Details : </h3>
            </div>
           <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php
                    include('conn.php');
                    extract($_GET);
                    $q="SELECT * FROM donate WHERE p_id='$id'";
                    $res=mysqli_query($conn,$q);
                    if($res){
                        while($row = mysqli_fetch_assoc($res)){
                            ?>
                            <form action="update_donate_list.php" method="POST">
                   <div class="row">
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Patient Name</label>
                        <input type="hidden" name='p_u_id' value="<?php echo $row['p_id']?>">
                        <input class="form-control mt-2" style="font-size:15px;height:40px;" type="text" name="p_name" value="<?php echo $row['p_name'] ?>" placeholder="Patient Name">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Doner Name</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="d_name" value="<?php echo $row['d_name'] ?>" placeholder="Doner Name">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Patient Mobile</label>
                        <input class="form-control mt-2" style="font-size:15px;height:40px;" type="text" name="p_mobile" value="<?php echo $row['p_mobile'] ?>" placeholder="Patient Mobile">
                    </div>
                  <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Doner Mobile</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="d_mobile" value="<?php echo $row['d_mobile'] ?>" placeholder="Doner Mobile">
                    </div>
                     <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Patient Bloodgroup</label>
                        <input class="form-control mt-2" style="font-size:15px;height:40px;" type="text" name="p_blood_group" value="<?php echo $row['p_blood_group'] ?>" placeholder="Patient Bloodgroup">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Doner Bloodgroup</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="d_blood_group" value="<?php echo $row['d_blood_group'] ?>" placeholder="Doner Bloodgroup">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Patient Aadhar</label>
                        <input class="form-control mt-2" style="font-size:15px;height:40px;" type="text" name="p_aadhar" value="<?php echo $row['p_aadhar'] ?>" placeholder="Patient Aadhar">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Doner Aadhar</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="d_aadhar" value="<?php echo $row['d_aadhar'] ?>" placeholder="Doner Aadhar">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Patient blod Unit</label>
                        <input class="form-control mt-2" style="font-size:15px;height:40px;" type="text" name="p_blood_unit" value="<?php echo $row['p_blood_unit'] ?>" placeholder="Patient blod">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Date Time</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="date_time" value="<?php echo $row['date_time'] ?>" placeholder="Date Time">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label style="font-weight:bold;">Manager Staff</label>
                        <input class="form-control mt-2" readonly style="font-size:15px;height:40px;" type="text" name="m_s" value="<?php echo $row['m_s'] ?>" placeholder="Manager Staff">
                    </div>
                    <br>
                    <div class="col-lg-6">
                    <button class="btn btn-warning mt-4">Update</button>
                    </div>
                  </div>
                  </form>
                            <?php
                        }
                    }
                    ?>
                   
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