<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include './header.inc.php' ?>

<div class="m-2">
    <h2 class="font-weight-bold mb-2 text-center">
        Margdarshak Cell 
    </h2>
    <form action="./src/php/main.php" method="POST">
        
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
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
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Year</th>
                <th scope="col">Margdarshak</th>
                <th scope="col">Mentor Institutions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        2016-17
                    </td>
                    <td>
                        -
                    </td>
                    <td>
                        4 
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>
                        2018-19
                    </td>
                    <td>
                        -
                    </td>
                    <td>
                        10
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">3</th>
                    <td>
                        2019-20
                    </td>
                    <td>
                        - 
                    </td>
                    <td>
                        288
                    </td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>
                        2020-21
                    </td>
                    <td>
                        42 
                    </td>
                    <td>
                        -
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </form>
</div>

<div class="h2 container">
Mapped to Margdarshaks 318
<br>
Mapped to Mentor Institutions 462 
<br>
Grand Total 780
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>