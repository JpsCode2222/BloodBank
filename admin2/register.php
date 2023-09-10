<?php
$showAlert=false;
$showErr=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
include('conn.php');
$admin = $_POST['admin'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$exist=false;
// Check user allready exist or not
$existq="SELECT * FROM `admin_login@123` WHERE `admin_name`='$admin'";
$result=mysqli_query($conn,$existq);
$numExistRows=mysqli_num_rows($result);
if($numExistRows > 0){
  // $exist=true;
  $showErr="Username allready exist";

}
else{
  $exist=false;

// check pass == cpass
if(($pass == $cpass)){
  $hash = password_hash($pass, PASSWORD_DEFAULT);
$q="INSERT INTO `admin_login@123` (`admin_name`, `admin_pass`, `datetime`) VALUES ('$admin', '$hash', current_timestamp())";
$res = mysqli_query($conn,$q);
if($res){
  $showAlert = true;
}
}
else{
  $showErr="Password do not match";
}
}
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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
          <?php
             if($showErr){
               echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Login Failed</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
             }
             if($showAlert){
               echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Register Success</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
             }
             ?>
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                <h2 style="color: blueviolet;">Admin Sign up</h2>
                </div>
                <h4>New register here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="POST">
                  <div class="form-group">
                    <input type="text" name="admin" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="cpass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>