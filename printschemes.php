<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include './iframe/header.inc.php' ?>
<div class="m-4">
    <center>
        <img class="w-25" src="https://www.aicte-india.org/sites/default/files/logo_new.png" alt="AICTE">
    </center>

<?php
    include_once './src/php/dbh.php';

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM new_scheme WHERE id = '$id';";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        echo 
        '
        <div class="card mt-2">
            <div class="card-body">
                <h2 class="card-title">'.$row['title'].'</h2>
                <h2 class="card-title">'.$row['scheme'].'</h2>
                <a href="#!" class="card-link">File Download</a>
                <p class="card-text">
                '.$row['description'].'
                    <br>
                </p>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col">
                Proposed Target
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
        <br />
        <div class="row mt-2">
            <div class="col">
                Future Target
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
        <p class="float-left">
            Document Created: '.$row['created'].'<span class="ml-4"> Document Last Updated: '.$row['updated'].'  </span>
        </p>
        <br/>
        <hr/>
        ';
        echo "<h5>Document Printed On: ".date("Y-m-d")." At time: ".date("h:i:sa")."</h5>";
    }
?>
    
</div>

<script>
	$( document ).ready(function() {
        console.log( "ready!" );
        window.print();
    });
    
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>