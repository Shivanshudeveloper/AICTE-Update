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
                <th scope="col">Schemes</th>
                <th scope="col">2017-18</th>
                <th scope="col">2018-19</th>
                <th scope="col">2019-20</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM neat;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['id'].'</th>
                            <td>
                            <input type="text" class="form-control" value="'.$row['toal_registration'].'"  name="tot1" />
                                
                            </td>
                            <td>
                            <input type="text" class="form-control" value="'.$row['student_register'].'" name="stu1"  /
                            
                            </td>
                            <td>
                            <input type="text" class="form-control" value="'.$row['learner_register'].'" name="learn1"  /
                            
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
            ?>
            </tbody>
        </table>
        </div>
        <button name="edit_neat" class="btn btn-primary float-right mb-3">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>