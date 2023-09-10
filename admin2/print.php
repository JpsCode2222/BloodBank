
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
        visibility: hidden;
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
            <a href="export_data.php" class="btn btn-success">Export to Excel</a>
        </div>
    </div>
</form>
</div>
<h4 class="text-center mt-1 mb-1">Blood Bank Records</h4>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Sr.no</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>DOB</th>
            <th>Adhar</th>
            <th>Address</th>
            <th>Disease</th>
            <th>Blood Group</th>
            <th>Blood unit</th>
            <th>Manager staff</th>
            <th>Age</th>
            <th>Weight</th>
            <th>HB</th>
            <th>Date Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_GET['go'])=="Go"){
            if($_SERVER['REQUEST_METHOD'] == "GET"){
                include('conn.php');
                extract($_GET);
                $q="SELECT * FROM all_doner_list WHERE doner_name='$data' OR blood_group='$data' OR mobile='$data' OR dob='$data' OR aadhar='$data' OR address='$data' OR disease='$data' OR blood_group='$data' OR date_time='$data'";
                $res=mysqli_query($conn,$q);
                $i=1;
                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr><td>".$i."</td>";
                    echo "<td>".$row['doner_name']."</td>";
                    echo "<td>".$row['mobile']."</td>";
                    echo "<td>".$row['dob']."</td>";
                    echo "<td>".$row['aadhar']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['disease']."</td>";
                    echo "<td>".$row['blood_group']."</td>";
                    echo "<td>".$row['blood_unit']."</td>";
                    echo "<td>".$row['manager_staff']."</td>";
                    echo "<td>".$row['age']."</td>";
                    echo "<td>".$row['weight']."</td>";
                    echo "<td>".$row['hb']."</td>";
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
        $q="SELECT * FROM `all_doner_list`";
        $res=mysqli_query($conn,$q);
        $i=1;
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr><td>".$i."</td>";
            echo "<td>".$row['doner_name']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['aadhar']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['disease']."</td>";
            echo "<td>".$row['blood_group']."</td>";
            echo "<td>".$row['blood_unit']."</td>";
            echo "<td>".$row['manager_staff']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['weight']."</td>";
            echo "<td>".$row['hb']."</td>";
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
