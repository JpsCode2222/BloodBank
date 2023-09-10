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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Rye&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Lexend+Giga:wght@500&family=Rye&display=swap" rel="stylesheet">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
        @media print{
      body *{
        visibility: none;
      }
      .container *{
        visibility: visible;
      }
      .img2{
        display: none;
      }
      #bg_cirtificate{
            background-image:url('assets/images/cirtificate/cirtificate.jpg');
            height:500px;
            width:100%;
            background-size: 100% 100%;
            background-repeat:no-repeat;
            display: flex;
            flex-direction: column;
            border: 30px inset blueviolet;
        }
        .img2{
        background-image:url('assets/images/img1.png');
            height:100px;
            width:100px;
            position: absolute;
            background-size: 100% 100%;
            background-repeat:no-repeat;
            float: right;
        }
        .print_view{
            display:block;
        }
    }
   
        #bg_cirtificate{
            background-image:url('assets/images/cirtificate/cirtificate.jpg');
            height:450px;
            width:70%;
            background-size: 100% 100%;
            background-repeat:no-repeat;
            display: flex;
            flex-direction: column;
            border: 30px inset blueviolet;
        }
        .img2{
        background-image:url('assets/images/img1.png');
            height:100px;
            width:100px;
            position: absolute;
            background-size: 100% 100%;
            background-repeat:no-repeat;
            float: right;
        }
    </style>
</head>
<div class="container print_view" style="display:none;">
        <div class="row">
            <div class="col-lg-12">
            <?php
                                    include('conn.php');
                                    extract($_GET);
                                    $q="SELECT * FROM doner_list WHERE doner_id='$id'";
                                    $res=mysqli_query($conn,$q);
                                    while($row=mysqli_fetch_assoc($res)){
                                        $doner_name=$row['doner_name'];
                                        $blood_group=$row['blood_group'];
                                        $date_time=$row['date_time'];
                                        $manager_staff=$row['manager_staff'];
                                        ?>
                                    <div class="row">
                                        <div class="col-lg-12" id="bg_cirtificate">
                                           <div class="row">
                                            <div class="col-lg-10">
                                                <h2 class="text-center h1 text-primary" style="font-family: 'Caveat', cursive;font-family: 'Rye', cursive;border-bottom: 2px solid blueviolet;">Cirtificate of Blood Donation</h2>
                                            </div>
                                            <div class="col-lg-2 ">
                                                <div class="img2"></div>
                                            </div>
                                            <h2 class="ml-4 mt-4 h4 text-primary" style="font-family: 'Lexend Giga', sans-serif;">Name :<?php echo $row['doner_name']?> </h2>
                                           </div>
                                           <p class="text-center mt-3 h3 " style="font-family: 'Caveat', cursive;">
                                           This certificate is presented to <span class="text-primary"><?php echo $row['doner_name']?> </span> in recognition of their generous blood donation at <span class="text-primary"> LifeSaver Blood Bank Ahmednagar </span> . Your selfless act of donating blood has the potential to save lives and make a positive impact on the community. Thank you for your kindness and dedication to helping others.
                                    </p>
                                    <p>
                                             <span class="float-start">Date : <?php echo $row['date_time']?></span> <span class="float-end">Sign : <span class="text-primary"><?php echo $row['manager_staff']?></span></span> </p>
                                        </p>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
            </div>
        </div>
    </div>

<body>
    
    <div class="container-scroller hide_content">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <h2 style="color: blueviolet;">Admin</h2>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="assets/images/faces/face1.jpg" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">
                                    <?php echo $_SESSION['admin']?>
                                </p>
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include('navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                    <?php
                                    include('conn.php');
                                    extract($_GET);
                                    $q="SELECT * FROM doner_list WHERE doner_id='$id'";
                                    $res=mysqli_query($conn,$q);
                                    while($row=mysqli_fetch_assoc($res)){
                                        $doner_name=$row['doner_name'];
                                        $blood_group=$row['blood_group'];
                                        $date_time=$row['date_time'];
                                        $manager_staff=$row['manager_staff'];
                                        ?>
                        <h3 class="page-title">Cirtificate : <a class="btn btn-primary" href="save_print_cirtificate.php?id=<?php echo $row['doner_id'] ?>">Print</a></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body card_body">
                                    <div class="row">
                                        <div class="col-lg-12 p-5" id="bg_cirtificate">
                                           <div class="row">
                                            <div class="col-lg-10">
                                                <h2 class="text-center h1 text-primary" style="font-family: 'Caveat', cursive;font-family: 'Rye', cursive;border-bottom: 2px solid blueviolet;">Cirtificate of Blood Donation</h2>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="img2"></div>
                                            </div>
                                            <h2 class="ml-4 mt-4 h4 text-primary" style="font-family: 'Lexend Giga', sans-serif;">Name :<?php echo $row['doner_name']?> </h2>
                                           </div>
                                           <p class="text-center mt-3 h3 " style="font-family: 'Caveat', cursive;">
                                           This certificate is presented to <span class="text-primary"><?php echo $row['doner_name']?> </span> in recognition of their generous blood donation at <span class="text-primary"> LifeSaver Blood Bank Ahmednagar </span> . Your selfless act of donating blood has the potential to save lives and make a positive impact on the community. Thank you for your kindness and dedication to helping others.
                                    </p>
                                    <p>
                                             <span class="float-start">Date : <?php echo $row['date_time']?></span> <span class="float-end">Sign : <span class="text-primary"><?php echo $row['manager_staff']?></span></span> </p>
                                        </p>
                                        </div>
                                    </div>
                                    <?php
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
