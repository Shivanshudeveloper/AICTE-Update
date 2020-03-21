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
        Status of Grant Released
    </h2>
    <form method="POST" action="./src/php/main.php">
        
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Academic Year</th>
                <th scope="col">Number of Beneficiaries</th>
                <th scope="col">Academic Year</th>
                <th scope="col">Number of Beneficiaries</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM pmsss;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['year_1'].'</th>
                            <td>
                            <input type="text" name="beneficiaries_1'.$i.'" class="form-control" value="'.$row['beneficiaries_1'].'" />
                            </td>
                            <td>
                            <input type="text" name="year_2'.$i.'" class="form-control" value="'.$row['year_2'].'" />
                            </td>
                            <td>
                            <input type="text" name="beneficiaries_2'.$i.'" class="form-control" value="'.$row['beneficiaries_2'].'"  />
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
            ?>
            </tbody>
        </table>
        </div>
        <button name="edit_pmsss" class="btn btn-primary float-right mb-3">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>