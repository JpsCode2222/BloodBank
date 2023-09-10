<?php
include('./conn.php');
// A+ count
$qAP="SELECT * FROM doner_list WHERE blood_group='A+'";
$res=mysqli_query($conn,$qAP);
$Ap=mysqli_num_rows($res);

// A- count
$qAN="SELECT * FROM doner_list WHERE blood_group='A-'";
$res1=mysqli_query($conn,$qAN);
$An=mysqli_num_rows($res1);

// B+ count
$qBP="SELECT * FROM doner_list WHERE blood_group='B+'";
$res2=mysqli_query($conn,$qBP);
$Bp=mysqli_num_rows($res2);

// B- count
$qBN="SELECT * FROM doner_list WHERE blood_group='B-'";
$res3=mysqli_query($conn,$qBN);
$Bn=mysqli_num_rows($res3);

// AB+ count
$qABP="SELECT * FROM doner_list WHERE blood_group='AB+'";
$res4=mysqli_query($conn,$qABP);
$ABp=mysqli_num_rows($res4);

// AB- count
$qABN="SELECT * FROM doner_list WHERE blood_group='AB-'";
$res5=mysqli_query($conn,$qABN);
$ABn=mysqli_num_rows($res5);

// O+ count
$qOP="SELECT * FROM doner_list WHERE blood_group='O+'";
$res6=mysqli_query($conn,$qOP);
$Op=mysqli_num_rows($res6);

// O- count
$qON="SELECT * FROM doner_list WHERE blood_group='O-'";
$res7=mysqli_query($conn,$qON);
$On=mysqli_num_rows($res7);

$arr=['A+'=>$Ap,'A-'=>$An,'B+'=>$Bp,'B-'=>$Bn,'AB-'=>$ABn,'AB+'=>$ABp,'O+'=>$Op,'O-'=>$On];
?>