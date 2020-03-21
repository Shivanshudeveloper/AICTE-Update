<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include './includes/header.inc.php' ?>

<div class="container mt-5 mb-5">
    <h2 class="font-weight-bold mb-2 text-center">
        Examination
    </h2>
        
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Year</th>
                <th scope="col">No. of  1-day Awareness Program conducted/proposed</th>
                <th scope="col">Total No. of faculties trained</th>
                <th scope="col">No. of  3-day residential workshop Conducted/proposed</th>
                <th scope="col">Total No. of faculties trained</th>
                <th scope="col">Remarks</th>
                </tr>
                <form method="POST" action="./src/php/main.php">
            </thead>
            <tbody>
                <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM examincation;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['year'].'</th>
                            <td>
                                <input name="awareness'.$i.'" type="text" value="'.$row['awareness'].'" class="form-control">
                            </td>
                            <td>
                                <input name="faculties'.$i.'" type="text" value="'.$row['faculties'].'" class="form-control">
                            </td>
                            <td>
                                <input name="workshop'.$i.'" type="text" value="'.$row['workshop'].'" class="form-control">
                            </td>
                            <td>
                                <input name="faculties_trained'.$i.'" type="text" value="'.$row['faculties_trained'].'" class="form-control">
                            </td>
                            <td>
                                <input name="remarks'.$i.'" type="text" value="'.$row['remarks'].'" class="form-control">
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
                ?>
                
            </tbody>
        </table>
        <button class="btn btn-primary" name="edit_examination">Update</button>
        </form>
        </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>