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
        Events Stats
    </h2>

    <div class="row">
            <div class="col">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header text-center h5">Total Institutes Participated</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">658</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header text-center h5">Total Users Participated</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">200</h5>
                    </div>
                </div>
            </div>

    </div>

    <div class="mt-2 -75">
        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary mt-4 mr-3 float-right">
            Assign Event Task
        </button>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" action="#!">
                        <div class="form-group">
                            <label for="assignment">Institute Name</label>
                            <input type="text" placeholder="Institute Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Institute Email</label>
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Description</label>
                            <textarea name="assignevent" class="form-control" id="assignevent" cols="30" rows="10"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->


        <h1 class="font-weight-bold">
            Event 1
        </h1>
        <label class="mt-2" for="institutes">Activity Conducted</label>
       <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       </p>
    </div>

    <h4>
        Institutes Participated from <?php echo $_SESSION['department']; ?>
    </h4>


    <div class="list-group">
                    <a href="./event-institutes.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-university text-success"></i>
                        Institutes 1
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-university text-success"></i>
                        Institutes 2
                    </a>
     </div>

    

</div>

<script>
	CKEDITOR.replace('assignevent');
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>