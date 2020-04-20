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

<div class="m-5">
    <h2 class="font-weight-bold mb-2">
        All India Council for Technical Education
    </h2>
    <?php
        include_once './src/php/dbh.php';
        $sql1 = "SELECT * FROM information;";
        $result1 = mysqli_query($conn, $sql1);
        $table_name = '';
        echo '
        <button onclick="window.print();" class="btn btn-outline-secondary float-right mb-2">Print</button>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>';

        $sql = "SELECT * FROM new_scheme;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="alert alert-primary" role="alert">
                    <center class="h2 font-weight-bold">
                        '.$row['title'].'
                    </center>
                </div>
            ';
            echo 
                            '
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h2 class="card-title">'.$row['title'].'</h2>
                                    <h2 class="card-title">'.$row['scheme'].'</h2>
                                    <p class="card-text">
                                    '.$row['description'].'
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title">Proposed Target (Future Target F.Y. 2020-21)</h4>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <p class="card-text">
                                            '.$row['proposed_target'].'
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row mt-2">
                                <div class="col">
                                    <h4 class="card-title">Targets Met Till Date (Future Target F.Y. 2020-21)</h4>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <p class="card-text">
                                            '.$row['future_target'].'
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="float-left mt-2">
                                Document Created: '.$row['created'].'<span class="ml-4"> Document Last Updated: '.$row['updated'].'  </span>
                            </p>
                            <br />
                            <hr />
                            <br />
                            
                            ';
        }
    ?>


</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>