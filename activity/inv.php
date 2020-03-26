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
$sql = "SELECT * FROM institution_innovation_cell WHERE id = 1 ;";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="form-group">
    <label for="exampleInputEmail1">TOTAL OUTREACH</label>
    <input type="text" name="f1" value="'.$row['TOTAL'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">INDIA FIRST LEADERSHIP TALK SERIES</label>
            <input type="text" name="f2" value="'.$row['INDIA_FIRST'].'"  class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">WORKSHOPS</label>
            <input type="text" name="f3" value="'.$row['WORKSHOPS'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">INNOVATION DAY CAMPAIN</label>
            <input type="text" name="f4" value="'.$row['INNOVATION'].'" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

    ';
}

?>


  




  <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<!-- Profile Should be created -->
<!-- 600 Companies should be visible in the portal -->
<!-- Category in should be define in the search -->
<!-- Collage Name should be added -->
<!-- Jobs -->
<!-- In which area do you want internship -->

<!-- 
Which city do you prefer

Internshala all companies should be integrated
-->