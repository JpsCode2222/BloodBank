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
            position: relative;
            bottom: -39px;
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
                          <a class="nav-link" href="./#home">Home <span class="sr-only">(current)</span></a>
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
                          <a class="nav-link" href="./search.php">Search</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./#contact_us">Contact</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="./#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login / Register
                        </a>
                        <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item bg-danger text-light" href="./admin2/index.php">Admin Login</a>
                          <a class="dropdown-item bg-danger text-light" href="./new_doner_register">Doner Register</a>
                        </div>
                      </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
   </section>

   <section id="home" >
    <form action="save_doner.php" method="POST">
    <div class="container">
      <div class="row">
                    <div class="col-lg-6">
                        <label>Enter Full Name</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="name" placeholder="Full Name">
                    </div>
                    <div class="col-lg-3">
                        <label>Enter Mobile</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="mob" placeholder="Mobile">
                    </div>
                    <div class="col-lg-3">
                        <label>Blood Bank</label>
                        <select name="bb"  class="form-control mt-2 border-primary">
                            <option selected disable >Choose</option>
                            <option >LifeSaver BB</option>
                            <option >LifeSource BB</option>
                            <option >PulseLife BB</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label>Enter Address</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="address" placeholder="Address">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label>Enter Aadhar</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" name="aad" placeholder="Aadhar">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Blood Group</label>
                        <select name="blood_group"  class="form-control mt-2 border-primary"  >
                            <option selected disable >Choose</option>
                            <option >A+</option>
                            <option >A-</option>
                            <option >B+</option>
                            <option >B-</option>
                            <option >AB+</option>
                            <option >AB-</option>
                            <option >O+</option>
                            <option >O-</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Age</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="age" placeholder="Age">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Dob</label>
                        <input autocomplete="off" Required type="date" class="form-control mt-2 border-primary" style="font-size:16px" name="dob" placeholder="DOB">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Weight</label>
                        <input autocomplete="off" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="weight" placeholder="Weight">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Blood Units (ml)</label>
                        <input autocomplete="off" value="360" type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="blood_unit" placeholder="Blood Units">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label>Any Disease</label>
                        <input autocomplete="off" value="NA" Required type="text" class="form-control mt-2 border-primary" style="font-size:16px" name="disease" placeholder="Any Disease">
                    </div>
                    <div class="col-lg-3 mt-4 pl-4">
                    <label>Gender</label>
                    <br>
                    <input autocomplete="off" Required  style="height:18px; width:15px;" class="form-check-input" type="radio" name="gender" value="Male"> Male <br>
                    <input autocomplete="off" Required  style="height:18px; width:15px;" class="form-check-input" type="radio" name="gender" value="Female"> Female
                    </div>
                    <div class="pl-4 col-lg-6 mt-3">
                      <input autocomplete="off" Required type="checkbox"  class="form-check-input" style="height:18px; width:18px;" name="confirm"> Term & Condition <br><br>
                    <input autocomplete="off" type="submit" class="btn btn-primary" value="Register"></input>
                    </div>
                    </div>
                    </div>
                  </form>
 
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