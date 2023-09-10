<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<?php
include('conn.php');
extract($_POST);
print_r($_POST);
$q="INSERT INTO campain(id,date,time,mobile,venue) VALUES (NULL,'$date','$stime - $etime','$mobile','$venue')";
$res=mysqli_query($conn,$q);
if($res){
    ?>
    <script>
      alert("Added Sussess");
      window.location.href="campain_list.php";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Not Added");
      window.location.href="add_new_campain.php";
    </script>
    <?php
  }
?>