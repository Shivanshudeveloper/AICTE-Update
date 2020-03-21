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
        Smart India Hackathon(SIH)
    </h2>
    <form method="POST" action="./src/php/main.php">
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
            <button onclick="window.print();" class="btn btn-primary">
                Print
            </button>
            <a href="./edit_neat.php" class="float-right mb-1 btn btn-primary">
                Edit
            </a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Edition</th>
                <th scope="col">No. of PSs</th>
                <th scope="col">Ministries & departments / Industry</th>
                <th scope="col">Students reached</th>
                <th scope="col">Students participated</th>
                <th scope="col">Nodal centres</th>
                <th scope="col">Successful projects deployed</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM sih;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['year'].'</th>
                            <td>
                            <input type="text" name="pss'.$i.'" value="'.$row['pss'].'" class="form-control" />
                                
                            </td>
                            <td>
                            <input type="text" name="industry'.$i.'" value="'.$row['industry'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input type="text" name="reached'.$i.'" value="'.$row['reached'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input type="text" name="participated'.$i.'" value="'.$row['participated'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input type="text" name="centres'.$i.'" value="'.$row['centres'].'" class="form-control" /
                            
                            </td>
                            <td>
                            <input type="text" name="successful'.$i.'" value="'.$row['successful'].'" class="form-control" /
                            
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
                ?>
            </tbody>
        </table>
        </div>
        <button class="btn btn-primary float-right" name="edit_sih">Update</button>

    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>