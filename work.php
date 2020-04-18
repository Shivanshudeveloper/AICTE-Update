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
        <div class="row">
            <div style="margin-top: 2%;" class="col">
                <h4>My Works</h4>
                <div class="list-group">
                    <a href="./event-view.php" class="list-group-item list-group-item-action">
                        <i class="fas mr-2 text-primary fa-calendar-check"></i>
                        Work 1
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas mr-2 text-primary fa-calendar-check"></i>
                        Work 2
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas mr-2 text-primary fa-calendar-check"></i>
                        Work 3
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas mr-2 text-primary fa-calendar-check"></i>
                        Work 4
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas mr-2 text-primary fa-calendar-check"></i>
                        Work 5
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card card-body shadow">
                        <h1 class="text-center mb-3">
                            <i class="fas fa-briefcase"></i> Submit New Work
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
                                <label>Description</label>
                                <textarea name="description" placeholder="Description" id="description" class="form-control" cols="30" rows="10"></textarea>
                          </div>

                          


                          <div class="form-group">
                            <label class="h5">Duration of Work</label>
                                <div class="row">
                                    <div class="col">
                                            <label for="assignro">Work started at</label>
                                            <select name="ro" id="ro" class="form-control">
                                                <option selected disabled value="">- Select Time -</option>
                                                <option value="7:00 AM">7:00 AM</option>
                                                <option value="8:00 AM">8:00 AM</option>
                                                <option value="9:00 AM">9:00 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="1:00 PM">1:00 PM</option>
                                                <option value="2:00 PM">2:00 PM</option>
                                                <option value="3:00 PM">3:00 PM</option>
                                                <option value="4:00 PM">4:00 PM</option>
                                                <option value="5:00 PM">5:00 PM</option>
                                                <option value="6:00 AM">6:00 AM</option>
                                            </select>
                                    </div>
                                    <div class="col">
                                            <label for="assignro">Work finished at</label>
                                            <select name="ro" id="ro" class="form-control">
                                                <option selected disabled value="">- Select Time -</option>
                                                <option value="7:00 AM">7:00 AM</option>
                                                <option value="8:00 AM">8:00 AM</option>
                                                <option value="9:00 AM">9:00 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="1:00 PM">1:00 PM</option>
                                                <option value="2:00 PM">2:00 PM</option>
                                                <option value="3:00 PM">3:00 PM</option>
                                                <option value="4:00 PM">4:00 PM</option>
                                                <option value="5:00 PM">5:00 PM</option>
                                                <option value="6:00 AM">6:00 AM</option>
                                                <option value="After 6:00 AM">After 6:00 AM</option>

                                            </select>
                                    </div>
                                </div>
                            </div>

                          <div class="row">
                            <div class="col">
                                <label for="date">Start Date</label>
                                <input name="start_date" type="date" class="form-control">
                            </div>

                            <div class="col">
                                <label for="date">End Date (Deadline)</label>
                                <input name="end_date" type="date" class="form-control">
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
    </div>

<script>
	CKEDITOR.replace('description');
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>