<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
<?php include './includes/header.inc.php' ?>
<div class="container mb-2">

    <div class="row">
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

    <?php include './includes/msg.inc.php' ?>

    <form action="./src/php/main.php" enctype="multipart/form-data" method="post" class="mt-2">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Departments</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
                        <?php
                            echo '
                                <option selected value="'.$_SESSION['department'].'">'.$_SESSION['department'].'</option>
                        ';
                        ?>
                        <!-- <option selected="" disabled="">Select Department</option>
                        <option value="CMOffice">Chairman Office</option>
                        <option value="VCMOffice">Vice-Chairman Office</option>
                        <option value="MSOffice">Member Secretary Office</option>
                        <option value="Policy-and-Academic-Planning-Bureau">Policy and Academic Planning Bureau</option>
                        <option value="MIC">MIC</option>
                        <option value="NEAT">NEAT</option>
                        <option value="Student development cell">Student development cell</option>
                        <option value="Faculty development cell">Faculty development cell</option>
                        <option value="Institute development cell">Institute development cell</option>
                        <option value="Margadharshan cell">Margadharshan cell</option>
                        <option value="Margadharshak cell">Margadharshak cell</option>
                        <option value="Exam reforms cell">Exam reforms cell</option>
                        <option value="ATAL cell">ATAL cell</option>
                        <option value="Approval-Bureau">Approval Bureau</option>
                        <option value="Finance-Bureau">Finance Bureau</option>
                        <option value="Adminstration">Administration</option>
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
                        <option value="E-Gov">E-Gov</option> -->
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Schemes/Project/Task</label>

            <?php include './search_scheme.php'; ?>
            
            <!-- <input name="scheme" type="text" class="form-control"> -->

            <!-- <select name="scheme" class="form-control" id="exampleFormControlSelect2">
            <option>Margdarshan</option>
            <option>RPS</option>
            <option>RPS (Management)</option>
            <option>RPS (NER)</option>
            <option>RPS (NDF)</option>
            <option>RPS (SC/ST)</option>
            <option>Pragati</option>
            <option>Saksham</option>
            <option>PG</option>
            <option>NDF</option>
            <option>ESS</option>
            <option>SPDC (SC/ST)</option>
            <option>MODROB</option>
            <option>MODROB (Rural)</option>
            <option>GOC</option>
            <option>UBA</option>
            <option>Prerana</option>
            <option>Samridhi</option>
            <option>STTP</option>
            <option>FDP</option>
            <option>AICTE - ISTE</option>
            <option>FDP through Technical university for teachers</option>
            <option>FDP through Technical university for Librarians</option>
            <option>STTP for Physical Trainers/Sports Game</option>
            <option>QIP</option>
            <option>INAE (DVP)</option>
            <option>INAE (TRF)</option>
            <option>INAE (TG)</option>
            <option>MITACS</option>
            <option>SSPCA</option>
            <option>Travel Grant</option>
            <option>ELCTE</option>
            <option>SS NER</option>
            </select> -->
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Current Status</label>
            <input name="title" id="currentStatus" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="description" col="10" rows="7"></textarea>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="upload" name="upload"
                aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlTextarea1">Proposed Target (Future Target F.Y. 2020-21)</label>
                    <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                    
                </div>
                <div class="col">
                    <label for="exampleFormControlTextarea1">Targets Met Till Date (Future Target F.Y. 2020-21)</label>
                    <textarea name="editor2" id="editor2" cols="30" rows="10"></textarea>
                    
                </div>
            </div>
            
        </div>

        <hr>
       
        <center>
        <div id="changeBtn">
            <button name="submit_form" class="btn w-50 btn-primary mb-3">Submit</button>
        </div>
        </center>
    </form>
</div>

<script>
	CKEDITOR.replace('editor', {
        height: 300,
    });
	CKEDITOR.replace('editor2', {
        height: 300,
    });
    CKEDITOR.replace('description');
</script>





<script src="./src/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>