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
        Court Cases
    </h2>
    <form>
        
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
                Details of Court Cases
            </div>
            <button onclick="window.print();" class="btn btn-primary">
                Print Simple
            </button>

            <?php 
                if ($_SESSION['department'] == "VCMOffice" || $_SESSION['department'] == "CMOffice" || $_SESSION['department'] == "MSOffice" || $_SESSION['department'] == "CCO") {
                    echo '
                        <a href="./edit_status_grant.php" class="float-right mb-1 btn btn-primary">
                            Edit
                        </a>
                    ';
                }
            ?>

            
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Year</th>
                <th scope="col">Supreme Court</th>
                <th scope="col">High Court</th>
                <th scope="col">CAT</th>
                <th scope="col">District Court</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">2017</th>
                            <td>
                            9
                            </td>
                            <td>
                                335
                            </td>
                            <td>
                                14
                            </td>
                            <td>
                                6
                            </td>
                            <td>
                                364
                            </td>
            </tr>
            <tr>
                <th scope="row">2017</th>
                            <td>
                            9
                            </td>
                            <td>
                                335
                            </td>
                            <td>
                                14
                            </td>
                            <td>
                                6
                            </td>
                            <td>
                                364
                            </td>
            </tr>
            <tr>
                <th scope="row">2017</th>
                            <td>
                            9
                            </td>
                            <td>
                                335
                            </td>
                            <td>
                                14
                            </td>
                            <td>
                                6
                            </td>
                            <td>
                                364
                            </td>
            </tr>
            <tr>
                <th scope="row">2017</th>
                            <td>
                            9
                            </td>
                            <td>
                                335
                            </td>
                            <td>
                                14
                            </td>
                            <td>
                                6
                            </td>
                            <td>
                                364
                            </td>
            </tr>




            </tbody>
        </table>
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>