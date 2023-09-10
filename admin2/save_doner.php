<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<?php
include("conn.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['confirm']) && $_POST['age']>=18 && $_POST['weight']>=50 && $_POST['hb']>12){
    extract($_POST);
    $q="INSERT INTO `doner_list` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`hb`,`bb`) VALUES
    (NULL, '$name', '$gender', '$blood_group','$address', '$disease', '$aadhar', '$mobile','$dob', current_timestamp(), '$blood_unit','$admin','$age','$weight','$hb','$bb')";
   $res=mysqli_query($conn,$q);
     $q="INSERT INTO `all_doner_list` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`hb`,`bb`) VALUES
   (NULL, '$name', '$gender', '$blood_group','$address', '$disease', '$aadhar', '$mobile','$dob', current_timestamp(), '$blood_unit','$admin','$age','$weight','$hb','$bb')";
  $res1=mysqli_query($conn,$q);
  if($res && $res1 && $age >= 18 && $hb > 12 && $weight >= 50){
    ?>
    <script>
      alert("Added Sussess");
      window.location.href="doner_list.php";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Physically unfit Not Added");
      window.location.href="add_doner.php";
    </script>
    <?php
  }
}
  else{
    ?>
    <script>
      alert("Physically unfit Not Added ");
      window.location.href="add_doner.php";
    </script>
    <?php
  }
}

?>