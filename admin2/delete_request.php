<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<?php
include('conn.php');
extract($_GET);
$q="DELETE FROM request_list WHERE request_id='$id'";
$res=mysqli_query($conn,$q);
if($res){
?>
<script>
    alert("Delete Successfull");
    window.location.href="request_list.php";
</script>
<?php
}
else{
  ?>
  <script>
    alert("Not Dleted");
    window.location.href="request_list.php";
</script>
<?php
}
?>