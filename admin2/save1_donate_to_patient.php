<?php
extract($_GET);
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
include('conn.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['confirm']) && $_POST['blood_group']==$_POST['d_bg']){
    extract($_POST);
  $p_name=$_POST['name'];
  $p_aadhar=$_POST['aadhar'];
  $p_gender=$_POST['gender'];
  $p_blood_group=$_POST['blood_group'];
  $p_mobile=$_POST['mobile'];
  $p_admin=$_SESSION['admin'];
  $p_blood_unit=$_POST['blood_unit'];
  $d_name=$_POST['d_name'];
  $d_mob=$_POST['d_mob'];
  $d_aad=$_POST['d_aadhar'];
  $d_bg=$_POST['d_bg'];
  $d_ms=$_POST['d_ms'];
  $d_id=$_POST['d_id'];
  $q="INSERT INTO donate(p_name,p_blood_group,p_mobile,p_aadhar,p_blood_unit,d_name,d_blood_group,d_mobile,d_aadhar,m_s,date_time)VALUES
   ('$p_name','$p_blood_group','$p_mobile','$p_aadhar','$p_blood_unit','$d_name','$d_bg','$d_mob','$d_aad','$d_ms',current_timestamp())";
  $res=mysqli_query($conn,$q);
  if($res){
    $q="DELETE FROM doner_list WHERE doner_id='$d_id'";
    $result=mysqli_query($conn,$q);
    if($result){
        ?>
    <script>
      alert("Donation Sussess");
      window.location.href="donate_list.php";
    </script>
    <?php
  }
    }
  else{
    ?>
    <script>
      alert(" Donation Incomlete");
      window.location.href="donate_blood_to_patient.php";
    </script>
    <?php
  }
}
  else{
    ?>
    <script>
    alert("Blood Group Not Match or Donation Incomlete");
    window.location.href="donate_blood_to_patient.php";
    </script>
    <?php

  }
}

?>