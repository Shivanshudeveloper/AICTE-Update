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

<div class="m-2">
    <h2 class="font-weight-bold mb-2 text-center">
        Summer Internship
    </h2>
    <form action="./src/php/main.php" method="POST">
        
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
            <button onclick="window.print();" class="btn btn-primary mb-2">
                Print
            </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Particulars</th>
                <th scope="col">No. of First Year Students</th>
                <th scope="col">No. of  Second Year Students</th>
                <th scope="col">No. of  Third  Year Students</th>
                <th scope="col">Total No. of faculties trained</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM summer_internships;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">
                            '.$row['particulars'].'
                            </th>
                            <td>
                            <input name="first_year'.$i.'" type="text" value="'.$row['first_year'].'" class="form-control" />
                                
                            </td>
                            <td>
                            <input name="second_year'.$i.'" type="text" value="'.$row['second_year'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input name="third_year'.$i.'" type="text" value="'.$row['third_year'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input name="total'.$i.'" type="text" value="'.$row['total'].'" class="form-control" /
                            
                            </td>
                        </tr>
                        
                        ';
                        $i++;
                    }
                ?>
            </tbody>
        </table>
        </div>
        <button class="btn btn-primary float-right" name="edit_summer_internship">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>