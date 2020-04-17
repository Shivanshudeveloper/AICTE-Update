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

<div class="m-4">
    <h2 class="font-weight-bold mb-2 text-center">
        Events
    </h2>
    <div class="row mb-2">
        <div class="col">
            <h2 class="font-weight-bold mb-2 float-left">
                <?php 
                    echo 'Welcome '.$_SESSION['name'];
                ?>
            </h2>
            <br/>
            <br/>
            <h5>
                <?php 
                    echo $_SESSION['department'];
                ?>
            </h5>
        </div>
        <div class="col-3 float-right">
            
        </div>
    </div>

    <section>
        <div class="list-group">
                        <a href="./event-stats.php" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 1
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 2
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 3
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 4
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 5
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 6
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 7
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 8
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 9
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas mr-2 text-primary fa-calendar-check"></i>
                            Event 10
                        </a>
        </div>
    </section>


    

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>