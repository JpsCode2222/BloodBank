<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSaver Blood Bank</title>
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <!-- font Awesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Lexend+Giga:wght@500&family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Spice&family=Caveat&family=Lexend+Giga:wght@500&family=Nanum+Myeongjo&family=Rye&display=swap" rel="stylesheet">
    <style>
        #nav{
            position: sticky;
            top: 0px;
            z-index: 9999;
        }
        footer{
            position: fixed;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }
    </style>
</head>
<body>
   <section id="nav" class="bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                    <a id="logo1" class="navbar-brand mr-5" href="#" style="font-family: 'Caveat', cursive; font-size: 35px;">LifeSaver Blood Bank</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                          <a class="nav-link" href="./#home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./#services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./campaign.php">Campaign</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./#donation_process">Process</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./#gallary">Gallary</a>
                    </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="./search.php">Search</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./#contact_us">Contact</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login / Register
                        </a>
                        <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item bg-danger text-light" href="./admin2/index.php">Admin Login</a>
                          <a class="dropdown-item bg-danger text-light" href="./new_doner_register.php">Doner Register</a>
                        </div>
                      </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
   </section>

   <section id="home">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form action="search.php" method="GET">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group mb-3 mt-4">
                        <select name="bg" class="form-control">
                            <option>Blood Group</option>
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
                  </div>
                  <div class="col-lg-6">
                  <div class="input-group mb-3 mt-4">
                        <select name="bb" class="form-control">
                            <option>Blood Bank</option>
                            <option>LifeSaver BB</option>
                            <option>LifeSource BB</option>
                            <option>PulseLife BB</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-success" name='s'>Search</button>
                        </div>
                    </div>
                  </div>
                </form>
                <?php
                    $conn=mysqli_connect('localhost','root','','bloodbankproject');
                  
                    if($_SERVER['REQUEST_METHOD']=='GET'){
                      ?>
                      <table width='100%'>
                      <?php
                      if(isset($_GET['bg']) && $_GET['bb'] !='Blood Bank'){
                        extract($_GET);
                        $q="SELECT * FROM doner_list WHERE blood_group='$bg' AND bb='$bb'";
                        $res=mysqli_query($conn,$q);
                        $cnt=mysqli_num_rows($res);
                        if($cnt>=1){
                          echo "<h5 class='text-success'><mark>$bg</mark> Blood group is available at <mark>$bb</mark></h5>";
                          ?>
                          <button><a href="././search.php">Back</a></button>
                          <?php
                      }
                      else{
                        echo "<h5 class='text-danger'><mark>$bg</mark> Blood1 group is Not available at <mark>$bb</mark></h5>";
                        ?>
                        <button><a href="./search.php">Back</a></button>
                        <?php
                    }
                    } 
                    elseif(isset($_GET['bg']) && $_GET['bb'] == 'Blood Bank') {
                      extract($_GET);
                      $lsaverq="SELECT * FROM doner_list WHERE blood_group='$bg' AND bb='LifeSaver BB'";
                      $lsourceq="SELECT * FROM doner_list WHERE blood_group='$bg' AND bb='LifeSource BB'";
                      $plifeq="SELECT * FROM doner_list WHERE blood_group='$bg' AND bb='PulseLife BB'";
                      $res1=mysqli_query($conn,$lsaverq);
                      $res2=mysqli_query($conn,$lsourceq);
                      $res3=mysqli_query($conn,$plifeq);
                      $cnt1=mysqli_num_rows($res1);
                      $cnt2=mysqli_num_rows($res2);
                      $cnt3=mysqli_num_rows($res3);
                      if($cnt1){
                        echo "<tr><th><h5 class='text-success'><mark>$bg</mark> Blood group is available at <mark>LifeSaver Blood Bank</mark><h5><th></tr>";
                    }
                      else{
                      echo "<tr><th><h5 class='text-danger'><mark>$bg</mark> Blood group is not available at <mark> LifeSaver Blood Bank</mark></h5></th></tr>";
                    }
                        if($cnt2){
                          echo "<tr><th><h5 class='text-success'><mark>$bg</mark> Blood group is available at <mark>LifeSource Blood Bank</mark><h5><th></tr>";
                      }
                        else{
                      echo "<tr><th><h5 class='text-danger'><mark>$bg</mark> Blood group is not available at <mark> LifeSource Blood Bank</mark></h5></th></tr>";
                    }
                      if($cnt3){
                        echo "<tr><th><h5 class='text-success'><mark>$bg</mark> Blood group is available at <mark>PulseLife Blood Bank</mark><h5><th></tr>";
                    }
                    else{
                      echo "<tr><th><h5 class='text-danger'><mark>$bg</mark> Blood group is not available at <mark>PulseLife Blood Bank</mark></h5></th></tr>";
                    }
                    }
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </section>

   <footer class="bg-danger">
    <div class="container">
      <div class="row bg-danger text-light">
        <div class="col-lg-6">
          <ul style="list-style-type: none;" class="mt-3">
            <li><span class="h6">Contact us</span></li>
            <li><span class="h6">Address</span> : ABC complex, 2nd floor, ABC road, Ahmednagar, Maharashtra 414002</li>
            <li><span class="h6">Email</span> : lifesaverbloodbank@gmail.com</li>
            <li><span class="h6">Website</span> : lifesaver.com</li>
          </ul>
        </div>
        <div class="col-lg-6 text-center p-4" style="margin-top: -40px;">
          <button class="btn btn-danger ml-5 btn-lg"><i class="fa fa-facebook "></i></button>
          <button class="btn btn-danger ml-5 btn-lg"><i class="fa fa-whatsapp "></i></button>
          <button class="btn btn-danger ml-5 btn-lg"><i class="fa fa-youtube "></i></button>
          <button class="btn btn-danger ml-5 btn-lg"><i class="fa fa-instagram "></i></button>
          <br>
          <h6 class="ml-4 mt-4">Copyright © Jp'sTech.com | All right reserved.</h6>
        </div>
      </div>
    </div>
   </footer>
</body>
</html>