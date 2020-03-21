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
    <form>
        <hr>
        <div class="form-group">
            <button class="btn btn-success">
                Add More
            </button>
        </div>
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
                Amount Released (In Lacs)
            </div>
            <button onclick="window.print();" class="btn btn-primary">
                Print Simple
            </button>
            <?php 
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    echo '
                    <a href="./print_notes.php?id='.$id.'" class="float-right mr-2  mb-1 btn btn-primary">
                        Print With Notes
                    </a>
                    ';
                }
            ?>
            <a href="./edit_student_development.php" class="float-right mb-1 btn btn-primary">
                Edit
            </a>
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
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">
                                '.$row['names'].'
                            </th>
                            <td>
                                '.$row['beneficiary_16_17'].' 
                                <span class="ml-5">
                                '.$row['amount_16_17'].' 
                                </span>
                            </td>
                            <td>
                            '.$row['beneficiary_17_18'].'  
                                <span class="ml-5">
                                '.$row['amount_17_18'].'  
                                </span>
                            </td>
                            <td>
                            '.$row['beneficiary_18_19'].'  
                                <span class="ml-5">
                                '.$row['amount_18_19'].'  
                                </span>
                            </td>
                            <td>
                            '.$row['beneficiary_19_20'].'   
                                <span class="ml-5">
                                '.$row['amount_19_20'].'   
                                </span>
                            </td>
                            <td>
                            '.$row['beneficiary_20_21'].'   
                                <span class="ml-5">
                                '.$row['amount_20_21'].'  
                                </span>
                            </td>
                        </tr>
                        
                        ';
                    }
            ?>
            </tbody>
        </table>
        </div>
        
        <button class="btn btn-primary float-right mb-3">Submit</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>