<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<form action="./main.php" class="container mt-4" method="POST">

<?php 
include './dbh.php';
$sql = "SELECT * FROM examination_reforms WHERE id = 1 ;";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="form-group">
    <label for="exampleInputEmail1">THRISHUR</label>
    <input type="text" name="f1" value="'.$row['THRISHUR'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">HYDERABAD</label>
            <input type="text" name="f2" value="'.$row['HYDERABAD'].'"  class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">AHMEDABAD</label>
            <input type="text" name="f3" value="'.$row['AHMEDABAD'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">BHUBANESHWAR</label>
            <input type="text" name="f4" value="'.$row['BHUBANESHWAR'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">PATNA</label>
            <input type="text" name="f5" value="'.$row['PATNA'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">KOLKATA</label>
            <input type="text" name="f6" value="'.$row['KOLKATA'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">PUNE</label>
            <input type="text" name="f6" value="'.$row['PUNE'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">UDAIPUR</label>
            <input type="text" name="f7" value="'.$row['UDAIPUR'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">GURUGRAM</label>
            <input type="text" name="f8" value="'.$row['GURUGRAM'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

    ';
}

?>


  




  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>