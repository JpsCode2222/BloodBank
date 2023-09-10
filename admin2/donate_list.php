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
              <h3 class="page-title"> Doner List : </h3>
            </div>
           <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <div class="row">
                    <div class="col-lg-12">
                    <form  method="GET">
                      <div class="input-group mb-3">
                              <input type="text" name="data" class="form-control" placeholder="Search">
                              <div class="input-group-append">
                                  <input class="btn btn-success" name="go" type="submit" value="Go"></input>
                              </div>
                          </div>
                      </form>
                                <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th>sr.no</th>
                              <th>Doner Name</th>
                              <th>Bloodgroup</th>
                              <th>D Mobile</th>
                              <th>D Aadhar</th>
                              <th>Patient Name</th>
                              <th>P Mobile</th>
                              <th>P Aadhar</th>
                              <th>P blod Unit</th>
                              <th>Manager Staff</th>
                              <th>Date Time</th>
                              <th>Edit</th>
                            </tr>
                          </thead>
                          <tbody>
                                <?php
                                     if(isset($_GET['go'])=="Go"){
                                      if($_SERVER['REQUEST_METHOD'] == "GET"){
                                          include('conn.php');
                                          extract($_GET);
                                          $q="SELECT * FROM donate WHERE p_name='$data' OR p_blood_unit='$data' OR d_name='$data' OR m_s='$data' OR date_time='$data'";
                                          $res=mysqli_query($conn,$q);
                                          $i=1;
                                          while($row=mysqli_fetch_assoc($res)){
                                              echo "<tr><td>".$i."</td>";
                                              echo "<td>".$row['d_name']."</td>";
                                              echo "<td>".$row['d_blood_group']."</td>";
                                              echo "<td>".$row['d_mobile']."</td>";
                                              echo "<td>".$row['d_aadhar']."</td>";
                                              echo "<td>".$row['p_name']."</td>";
                                              echo "<td>".$row['p_mobile']."</td>";
                                              echo "<td>".$row['p_aadhar']."</td>";
                                              echo "<td>".$row['p_blood_unit']."</td>";
                                              echo "<td>".$row['m_s']."</td>";
                                              echo "<td>".$row['date_time']."</td>";
                                              echo "<td>
                                              <a href='edit_donate_list.php?id=".$row['p_id']."'> <button class='btn btn-warning btn-sm mr-2'>Edit</button></a>
                                              </td>";
                                              $i++;
                                          }
                                          $num=mysqli_num_rows($res);
                                          if($_GET['data']=="" || $num==0){
                                            echo "No Records Found";
                                          }
                                      }
                                  }
                                  else{
                                  include('conn.php');
                                  $q="SELECT * FROM `donate`";
                                  $res=mysqli_query($conn,$q);
                                  $i=1;
                                  while($row=mysqli_fetch_assoc($res)){
                                      echo "<tr><td>".$i."</td>";
                                      echo "<td>".$row['d_name']."</td>";
                                      echo "<td>".$row['d_blood_group']."</td>";
                                      echo "<td>".$row['d_mobile']."</td>";
                                      echo "<td>".$row['d_aadhar']."</td>";
                                      echo "<td>".$row['p_name']."</td>";
                                      echo "<td>".$row['p_mobile']."</td>";
                                      echo "<td>".$row['p_aadhar']."</td>";
                                      echo "<td>".$row['p_blood_unit']."</td>";
                                      echo "<td>".$row['m_s']."</td>";
                                      echo "<td>".$row['date_time']."</td>";
                                      echo "<td>
                                      <a href='edit_donate_list.php?id=".$row['p_id']."'> <button class='btn btn-warning btn-sm mr-2'>Edit</button></a>
                                      </td>";
                                      $i++;
                                  }
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
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