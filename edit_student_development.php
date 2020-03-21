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
    <h2 class="font-weight-bold mb-2">
        Details of Student Development Scheme
    </h2>
    <form method="POST" action="./src/php/main.php">
        <hr>
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name of Schemes</th>
                <th scope="col">
                    2016-17
                    <br>
                    Beneficiary Amount
                </th>
                <th scope="col">2017-18
                <br>
                    Beneficiary Amount
                </th>
                <th scope="col">2018-19
                <br>
                    Beneficiary Amount
                </th>
                <th scope="col">2019-20
                <br>
                    Beneficiary Amount
                </th>
                <th scope="col">2020-21
                <br>
                    Beneficiary Amount
                </th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM student_development;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">
                                '.$row['names'].'
                            </th>
                            <td>
                                <small class="ml-5">Beneficiary</small>
                                <input type="text" name="beneficiary_16_17'.$i.'" class="form-control" value="'.$row['beneficiary_16_17'].'">
                                <span class="ml-5">
                                <small>Amount</small>
                                <input type="text" name="amount_16_17'.$i.'" class="form-control" value="'.$row['amount_16_17'].'">
                                </span>
                            </td>
                            <td>
                                <small class="ml-5">Beneficiary</small>
                                <input type="text" name="beneficiary_17_18'.$i.'" class="form-control" value="'.$row['beneficiary_17_18'].'">
                                <span class="ml-5">
                                <small>Amount</small>
                                <input type="text" name="amount_17_18'.$i.'" class="form-control" value="'.$row['amount_17_18'].'">
                                </span>
                            </td>
                            <td>
                                <small class="ml-5">Beneficiary</small>
                                <input type="text" name="beneficiary_18_19'.$i.'" class="form-control" value="'.$row['beneficiary_18_19'].'">
                                <span class="ml-5">
                                <small>Amount</small>
                                <input type="text" name="amount_18_19'.$i.'" class="form-control" value="'.$row['amount_18_19'].'">
                                </span>
                            </td>
                            <td>
                                <small class="ml-5">Beneficiary</small>
                                <input type="text" name="beneficiary_19_20'.$i.'" class="form-control" value="'.$row['beneficiary_19_20'].'">
                                <span class="ml-5">
                                <small>Amount</small>
                                <input type="text" name="amount_19_20'.$i.'" class="form-control" value="'.$row['amount_19_20'].'">
                                </span>
                            </td>
                            <td>
                                <small class="ml-5">Beneficiary</small>
                                <input type="text" name="beneficiary_20_21'.$i.'" class="form-control" value="'.$row['beneficiary_20_21'].'">
                                <span class="ml-5">
                                <small>Amount</small>
                                <input type="text" name="amount_20_21'.$i.'" class="form-control" value="'.$row['amount_20_21'].'">
                                </span>
                            </td>
                        </tr>
                        
                        ';
                        $i++;
                    }
            ?>
            </tbody>
        </table>
        </div>
        
        <button name="edit_student_development" class="btn btn-primary float-right mb-3">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>