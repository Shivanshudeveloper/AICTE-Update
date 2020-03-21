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
                    $sql = "SELECT * FROM status;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['names'].'</th>
                            <td>
                            '.$row['2017_18'].'
                            </td>
                            <td>
                                Total Proposal = <input name="2018-19_t'.$i.'" class="form-control" type="text" value="'.$row['2018-19_t'].'"> 
                                <br>
                                Rs. <input name="2018-19_p'.$i.'" class="form-control" value="'.$row['2018-19_p'].' ">
                            </td>
                            <td>
                                Total Proposal = <input name="2019-20_tp'.$i.'" class="form-control" type="text" value="'.$row['2019-20_tp'].'"> 
                                <br>
                                Rs. <input name="2019-20_rs'.$i.'" class="form-control" value="'.$row['2019-20_rs'].'">
                                <br>
                                Total Proposal = <input name="2019-20_rs_tp1'.$i.'" class="form-control" type="text" value="'.$row['2019-20_rs_tp1'].'"> 
                                <br>
                                Rs. <input name="2019-20_rs_tp2'.$i.'" class="form-control" value="'.$row['2019-20_rs_tp2'].'">
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
            ?>
            </tbody>
        </table>
        </div>
        <button name="edit_status_grant" class="btn btn-primary float-right mb-3">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>