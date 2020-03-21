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
    <?php 
        include './src/php/dbh.php';
        $id = $_GET['id'];
        $table = '';
        $sql = "SELECT * FROM information WHERE id = '$id';";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)) {
            $table = $row['tables'];
            echo '
            <div class="card mt-2">
                <div class="card-body">
                    <h2 class="card-title">'.$row['name'].'</h2>
                    <p class="card-text">
                    '.$row['description'].'
                        <br>
                    </p>
                </div>
            </div>
            ';
        }

        echo '
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>';

        echo '
        <div class="card mt-2">
        <div class="card-body">
            <iframe id="inlineFrameExample"
                title="Inline Frame Example"
                width="100%"
                height="500"
                src="./'.$table.'">
            </iframe>
            </div>
        </div>
        
        ';

        echo '
        <center>
            <button onclick="window.print();" class="btn m-2 w-50 btn-primary">
                Print With Notes
            </button>
        </center>
        ';
    ?>
    
    
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>