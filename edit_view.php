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
<div class="container mb-2">

    <div class="row">
        <div class="col">
            <h2 class="font-weight-bold mb-2 float-left">
                All India Council for Technical Education
            </h2>
        </div>
        <div class="col-3 float-right">
            <a class="btn btn-info mt-1" href="./view.php">View By Department</a>
        </div>
    </div>

    

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlTextarea1">Proposed Target (Future Target F.Y. 2020-21)</label>

                    <?php
                        include_once './src/php/dbh.php';
                        $id = mysqli_real_escape_string($conn, $_GET['id']);
                        $edit = mysqli_real_escape_string($conn, $_GET['e']);
                        
                        $sql = "SELECT * FROM new_scheme WHERE id = '$id';";
                        $result = mysqli_query($conn, $sql);

                        if ($edit == "proposed") {
                            echo '
                            <form method="POST">
                            ';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '

                                    <textarea name="editor" id="editor" cols="30" rows="10">
                                        '.$row['proposed_target'].'
                                    </textarea>
                                
                                ';
                            }

                            echo '
                                    <center>
                                        <button type="submit" name="update_proposed" class="btn w-50 btn-primary mb-3">Update</button>
                                    </center>
                                </form>
                            ';
                        } elseif ($edit == "future") {
                            echo '
                            <form method="POST">
                            ';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '

                                    <textarea name="editor2" id="editor2" cols="30" rows="10">
                                        '.$row['future_target'].'
                                    </textarea>
                                
                                ';
                            }

                            echo '
                                    <center>
                                        <button type="submit" name="update_future" class="btn w-50 btn-primary mb-3">Update</button>
                                    </center>
                                </form>
                            ';
                        }

                        if (isset($_POST['update_proposed'])) {
                            $proposed_new = mysqli_real_escape_string($conn, $_POST['editor']);

                            $sql = "UPDATE new_scheme SET proposed_target = '$proposed_new' WHERE id = '$id';";
                            mysqli_query($conn, $sql);

                            header('Location: ./edit_view.php?update=sucess&id='.$id.'&e=proposed');
                        }

                        if (isset($_POST['update_future'])) {
                            $future_new = mysqli_real_escape_string($conn, $_POST['editor2']);

                            $sql = "UPDATE new_scheme SET future_target = '$future_new' WHERE id = '$id';";
                            mysqli_query($conn, $sql);

                            header('Location: ./edit_view.php?update=sucess&id='.$id.'&e=future');
                        }


                        
                    ?>

                    
                </div>
            </div>
            
        </div>
</div>

<script>
	CKEDITOR.replace('editor');
	CKEDITOR.replace('editor2');
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>