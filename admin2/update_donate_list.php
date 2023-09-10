<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<?php
include('conn.php');
print_r($_POST);
extract($_POST);
$q="UPDATE donate SET p_name='$p_name',p_blood_group='$p_blood_group',p_mobile='$p_mobile',p_aadhar='$p_aadhar',p_blood_unit='$p_blood_unit',d_name='$d_name',d_blood_group='$d_blood_group',d_mobile='$d_mobile',d_aadhar='$d_aadhar',m_s='$m_s',date_time=current_timestamp() WHERE p_id='$p_u_id'";
$res=mysqli_query($conn,$q);
if($res && $p_blood_group == $d_blood_group){
    ?>
    <script>
        alert("Update Success");
        window.location.href="donate_list.php";
    </script>
        <?php
}
else{
    ?>
    <script>
        alert("Not Updated");
        window.location.href="donate_list.php";
    </script>
        <?php
}
?>
