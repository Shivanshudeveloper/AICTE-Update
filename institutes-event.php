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
    <h2 class="font-weight-bold mb-4 text-center">
        Events
    </h2>


    <div class="row">
        <div class="col">
            <div class="mt-2">
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
        </div>

        <div class="col">
                <div class="card card-body shadow">
                        <h1 class="text-center mb-3">
                          Upload Your Activity
                        </h1>
                        <form action="/users/register" method="POST">
                          <div class="form-group">
                            <!-- <label for="name">Name</label> -->
                            <div class="row">
                                <div class="col">
                                    <input
                                        type="name"
                                        id="name"
                                        name="name"
                                        pattern="^([- \w\d\u00c0-\u024f]+)$"
                                        class="form-control"
                                        required="required"
                                        placeholder="Title"
                                    />
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea name="description" placeholder="Description" id="description" class="form-control" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group mt-2">
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col">
                                <label for="date">Conducted Date</label>
                                <input name="start_date" type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="date">Conducted Time</label>
                                <input name="start_time" type="time" class="form-control">
                            </div>
                          </div>

                          <div class="form-group mt-2">
                          <div class="row">
                            <div class="col">
                                  <label for="date">Fund Utilized out of 100 Cr.</label>
                                  <input name="fund_utilize" type="number" class="form-control">
                            </div>

                            <div class="col">
                                  <label for="date">Number of People Attended</label>
                                  <input name="fund_utilize" type="number" class="form-control">
                            </div>
                                
                          </div>
                                
                          </div>
                          
                          
                          <button type="submit" class="btn float-right btn-primary mt-2">
                            Submit
                          </button>
                        </form>
                      </div>
                    </div>
            </div>

        
    </div>
    

    

    

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>