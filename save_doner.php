<?php
include("admin2/conn.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['confirm']) && $_POST['age'] >= '18' && $_POST['weight'] >= '50'){
  extract($_POST);
  $admin="Doner";
  $q="INSERT INTO `doner_request` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`bb`) VALUES
   (NULL, '$name', '$gender', '$blood_group', '$address', '$disease', '$aad', '$mob', '$dob', current_timestamp(), '$blood_unit', '$admin', '$age', '$weight', '$bb')";
  $res=mysqli_query($conn,$q);
  if($res){
    ?>
    <script>
      alert("Registration Sussess");
      window.location.href="index.html";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Registration Failed");
      window.location.href="new_doner_register.php";
    </script>
    <?php
  }
}
  else{ 
    ?>
    <script>
      alert("Registration Failed");
      window.location.href="new_doner_register.php";
    </script>
    <?php
  }
}
?>
