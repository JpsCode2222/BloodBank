<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<?php
include("conn.php");
extract($_GET);
$q="SELECT * FROM doner_request WHERE doner_id='$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($res);
extract($row);
print_r($row);
$admin=$_SESSION['admin'];
$q="INSERT INTO `doner_list` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`hb`,`bb`) VALUES
   (NULL, '$doner_name', '$gender', '$blood_group','$address', '$disease', '$aadhar', '$mobile','$dob', current_timestamp(), '$blood_unit','$admin','$age','$weight','$hb','$bb')";
  $res=mysqli_query($conn,$q);

  $query="INSERT INTO `all_doner_list` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`hb`,`bb`) VALUES
   (NULL, '$doner_name', '$gender', '$blood_group','$address', '$disease', '$aadhar', '$mobile','$dob', current_timestamp(), '$blood_unit','$admin','$age','$weight','$hb','$bb')";
  $result=mysqli_query($conn,$query);
  
  if($res && $result){
    $query="INSERT INTO `all_doner_request_list` (`doner_id`, `doner_name`, `gender`, `blood_group`, `address`, `disease`, `aadhar`, `mobile`, `dob`, `date_time`, `blood_unit`, `manager_staff`,`age`,`weight`,`hb`,`bb`) VALUES
    (NULL, '$doner_name', '$gender', '$blood_group','$address', '$disease', '$aadhar', '$mobile','$dob', current_timestamp(), '$blood_unit','$manager_staff','$age','$weight','$hb','$bb')";
   $result=mysqli_query($conn,$query);

    $q="DELETE FROM doner_request WHERE doner_id='$id'";
    $res=mysqli_query($conn,$q);
    
    ?>
    <script>
      alert("Added Successfully");
      window.location.href="doner_list.php";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Not Added");
      window.location.href="doner_rlist.php";
    </script>
    <?php
  }
?>