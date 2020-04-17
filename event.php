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
    
</div>


<div class="m-5" >
        <div class="row">
            <div style="margin-top: 2%;" class="col">
                <h4>Posted Events</h4>
                <div class="list-group">
                    <a href="./event-view.php" class="list-group-item list-group-item-action">
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
            </div>
            <div class="col">
                <div class="card card-body shadow">
                        <h1 class="text-center mb-3">
                          <i class="fas fa-user-plus"></i> Post Envent
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
                                        placeholder="Event Name"
                                    />
                                </div>
                                <div class="col">
                                        <input
                                          type="email"
                                          id="email"
                                          name="email"
                                          pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" 
                                          class="form-control"
                                          required="required"
                                          placeholder="Event Location"
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

                        <input type="number" id="defaultRegisterFormLastName" name="last" class="form-control" placeholder="Fund Allocated">
                        <br>

                          <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                            <label for="assignro">Assign to RO</label>
                                            <select name="ro" id="ro" class="form-control">
                                                <option selected disabled value="">Select RO</option>
                                                <option value="Northern Regional Office (NRO) - Kanpur">Northern Regional Office (NRO) - Kanpur</option>
                                                <option value="North Western Regional Office (NWRO) - Chandigarh">North Western Regional Office (NWRO) - Chandigarh</option>
                                                <option value="Eastern Regional Office (ERO) - Kolkata">Eastern Regional Office (ERO) - Kolkata</option>
                                                <option value="ERO Camp Office - Guwahati">ERO Camp Office - Guwahati</option>
                                                <option value="Western Regional Office (WRO) - Mumbai">Western Regional Office (WRO) - Mumbai</option>
                                                <option value="SWRO Camp Office - Trivanthapuram">SWRO Camp Office - Trivanthapuram</option>
                                                <option value="South Western Regional Office (SWRO) - Bangalore">South Western Regional Office (SWRO) - Bangalore</option>
                                                <option value="South Central Regional Office (SCRO) - Hyderabad">South Central Regional Office (SCRO) - Hyderabad</option>
                                                <option value="Southern Regional Office (SRO) - Chennai">Southern Regional Office (SRO) - Chennai</option>
                                                <option value="Central Regional Office (CRO) - Bhopal">Central Regional Office (CRO) - Bhopal</option>
                                                <option value="CRO Camp Office – Vadodara">CRO Camp Office – Vadodara</option>
                                            </select>
                                    </div>

                                    <div class="col">
                                            <label for="assignro">Assign to Institutes</label>
                                            <input name="emailinstitute" type="email" placeholder="Institute Email" class="form-control">
                                    </div>
                                </div>
                            </div>

                          <div class="row">
                            <div class="col">
                                <label for="date">Start Date</label>
                                <input name="start_date" type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="date">Start Time</label>
                                <input name="start_time" type="time" class="form-control">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col">
                                <label for="date">End Date</label>
                                <input name="end_date" type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="date">End Time</label>
                                <input name="end_time" type="time" class="form-control">
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>