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
        AICTE All Admin Login
    </h2>
    <?php include './includes/msg.inc.php' ?>

    <form action="./src/php/authenticate.php" method="POST">

        <div class="form-group">
                <select class="form-control" name="department" id="department">
                <option selected="" disabled="">Select Department</option>
                <option value="CMOffice">Chairman Office</option>
                <option value="VCMOffice">Vice-Chairman Office</option>
                <option value="MSOffice">Member Secretary Office</option>
                <option value="Policy-and-Academic-Planning-Bureau">Policy and Academic Planning Bureau</option>
                <option value="MIC">MIC</option>
                <option value="NEAT">NEAT</option>
                <option value="RIFD">Research, Institutional and Faculty Development (RIFD) Bureau</option>
                <option value="Approval-Bureau">Approval Bureau</option>
                <option value="Finance-Bureau">Finance Bureau</option>
                <option value="Adminstration">Administration</option>
                <option value="CMAT/GPAT-Cell">CMAT/GPAT Cell</option>
                <option value="PMSSS-Cell">PMSSS Cell</option>
                <option value="Skill-Development-Cell">Skill Development Cell</option>
                <option value="SWAYAM-Project-Cell">SWAYAM Project Cell</option>
                <option value="Grievance-Redressal-Cell">Grievance Redressal Cell</option>
                <option value="Legal-Cell">Legal Cell</option>
                <option value="Vigilance-Cell">Vigilance Cell</option>
                <option value="NEQIP-Cell">NEQIP Cell</option>
                <option value="Estate-Management-Cell">Estate Management Cell</option>
                <option value="RTI-Cell">RTI Cell</option>
                <option value="Internal-Audit-Cell">Internal Audit Cell</option>
                <option value="Parliament-Cell">Parliament Cell</option>
                <option value="Hindi-Cell">Hindi Cell</option>
                <option value="Direct-Benefit-Transfer-(DBT)-Cell">Direct Benefit Transfer (DBT) Cell</option>
                <option value="Newsletter">Newsletter</option>
                <option value="Library">Library</option>
                <option value="General-Office-Number">General Office Number</option>
                <option value="E-Gov">E-Gov</option>
                </select>
            </div>


            <div class="form-row mt-4 mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" name="first" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" name="last" class="form-control" placeholder="Last name">
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
            <button class="btn btn-primary my-4 float-right" name="register_user" type="submit">Register</button>

       

    </form>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>