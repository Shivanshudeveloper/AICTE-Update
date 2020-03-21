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
        AICTE - SKILL DEVELOPMENT INITIATIVES (SD C)
    </h2>
    <form method="POST" action="./src/php/main.php">
        <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
            </div>
            <button onclick="window.print();" class="btn btn-primary">
                Print Simple
            </button>
            <?php 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                echo '
                <a href="./print_notes.php?id='.$id.'" class="float-right ml-2  mb-1 btn btn-primary">
                    Print With Notes
                </a>
                ';
            }
            ?>
            <a href="./edit_sih.php" class="float-right mb-1 btn btn-primary">
                Edit
            </a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">PARTICULARS</th>
                <th scope="col">AY 2017-18</th>
                <th scope="col">AY 2018-19</th>
                <th scope="col">AY 2019-20</th>
                <th scope="col">AY 2020-21</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include './src/php/dbh.php';
                    $sql = "SELECT * FROM skill;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['PARTICULARS'].'</th>
                            <td>
                                <input type="text"  name="a1'.$i.'" class="form-control" value="'.$row['AY_2017-18'].'" />
                            </td>
                            <td>
                                <input type="text" name="a2'.$i.'"  class="form-control" value="'.$row['AY_2018-19'].'" />
                            </td>
                            <td>
                                <input type="text" name="a3'.$i.'"  class="form-control" value="'.$row['AY_2019-20'].'" />
                            </td>
                            <td>
                                <input type="text" name="a4'.$i.'"  class="form-control" value="'.$row['AY_2020-21'].'" />
                            </td>
                        </tr>
                        ';
                        $i++;
                    }
                ?>
            </tbody>
        </table>
        </div>
        <button class="btn btn-primary float-right" name="edit_skill">Update</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>