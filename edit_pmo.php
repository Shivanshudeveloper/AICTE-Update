<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
<?php include './includes/header.inc.php' ?>

<h2 class="text-center">
	VVIP/PMO References
	<br>
</h2>
		<div class="form-group">
            <div class="row">
                <div class="col">
                <?php include './includes/msg.inc.php' ?>
                    <label class="h4" for="exampleFormControlTextarea1">Edit VVIP/PMO References</label>
                    <?php
                        include_once './src/php/dbh.php';
                        $sql = "SELECT * FROM information WHERE name = 'VVIP/PMO References';";
                        $result = mysqli_query($conn, $sql);
                            echo '
                            <form action="./src/php/main.php" method="POST">
                            ';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <textarea name="description_pmo" id="editor" cols="60" rows="60">
                                        '.$row['description'].'
                                    </textarea>
                                ';
                            }
                            echo '
                                    <center>
                                        <button type="submit" name="update_pmo_references" class="btn w-50 btn-primary mt-2 mb-4">Update</button>
                                    </center>
                                </form>
                            ';
                    ?>

                    
                </div>
            </div>
            
        </div>



<script>
	CKEDITOR.replace('editor', {
        height: 1000,
    });
</script>

</body>

</html>
