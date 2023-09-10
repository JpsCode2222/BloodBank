
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    @media print{
      body *{
        visibility:  none;
      }
      .container *{
        visibility: none;
      }
    }
</style>
</head>
  <body>
  <?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']=true){
  header('location:index.php');
  exit();
}
?>
<div class="container">
<form  method="GET">
<div class="input-group mt-2">
        <input type="text" name="data" class="form-control hide_btn" placeholder="Search">
        <div class="input-group-append">
            <input class="btn btn-success hide_btn" name="go" type="submit" value="Go"></input>
            <button class="btn btn-primary hide_btn" onclick="window.print()">Print</button>
            <a href="home.php" class="btn btn-dark">back</a>
        </div>
    </div>
</form>
</div>
<h4 class="text-center mt-1 mb-1">Donate To Patients Records</h4>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Sr.no</th>
            <th>p_name</th>
            <th>p_blood_group</th>
            <th>p_mobile</th>
            <th>p_aadhar</th>
            <th>p_blood_unit</th>
            <th>d_name</th>
            <th>d_blood_group</th>
            <th>d_mobile</th>
            <th>d_aadhar</th>
            <th>m_s</th>
            <th>date_time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_GET['go'])=="Go"){
            if($_SERVER['REQUEST_METHOD'] == "GET"){
                include('conn.php');
                extract($_GET);
                $q="SELECT * FROM donate WHERE p_name='$data' OR p_blood_group='$data' OR p_mobile='$data' OR d_name='$data'";
                $res=mysqli_query($conn,$q);
                $i=1;
                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr><td>".$i."</td>";
                    echo "<td>".$row['p_name']."</td>";
                    echo "<td>".$row['p_blood_group']."</td>";
                    echo "<td>".$row['p_mobile']."</td>";
                    echo "<td>".$row['p_aadhar']."</td>";
                    echo "<td>".$row['p_blood_unit']."</td>";
                    echo "<td>".$row['d_name']."</td>";
                    echo "<td>".$row['d_blood_group']."</td>";
                    echo "<td>".$row['d_mobile']."</td>";
                    echo "<td>".$row['d_aadhar']."</td>";
                    echo "<td>".$row['m_s']."</td>";
                    echo "<td>".$row['date_time']."</td></tr>";
                    $i++;
                }
                $num=mysqli_num_rows($res);
                if($_GET['data']=="" || $num==0){
                  echo "No Records Found";
                }
            }
        }
        else{
        include('conn.php');
        $q="SELECT * FROM `donate`";
        $res=mysqli_query($conn,$q);
        $i=1;
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr><td>".$i."</td>";
            echo "<td>".$row['p_name']."</td>";
            echo "<td>".$row['p_blood_group']."</td>";
            echo "<td>".$row['p_mobile']."</td>";
            echo "<td>".$row['p_aadhar']."</td>";
            echo "<td>".$row['p_blood_unit']."</td>";
            echo "<td>".$row['d_name']."</td>";
            echo "<td>".$row['d_blood_group']."</td>";
            echo "<td>".$row['d_mobile']."</td>";
            echo "<td>".$row['d_aadhar']."</td>";
            echo "<td>".$row['m_s']."</td>";
            echo "<td>".$row['date_time']."</td></tr>";
            $i++;
        }
    }
        ?>
    </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
