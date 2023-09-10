<?php
$conn=mysqli_connect('localhost','root','','bloodbankproject');
if($conn){
if($_SERVER['REQUEST_METHOD']=="POST"){
    extract($_POST);
    $q="INSERT INTO request_list(request_id,name,email,mobile,msg,time_date) VALUES(NULL,'$name','$email','$mobile','$msg',current_timestamp())";
    $res=mysqli_query($conn,$q);
    if($res){
        ?>
    <script>
      alert("Request Send Successfully");
      window.location.href="index.html";
    </script>
    <?php
    }
}
}
else{
    echo "Connection Failed";
}
?>