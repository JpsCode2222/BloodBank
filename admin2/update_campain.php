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
$q="UPDATE campain SET date='$date',time='$time',mobile='$mobile',venue='$venue' WHERE id='$id'";
$res=mysqli_query($conn,$q);
if($res){
    ?>
    <script>
        alert("Update Success");
        window.location.href="campain_list.php";
    </script>
        <?php
}
else{
    ?>
    <script>
        alert("Not Updated");
        window.location.href="campain_list.php";
    </script>
        <?php
}
?>
