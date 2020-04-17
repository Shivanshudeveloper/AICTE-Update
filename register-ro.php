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

<div class="container w-25 mt-5 mb-5">
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/All_India_Council_for_Technical_Education_logo.png/220px-All_India_Council_for_Technical_Education_logo.png" alt="" class="img img-fluid w-25 mb-2" srcset="">
    </center>
    <h2 class="font-weight-bold mb-4 text-center">
        AICTE RO
    </h2>
    <?php include './includes/msg.inc.php' ?>

    <form action="./src/php/main.php" method="POST">

            <div class="form-group">
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


            <div class="form-row mt-4 mb-4">
                <div class="col">
                    <input type="text" id="defaultRegisterFormLastName" name="first" class="form-control" placeholder="Firsn Name">
                </div>
                <div class="col">
                    <input type="text" id="defaultRegisterFormLastName" name="last" class="form-control" placeholder="Last Name">
                </div>
            </div>



            

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mt-4 mb-4" placeholder="AICTE E-mail">

            <!-- Password -->
            <input type="password" id="defaultRegisterFormPassword" name="pwd" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                At least 8 characters and 1 digit
            </small>
            <input type="password" id="defaultRegisterFormPassword" class="form-control mt-4" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            

            <a href="./login.php" class="float-left card-link mt-2">Already have an Account</a>

            <!-- Sign up button -->
            <button class="btn btn-primary my-4 float-right" name="register_ro" type="submit">Register</button>

       

    </form>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>