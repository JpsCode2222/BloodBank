<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
include('conn.php');
extract($_POST);
$q="UPDATE doner_list SET doner_name='$name', gender='$gender', blood_group='$blood_group', address='$address', disease='$disease', aadhar='$aadhar', mobile='$mobile', dob='$dob', date_time=current_timestamp(), blood_unit='$blood_unit', manager_staff='$admin', age='$age', weight='$weight', hb='$hb',bb='$bb' WHERE  doner_id='$doner_id'";
$query="UPDATE all_doner_list SET doner_name='$name', gender='$gender', blood_group='$blood_group', address='$address', disease='$disease', aadhar='$aadhar', mobile='$mobile', dob='$dob',blood_unit='$blood_unit', manager_staff='$admin', age='$age', weight='$weight', hb='$hb', bb='$bb' WHERE doner_id='$doner_id'";
if($age >= 18 && $hb > 12 && $weight >= 50){
$result=mysqli_query($conn,$q);
$result=mysqli_query($conn,$query);
?>
<script>
    alert("Update Successfull");
    window.location.href="doner_list.php";
</script>
<?php
}
else{
?>
<script>
    alert("Not Updated");
    window.location.href="doner_list.php";
</script>
<?php
}
?>