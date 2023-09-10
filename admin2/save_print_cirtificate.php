<!doctype html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Rye&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Lexend+Giga:wght@500&family=Rye&display=swap" rel="stylesheet">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    @media print {
      body * {
        visibility: hidden;
      }

      .container * {
        visibility: visible;
      }

      .img2 {
        display: none;
      }
    }

    #bg_cirtificate {
      background-image: url('assets/images/cirtificate/cirtificate.jpg');
      height: auto;
      width: 100%;
      background-size: 100% 100%;
      background-repeat: no-repeat;
      display: flex;
      flex-direction: column;
      border: 30px inset blueviolet;
    }
    .img2 {
      background-image: url('assets/images/img1.png');
      height: 100px;
      width: 100px;
      position: absolute;
      background-size: 100% 100%;
      background-repeat: no-repeat;
      float: right;
    }
    @media (max-width:1000px) {
      .img2{
        display:none;
      }
    }
  </style>
</head>

<body>
  <?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
  <div class="p-4">
  <button class="btn hide_btn text-light" style="background-color: blueviolet;" onclick="window.print()">Print</button>
  <a href="home.php" class="btn btn-dark">back</a>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
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
          <div class="col-lg-12 p-5" id="bg_cirtificate">
            <div class="row">
              <div class="col-lg-10">
                <h2 class="text-center h1 text-primary"
                  style="font-family: 'Caveat', cursive;font-family: 'Rye', cursive;border-bottom: 2px solid blueviolet;">
                  Cirtificate of Blood Donation</h2>
              </div>
              <div class="col-lg-2 ">
                <div class="img2"></div>
              </div>
              <h2 class="ml-4 mt-4 h4 text-primary" style="font-family: 'Lexend Giga', sans-serif;">Name :
                <?php echo $row['doner_name']?>
              </h2>
            </div>
            <p class="text-center mt-3 h3 " style="font-family: 'Caveat', cursive;">
              This certificate is presented to <span class="text-primary">
                <?php echo $row['doner_name']?>
              </span> in recognition of their generous blood donation at <span class="text-primary"> LifeSaver Blood
                Bank Ahmednagar </span> . Your selfless act of donating blood has the potential to save lives and make a
              positive impact on the community. Thank you for your kindness and dedication to helping others.
            </p>
            <p>
              <span class="float-start">Date :
                <?php echo $row['date_time']?>
              </span> <span class="float-end">Sign : <span class="text-primary">
                  <?php echo $row['manager_staff']?>
                </span></span>
            </p>
            </p>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>